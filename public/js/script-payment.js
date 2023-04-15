// Get the file input element
const filePaymentInput = document.getElementById('payment-file');

// Get the screenshot and message-none elements
const screenshot = document.querySelector('.document-payment-proof .screenshot');
const messageNone = document.querySelector('.document-payment-proof .message-none');

// Hide the screenshot and show the message-none element by default
screenshot.hidden = true;
messageNone.hidden = false;

// Attach an event listener to the file input element
filePaymentInput.addEventListener('change', () => {
    // Check if a file is selected
    if (filePaymentInput.files.length > 0) {
        // Get the selected file
        const file = filePaymentInput.files[0];

        // Check if the file type is supported
        if (['image/png', 'image/jpeg', 'image/jpg'].includes(file.type)) {
            // Create a file reader object
            const reader = new FileReader();

            // Set the onload function
            reader.onload = (event) => {
                // Set the src of the screenshot element
                screenshot.querySelector('img').src = event.target.result;

                // Show the screenshot element and hide the message-none element
                screenshot.hidden = false;
                messageNone.hidden = true;
            }

            // Read the selected file as a data URL
            reader.readAsDataURL(file);
        }
    } else {
        // Hide the screenshot element and show the message-none element
        screenshot.hidden = true;
        messageNone.hidden = false;
    }
});

// Get all the radio buttons in the group
const radioGroup = document.querySelectorAll('input[type=radio][name=service]');
console.log(radioGroup);

// Attach a change event listener to each radio button in the group
radioGroup.forEach((radio) => {
    radio.addEventListener('change', () => {
        // Set the checked attribute to false for all the other radio buttons in the group
        radioGroup.forEach((otherRadio) => {
            if (otherRadio !== radio) {
                otherRadio.checked = false;
            }
        });
    });
});
