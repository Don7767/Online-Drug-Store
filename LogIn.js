const btn = document.getElementById("butoni1");

const username = document.getElementById("username");
const password = document.getElementById("password");

const userError = document.getElementById("userError");
const passError = document.getElementById("passError");

const usernameRegex = /^[a-zA-Z0-9]{3,}$/;
const passwordRegex = /^^(?=.+[A-Z])(?=.+\d)(?=.+[*&^%$#@!]).{8,}$$/;

btn.addEventListener("click", function () {

    let valid = true;

    if (username.value.trim() === "") {
        userError.textContent = "Username is required";
        userError.style.visibility = "visible";
        valid = false;
    } else if (!usernameRegex.test(username.value.trim())) {
        userError.textContent = "Min 3 letters or numbers";
        userError.style.visibility = "visible";
        valid = false;
    } else {
        userError.style.visibility = "hidden";
    }

    if (password.value.trim() === "") {
        passError.textContent = "Password is required";
        passError.style.visibility = "visible";
        valid = false;
    } else if (!passwordRegex.test(password.value.trim())) {
        passError.textContent = "Min 8 characters, at least one special character, capital letter and number";
        passError.style.visibility = "visible";
        valid = false;
    } else {
        passError.style.visibility = "hidden";
    }

    if (valid) {
        window.location.href = "Online%20Drug%20Store/home.php";
    }
});

const btn2 = document.getElementById("butoni");
btn2.addEventListener("click", function() {
    window.location.href = "Online%20Drug%20Store/register-form.php"
})