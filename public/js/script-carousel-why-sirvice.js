/**
 * Carousel for why sirvice section
 */

const cards = document.querySelectorAll('.why-sirvice-card');

const carouselContainer = document.querySelector('.carousel-container');
const style = getComputedStyle(carouselContainer);
const transform = style.getPropertyValue('transform');

let translateX = 0;
if (transform.includes('translateX')) {
    const match = transform.match(/translateX\((-?\d+\.?\d+)%\)/);
    translateX = match ? match[1] : 0;
}

const leftBtn = document.querySelector('#leftBtn');
const rightBtn = document.querySelector('#rightBtn');
let currentCard = 1;

cards[currentCard].classList.add('active');

leftBtn.addEventListener('click', moveLeft);
rightBtn.addEventListener('click', moveRight);

function moveLeft() {
    currentCard--;

    console.log(translateX);
    translateX = translateX + 33.3;
    carouselContainer.style.transform = `translateX(${translateX}%)`;
    console.log(translateX);

    if (currentCard === 0) {
        leftBtn.disabled = true;
    }
    rightBtn.disabled = false;
    updateActiveCard();
}

function moveRight() {
    currentCard++;

    console.log(translateX);
    translateX = translateX - 33.3;
    carouselContainer.style.transform = `translateX(${translateX}%)`;
    console.log(translateX);

    if (currentCard === 2) {
        rightBtn.disabled = true;
    }
    leftBtn.disabled = false;
    updateActiveCard();
}

function updateActiveCard() {
    cards.forEach(card => {
        card.classList.remove('active');
    });
    cards[currentCard].classList.add('active');
}