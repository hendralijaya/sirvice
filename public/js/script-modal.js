// Modal in general
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var close = document.getElementsByClassName("close")[0];
var cancel = document.getElementsByClassName("cancellation-button");
var submitBtn = document.getElementById("submitForm");

// Modal Delete Address 
var deleteAddressBtns = document.querySelectorAll(".delete-address-modal-show");

function modalTriggered(modal) {
    var modalSelected = document.getElementById(modal);
    modalSelected.style.display = "flex";
}

function modalClosedButton(modal) {
    var modalSelected = document.getElementById(modal);
    modalSelected.style.display = "none";
}

function modalClosedWindow(modal) {
    var modalSelected = document.getElementById(modal);
    window.onclick = function (event) {
        if (event.target == modalSelected) {
            modalSelected.style.display = "none";
        }
    }
}

btn.onclick = function () {
    console.log("clicked");
    modal.style.display = "flex";
}

close.onclick = function () {
    modal.style.display = "none";
}

cancel.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

submitBtn.onclick = function() {
    document.querySelector('form').submit();
}