const addressInput = document.getElementById('address-search-bar');
const addressSuggestions = document.getElementById('address-suggestion');
const originalData = document.getElementById('address-suggestion').innerHTML;

addressInput.addEventListener('input', async () => {
    const query = addressInput.value;
    if (query.length >= 3) {
        try {
            const formData = new FormData();
            formData.append('address', query);

            const response = await fetch('http://sirvice/public/dashboard/search_address', {
                method: 'POST',
                headers: {
                    'Cookie': 'PHPSESSID=<?php echo session_id(); ?>'
                },
                body: formData
            });

            const data = await response.json();
            addressSuggestions.innerHTML = '';
            for (const address of data) {
                const suggestion = document.createElement('div');
                suggestion.classList.add('address-card');
                suggestion.innerHTML = `
                    <div class="address-content">
                        <h3 class="title-address">${address.label_address}</h3>
                        <p class="address">${address.street}, ${address.sub_district}, ${address.district}, ${address.regency}, ${address.province}, ${address.post_code}</p>
                        <small class="note-address">"${address.additional_information}"</small>
                    </div>
                    <div class="button-edit-and-delete">
                        <a href="http://sirvice/public/dashboard/address/${address.id}" class="edit-address">
                            <i class="material-icons-round">edit</i>
                            <span>Edit</span>
                        </a>
                        <form action="#">
                            <button type="button" class="delete-address delete-address-modal-show">
                                <i class="material-icons-round">delete</i>
                                <span>Delete</span>
                            </button>
                        </form>
                    </div>
                `;
                addressSuggestions.appendChild(suggestion);
            }
        } catch (error) {
            console.log(error);
        }
    } else {
        addressSuggestions.innerHTML = originalData;
    }
});