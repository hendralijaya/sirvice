const listItems = document.querySelectorAll('ul li');

listItems.forEach((item) => {
  item.addEventListener('click', function() {
    listItems.forEach((item) => {
      item.classList.remove('active');
    });
    this.classList.add('active');
  });
});

// Get the dropdown button and menu
const profileBtn = document.querySelector('.profile-dropdown');
const profileMenu = document.querySelector('.profile-dropdown-content');
const notificationBtn = document.querySelector('.notification-dropdown');
const notificationMenu = document.querySelector('.notification-dropdown-content');

// Toggle the dropdown menu on click
profileBtn.addEventListener('click', () => {
    profileMenu.classList.toggle('show');
});

// Hide the dropdown menu when clicking outside of it
document.addEventListener('click', (event) => {
    if (!profileBtn.contains(event.target) && !profileMenu.contains(event.target)) {
        profileMenu.classList.remove('show');
    }
});

// Toggle the dropdown menu on click
notificationBtn.addEventListener('click', () => {
    notificationMenu.classList.toggle('show');
});

// Hide the dropdown menu when clicking outside of it
document.addEventListener('click', (event) => {
    if (!notificationBtn.contains(event.target) && !notificationMenu.contains(event.target)) {
        notificationMenu.classList.remove('show');
    }
});

let paragraphs = document.querySelectorAll(".notification-detail-message p");
paragraphs.forEach(paragraph => {
  let text = paragraph.textContent.trim();
  
  // Truncate the text to 100 characters
  let truncatedText = text.slice(0, 100) + "...";

  // Replace the original text with the truncated text
  paragraph.textContent = truncatedText;
});