const btn = document.getElementById("butoni1");

const username = document.getElementById("username");
const password = document.getElementById("password");

const userError = document.getElementById("userError");
const passError = document.getElementById("passError");

const usernameRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[*&^%$#@!]).{8,}$/;

btn.addEventListener("click", function (event) {

    let valid = true;

    if (username.value.trim() === "") {
        userError.textContent = "Username is required";
        userError.style.visibility = "visible";
        valid = false;
    } else if (!usernameRegex.test(username.value.trim())) {
        userError.textContent = "Invalid email format";
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

    if (!valid) {
        event.preventDefault();
    }
});

const btn2 = document.getElementById("butoni");
btn2.addEventListener("click", function() {
    window.location.href = "/OnlineDrugStore/register-form.php"
})