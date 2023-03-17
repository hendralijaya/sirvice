/**
   * Preloader
   */
let preloader = select('#preloader');
if (preloader) {
    window.addEventListener('load', () => {
        preloader.style.opacity = 0; 
        setTimeout(() => {
            preloader.remove(); 
        }, 1000); 
    });
}