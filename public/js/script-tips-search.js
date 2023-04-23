const tipsInput = document.getElementById('tips-search-bar');
const tipsSuggestions = document.getElementById('tips-suggestion');
const originalDataTips = document.getElementById('tips-suggestion').innerHTML;

tipsInput.addEventListener('input', async () => {
    const query = tipsInput.value;
    if (query.length >= 3) {
        try {
            const formData = new FormData();
            formData.append('tips', query);

            const response = await fetch('http://sirvice/public/dashboard/search_tips', {
                method: 'POST',
                headers: {
                    'Cookie': 'PHPSESSID=<?php echo session_id(); ?>'
                },
                body: formData
            });
        
            const data = await response.json();
            console.log(data);
            tipsSuggestions.innerHTML = '';
            for (const tip of data) {
                const suggestion = document.createElement('div');
                suggestion.classList.add('tips-and-tricks-card');
                suggestion.innerHTML = `
                    <div class="tips-and-tricks-vector">
                        <img src="http://sirvice/public/svg/tips-and-tricks-cleaning.svg" alt="">
                    </div>
                    <div class="tips-and-tricks-content">
                        <div class="date-title-description">
                            <time datetime="${tip.date}">${tip.date}</time>
                            <h6 class="title">"${tip.title}"</h6>
                            <p class="description">${tip.description.slice(0, 140) + "..."}</p>
                        </div>
                        <div class="go-to-detail-content">
                            <a class="read-more" href="http://sirvice/public/dashboard/tips/${tip.id}">Read More</a>
                        </div>
                    </div>
                `;
                tipsSuggestions.appendChild(suggestion);
            }
        } catch (error) {
            console.log(error);
        }
    } else {
        tipsSuggestions.innerHTML = originalDataTips;
    }
});