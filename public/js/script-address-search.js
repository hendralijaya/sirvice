const addressInput = document.getElementById('address');
const addressSuggestions = document.getElementById('address-suggestions');

addressInput.addEventListener('input', () => {
    const query = addressInput.value;
    if (query.length >= 3) {
        fetch('https://example.com/addresses', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    q: query
                })
            })
            .then(response => response.json())
            .then(data => {
                addressSuggestions.innerHTML = '';
                for (const address of data) {
                    const suggestion = document.createElement('div');
                    suggestion.textContent = address;
                    addressSuggestions.appendChild(suggestion);
                }
            })
            .catch(error => {
                console.error(error);
            });
    } else {
        addressSuggestions.innerHTML = '';
    }
});