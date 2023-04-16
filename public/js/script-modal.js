// Modal in general
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var close = document.getElementsByClassName("close")[0];
var cancel = document.getElementById("cancel");

btn.onclick = function () {
    modal.style.display = "flex";
}

close.onclick = function () {
    modal.style.display = "none";
}

cancel.onclick = function () {
    modal.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Modal for feedback
var modalFeedback = document.getElementById("myModalFeedback");
var btnFeedback = document.getElementById("myBtnFeedback");
var closeFeedback = document.getElementsByClassName("close")[1];
var cancelFeedback = document.getElementById("cancelFeedback");

btnFeedback.onclick = function () {
    modalFeedback.style.display = "flex";
}

closeFeedback.onclick = function () {
    modalFeedback.style.display = "none";
}

cancelFeedback.onclick = function () {
    modalFeedback.style.display = "none";
}

window.onclick = function (event) {
    if (event.target == modalFeedback) {
        modalFeedback.style.display = "none";
    }
}


// Stars Feedback
const stars = document.querySelectorAll('.feedback-stars .star');
const rating = document.querySelector('.feedback-stars input[name="rating"]');
let currentRating;

// Set initial rating
if (rating.value) {
    currentRating = parseInt(rating.value);
    highlightStars(currentRating);
}

// Add click event listeners to stars
stars.forEach(function (star, index) {
    star.addEventListener('click', function () {
        currentRating = index + 1;
        rating.value = currentRating;
        highlightStars(currentRating);
    });
});

// Highlight stars up to the given rating
function highlightStars(rating) {
    stars.forEach(function (star, index) {
        if (index < rating) {
            star.style.color = 'var(--star-active-color)';
            star.querySelector('i').classList.add('active');
        } else {
            star.style.color = 'var(--border-color)';
            star.querySelector('i').classList.remove('active');
        }
    });
}
