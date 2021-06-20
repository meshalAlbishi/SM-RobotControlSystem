var sliders = document.getElementsByClassName('range');
var slidersValue = document.getElementsByClassName('range-value');

addSlidersEvents();


// sliders event functions 
function addSlidersEvents() {
    for (let i = 0; i < sliders.length; i++) {

        sliders[i].addEventListener('change', () => changeRangeValue(slidersValue, i, sliders[i].value));

        sliders[i].addEventListener('mousemove', () => changeRangeValue(slidersValue, i, sliders[i].value));

    }
}

function changeRangeValue(slidersValue, index, value) {
    slidersValue[index].textContent = value;
}

// ---------------------------------------------------------------