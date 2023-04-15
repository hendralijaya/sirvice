let statusOrder = document.querySelectorAll('.status.status-order');

statusOrder.forEach(function(element) {
    console.log(element.innerText);
    if (element.innerText === 'In Progress') {
        element.classList.add('in-progress');
    } else if (element.innerText === 'Scheduled') {
        element.classList.add('scheduled');
    }
});