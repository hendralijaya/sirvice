const fileInput = document.querySelector('.edit-profile input[type="file"]');
const profileImage = document.querySelector('.profile-image img');

fileInput.addEventListener('change', function () {
    const file = this.files[0];

    if (file) {
        const reader = new FileReader();
        reader.addEventListener('load', function () {
            profileImage.setAttribute('src', reader.result);
        });
        reader.readAsDataURL(file);
    }
});