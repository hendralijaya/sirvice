var currentStep = 0;
const allSteps = document.querySelectorAll('.step');
const stepId = document.getAttribute('data-step');

function nextStep(step) {
    document.querySelectorAll('.step-data')[currentStep].style.display = 'none';
    currentStep = step;
    document.querySelectorAll('.step-data')[currentStep].style.display = 'block';

    for (let i = 0; i < currentStep; i++) {
        allSteps[i+1].classList.add("active");
    }
}

function prevStep(step) {
    document.querySelectorAll('.step-data')[currentStep].style.display = 'none';
    currentStep = step;
    document.querySelectorAll('.step-data')[currentStep].style.display = 'block';

    //remove the active class from the last step
    allSteps[currentStep+1].classList.remove("active");
}