const tabs = document.querySelectorAll('.tab');
tabs.forEach(tab => {
    tab.addEventListener('click', event => {
        const tabId = event.target.getAttribute('data-tab');
        const tabDescription = document.querySelector(`.tab-data-desc[data-tab="${tabId}"]`);

        tabDescription.style.display = 'block';

        tabs.forEach(tab => tab.classList.remove("active"));
        event.target.classList.add("active");

        const otherTabDescriptions = document.querySelectorAll(`.tab-data-desc:not([data-tab="${tabId}"])`);
        otherTabDescriptions.forEach(tab => {
            tab.style.display = 'none';
        });
    });
});

const defaultTabId = "1";
const defaultTabDescription = document.querySelector(`.tab-data-desc[data-tab="${defaultTabId}"]`);
defaultTabDescription.style.display = 'block';

const defaultTab = document.querySelector(`.tab[data-tab="${defaultTabId}"]`);
defaultTab.classList.add("active");