let alertClose = document.querySelectorAll(".alert-close");
// when the div alert close is clicked, remove the alert
alertClose.forEach((close) => {
    close.addEventListener("click", function () {
        this.parentElement.remove();
    });
});