//Access the DOM Element

const resultEl = document.getElementById("result");
const lengthEl = document.getElementById("plength");
const upperEl = document.getElementById("ucase");
const lowerEl = document.getElementById("lcase");
const numberEl = document.getElementById("num");
const symbolEl = document.getElementById("symbol");
const clipboardEl = document.getElementById("clipboard");
const buttonEl = document.getElementById("gbutton");

const randomFunction = {
  lower: getRandomLower,
  upper: getRandomUpper,
  number: getRandomNumber,
  symbols: getRandomSymbols,
};

// Event Listner

buttonEl.addEventListener("click", () => {
  const length = lengthEl.value;
  const hasLower = lowerEl.checked;
  const hasUpper = upperEl.checked;
  const hasNumber = numberEl.checked;
  const hasSymbols = symbolEl.checked;

  resultEl.innerText = generatePassword(
    hasLower,
    hasUpper,
    hasNumber,
    hasSymbols,
    length
  );
});

// Password Generator Function

function generatePassword(lower, upper, number, symbols, length) {
  let password = "";

  // getting the number of types
  const typeCount = lower + upper + number + symbols;

  // Getting the types that are checked

  const typesArr = [{ lower }, { upper }, { number }, { symbols }].filter(
    (item) => Object.values(item)[0]
  );

  // if no boxes are checked return empty string

  if (typeCount === 0) {
    return "";
  }

  // loop through the types array

  for (let i = 0; i < length; i += typeCount) {
    typesArr.forEach((type) => {
      const funcName = Object.keys(type);

      password += randomFunction[funcName]();
    });
  }

  const finalPassword = password.slice(0, length);

  return finalPassword;
}

//Copy to clipboard Function

clipboardEl.addEventListener("click", () => {
  const textarea = document.createElement("textarea");
  const password = resultEl.innerText;

  if (!password) {
    return;
  }

  textarea.value = password;
  document.body.appendChild(textarea);
  textarea.select();
  document.execCommand("copy");
  textarea.remove();
  alert("Copy to Clipboard");
});

//Create a Function for the Project

function getRandomLower() {
  return String.fromCharCode(Math.floor(Math.random() * 25) + 97);
}

function getRandomUpper() {
  return String.fromCharCode(Math.floor(Math.random() * 26) + 65);
}

function getRandomNumber() {
  return String.fromCharCode(Math.floor(Math.random() * 10) + 48);
}

function getRandomSymbols() {
  const symbols = "!@#$%^&*(){}.,?/=<>";
  return symbols[Math.floor(Math.random() * symbols.length)];
}
