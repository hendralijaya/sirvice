const addressInput = document.getElementById('address');
// const addressSuggestions = document.getElementById('address-suggestions');

addressInput.addEventListener('input', () => {
    const query = addressInput.value;
    if (query.length >= 3) {
        fetch('http://sirvice/public/dashboard/search_address', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Cookie': 'PHPSESSID=<?php echo session_id(); ?>'
                },
                body: JSON.stringify({
                    q: query
                })
            })
            .then(response => 
                // response.json()
                console.log(response.json())
            )
            .then(data => {
                // addressSuggestions.innerHTML = '';
                console.log(data);
                // for (const address of data) {
                //     const suggestion = document.createElement('div');
                //     suggestion.textContent = address;
                //     addressSuggestions.appendChild(suggestion);
                // }
            })
            .catch(error => {
                console.log(error);
            });
    } else {
        // addressSuggestions.innerHTML = '';
    }
});