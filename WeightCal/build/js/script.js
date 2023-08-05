const inputEl = document.getElementById("input");
const weightEl = document.getElementById("weight");
const errorEl = document.getElementById("error");

let error;
let result;

const getResult = () => {
    if (inputEl.value < 0 || isNaN(inputEl.value)) {
        errorEl.innerText = "Please enter a valid input";
        clearTimeout(error);
        error = setTimeout(() => {
            errorEl.innerText = "";
            inputEl.value = "";
        }, 2000);
    } else {
        weightEl.innerText = (input.value / 2.2).toFixed(2);

        clearTimeout(result);
        result = setTimeout(() => {
            weightEl.innerText = "";
            input.value = "";
        }, 10000);
    }
};

inputEl.addEventListener("input", getResult);
