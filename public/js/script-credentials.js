// for carousel in credential pages
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("carousel-credential-slide");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}

// for password field
const eyeIcons = document.querySelectorAll('.eye-icon');

eyeIcons.forEach(icon => {
    const passwordField = document.getElementById(icon.previousElementSibling.getAttribute('id'));
    if (passwordField) { // Only modify password fields that exist
        icon.innerHTML = '<i class="bi bi-eye-fill"></i>';
        icon.addEventListener('click', () => {
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                icon.innerHTML = '<i class="bi bi-eye-slash-fill"></i>';
            } else {
                passwordField.type = 'password';
                icon.innerHTML = '<i class="bi bi-eye-fill"></i>';
            }
        });
    }
});