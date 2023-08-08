const plainTextEl = document.getElementById("plain-text");
const keyEl = document.getElementById("key");
const btnEl = document.getElementById("btn");
const resultEl = document.getElementById("result");
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
    let encryptedText = "";
    const plainText = plainTextEl.value.toLowerCase();
    const key = keyEl.value.toLowerCase();

    // convert the plain text and key into array

    const plainTextArr = plainText.split("").filter((item) => item !== " ");
    const keyArr = key.split("").filter((item) => item !== " ");

    for (let i = 0; i < plainTextArr.length; i++) {
        //get the character of each plain text and store it in a variable

        const char = plainTextArr[i];

        //get the character of key and index and store in a variable

        const keyChar = key[i % key.length];
        const keyIndex = alphabets.indexOf(keyChar);

        //get the index of the plain text of each character

        const CharIndex = alphabets.indexOf(char);

        const cipher = (keyIndex + CharIndex) % alphabets.length;
        encryptedText += alphabets[cipher];
    }
    resultEl.value = encryptedText;
};

btnEl.addEventListener("click", VigenereEncrypt);
