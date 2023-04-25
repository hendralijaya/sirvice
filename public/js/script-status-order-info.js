let statusOrder = document.querySelectorAll('.status.status-order');

statusOrder.forEach(function(element) {
    if (element.innerText === 'In Progress') {
        element.classList.add('in-progress');
    } else if (element.innerText === 'Scheduled') {
        element.classList.add('scheduled');
    }
});



let statusOrderDetail = document.querySelector('.status-progress-info .status');
let statusOrderDetailText = document.querySelector('.status-progress-info .status p.status-order');

console.log(statusOrderDetailText.innerHTML);
if (statusOrderDetailText.innerHTML === 'In Progress') {
    statusOrderDetail.classList.add('in-progress');
} else if (statusOrderDetailText.innerHTML === 'Scheduled') {
    statusOrderDetail.classList.add('scheduled');
} else if (statusOrderDetailText.innerHTML === 'Done') {
    statusOrderDetail.classList.add('done');
}