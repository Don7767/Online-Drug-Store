const btn = document.getElementById("butoni1");

const username = document.getElementById("username");
const password = document.getElementById("password");

const userError = document.getElementById("userError");
const passError = document.getElementById("passError");

const usernameRegex = /^[a-zA-Z0-9]{3,}$/;
const passwordRegex = /^.{8,}$/;

btn.addEventListener("click", function () {

    let valid = true;

    if (username.value.trim() === "") {
        userError.textContent = "Username eshte i detyrueshem.";
        userError.style.visibility = "visible";
        valid = false;
    } else if (!usernameRegex.test(username.value.trim())) {
        userError.textContent = "Min 3 shkronja ose numra.";
        userError.style.visibility = "visible";
        valid = false;
    } else {
        userError.style.visibility = "hidden";
    }

    if (password.value.trim() === "") {
        passError.textContent = "Password eshte i detyrueshëm.";
        passError.style.visibility = "visible";
        valid = false;
    } else if (!passwordRegex.test(password.value.trim())) {
        passError.textContent = "Min 8 karaktere.";
        passError.style.visibility = "visible";
        valid = false;
    } else {
        passError.style.visibility = "hidden";
    }

    if (valid) {
        window.location.href = "home.html";
    }
});
