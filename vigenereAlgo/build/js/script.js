const flipBtn = document.getElementById("flip-btn");
const switchEl = document.getElementById("switch");
const frontEl = document.getElementById("front");
const backEl = document.getElementById("back");

/* Front Card */
const plainTextEl = document.getElementById("plain-text");
const eKeyEl = document.getElementById("fkey");
const eBtnEl = document.getElementById("ebtn");
const cipherValue = document.getElementById("cipher");

/* Back Card */
const cipherTextEl = document.getElementById("cipher");
const dKeyEl = document.getElementById("fkey");
const dBtnEl = document.getElementById("dbtn");
const plainValue = document.getElementById("plain");

flipBtn.addEventListener("click", () => {
    switchEl.classList.toggle("slide");

    frontEl.classList.toggle("flex");
    frontEl.classList.toggle("hidden");

    backEl.classList.toggle("flex");
    backEl.classList.toggle("hidden");
});

const alphabets = [
    "a",
    "b",
    "c",
    "d",
    "e",
    "f",
    "g",
    "h",
    "i",
    "j",
    "k",
    "l",
    "m",
    "n",
    "o",
    "p",
    "q",
    "r",
    "s",
    "t",
    "u",
    "v",
    "w",
    "x",
    "y",
    "z",
];

const VigenereEncrypt = () => {
    cipherValue.value = "";
    let encryptedText = "";
    const plainText = plainTextEl.value.toLowerCase();
    const key = eKeyEl.value.toLowerCase();

    // convert the plain text and key into array

    const plainTextArr = plainText.split("").filter((item) => item !== " ");
    const keyArr = key.split("").filter((item) => item !== " ");

    for (let i = 0; i < plainTextArr.length; i++) {
        //get the character of each plain text and store it in a variable

        const char = plainTextArr[i];

        //get the character of key and index and store in a variable

        const keyChar = keyArr[i % keyArr.length];
        const keyIndex = alphabets.indexOf(keyChar);

        //get the index of the plain text of each character

        const CharIndex = alphabets.indexOf(char);

        const cipher = (keyIndex + CharIndex) % alphabets.length;
        encryptedText += alphabets[cipher];
    }
    cipherValue.value = encryptedText;
};

const VigenereDecrypt = () => {
    let encryptedText = "";
    plainValue.value = "";
    const cipherText = cipherTextEl.value.toLowerCase();
    const key = dKeyEl.value.toLowerCase();

    //convert string to array
    const cipherArr = cipherText.split("").filter((item) => item !== "");
    const keyArr = key.split("").filter((item) => item !== "");

    for (let i = 0; i < cipherArr.length; i++) {
        //store each element in  a variable

        const char = cipherArr[i];

        //get the index of each character
        const charIndex = alphabets.indexOf(char);

        // get each character of keyword and store it in a variable

        const keyChar = keyArr[i % keyArr.length];

        // get the index of each key character

        const keyIndex = alphabets.indexOf(keyChar);

        const plainText = (charIndex - keyIndex + alphabets.length) % 26;
        encryptedText += alphabets[plainText];
    }
    plainValue.value = encryptedText;
};

eBtnEl.addEventListener("click", VigenereEncrypt);
dBtnEl.addEventListener("click", VigenereDecrypt);
