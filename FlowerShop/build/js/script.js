const titleEl = document.getElementById("title");
const nameEl = document.getElementById("nameField");
const signInBtn = document.getElementById("sign-in");
const signUpBtn = document.getElementById("sign-up");
const formEl = document.getElementById("myform");

formEl.addEventListener("submit", (e) => {
  e.preventDefault();
});


signInBtn.addEventListener("click", () => {
  nameEl.style.maxHeight = "0px";
  titleEl.innerText = "Sign In";
});
signUpBtn.addEventListener("click", () => {
  signInBtn.disabled
  nameEl.style.maxHeight = "65px";
  titleEl.innerText = "Sign Up";
});
