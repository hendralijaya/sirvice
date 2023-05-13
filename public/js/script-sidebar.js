function changeImage() {
  const hamburger = document.getElementById("hamburger");
  const close = document.getElementById("hamburger-close");
  const hamburgerDisplay = getComputedStyle(hamburger).display;

  const navbar = document.querySelector("nav.sidebar-navigation");

  if(hamburgerDisplay == "none"){
      hamburger.style.display = "block";
      close.style.display = "none";
      navbar.classList.remove("open");   
  } else {
      hamburger.style.display = "none";
      close.style.display = "block";
      navbar.classList.add("open");    
  }
}


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

// for the notification dropdown
let paragraphs = document.querySelectorAll(".notification-detail-message.simplified p");
paragraphs.forEach(paragraph => {
  let text = paragraph.textContent.trim();
  
  // Truncate the text to 100 characters
  let truncatedText = text.slice(0, 100) + "...";

  // Replace the original text with the truncated text
  paragraph.textContent = truncatedText;
});

// for the tips and tricks in dashboard
let paragraphsTipsAndTricks = document.querySelectorAll(".tips-and-tricks-content p");
paragraphsTipsAndTricks.forEach(paragraph => {
  let text = paragraph.textContent.trim();
  
  // Truncate the text to 100 characters
  let truncatedText = text.slice(0, 140) + "...";

  // Replace the original text with the truncated text
  paragraph.textContent = truncatedText;
});

// const toggleButton = document.querySelector('#change-theme');

// toggleButton.addEventListener('click', () => {
//   const html = document.querySelector('html');
//   html.dataset.theme = html.dataset.theme === 'light' ? 'dark' : 'light';
// });