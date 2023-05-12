const orderForm = document.getElementById('order-form');
const orderFormSubmitForPayment = document.getElementById('nextBtn2');

function paymentDetails() {
    let subTotal = 0;
    const acUnits = document.getElementById('ac-unit').value;
    const invoiceTableNoBody = document.querySelector('.invoice-table table');
    const invoiceTable = document.querySelector('.invoice-table table tbody');
    const acServices = document.querySelectorAll('input[name="service_id[]"]:checked');

    acServices.forEach((service, index) => {
        const label = service.nextElementSibling;
        const labelRegex = label.textContent.replace(/ - Rp\.\d+(\.\d+)?$/, '');
        const priceRegex = label.textContent.replace(/.* - Rp\./, '');
        const amountPrice = parseInt(acUnits) * parseFloat(priceRegex.replace('.', ''));
        subTotal += amountPrice;
    
        const newRow = document.createElement('tr');
        newRow.classList.add('invoice-detail');
        newRow.innerHTML = `
            <td><span id="invoice_services_${index}">${labelRegex}</span></td>
            <td><span id="invoice_number_unit_${index}">${acUnits}</span></td>
            <td>Rp. <span id="invoice_price_per-ac_${index}">${priceRegex}</span>,-</td>
            <td>Rp. <span id="invoice_amount_price_${index}">${amountPrice.toLocaleString()}</span>,-</td>
        `;
        invoiceTable.appendChild(newRow);
    });

    const serviceTax = subTotal * 0.02;
    const total = subTotal + serviceTax;

    const subTotalRow = document.createElement('tr');
    subTotalRow.classList.add('sub-total');
    subTotalRow.innerHTML = `
        <td>Sub Total</td>
        <td></td>
        <td></td>
        <td>Rp. <span id="invoice_sub_total">${subTotal.toLocaleString()}</span>,-</td>
    `;
    invoiceTable.appendChild(subTotalRow);

    const serviceTaxRow = document.createElement('tr');
    serviceTaxRow.classList.add('tax');
    serviceTaxRow.innerHTML = `
        <td>Service Tax (2%)</td>
        <td></td>
        <td></td>
        <td>Rp. <span id="invoice_service_tax">${serviceTax.toLocaleString()}</span>,-</td>
    `;
    invoiceTable.appendChild(serviceTaxRow);
    
    const tFoot = document.createElement('tfoot');
    const finalTotalRow = document.createElement('tr');
    finalTotalRow.classList.add('final-total');
    const finalTotal = subTotal + serviceTax;
    finalTotalRow.innerHTML = `
        <td>Total</td>
        <td></td>
        <td></td>
        <td>Rp. <span id="invoice_final_total">${finalTotal.toLocaleString()}</span>,-</td>
    `;
    tFoot.appendChild(finalTotalRow);
    invoiceTableNoBody.appendChild(tFoot);
};

function clearServices() {
    const invoiceTableNoBody = document.querySelector('.invoice-table table');
    const invoiceTable = document.querySelector('.invoice-table table tbody');
    const serviceRows = document.querySelectorAll('.invoice-detail');
    const subtotalRow = document.querySelector('.sub-total');
    const taxRow = document.querySelector('.tax');
    const tFoot = document.querySelector('.invoice-table table tfoot');
    
    serviceRows.forEach(row => {
        invoiceTable.removeChild(row);
    });

    if (subtotalRow) {
        invoiceTable.removeChild(subtotalRow);
    }

    if (taxRow) {
        invoiceTable.removeChild(taxRow);
    }

    invoiceTableNoBody.removeChild(tFoot);
    
}
