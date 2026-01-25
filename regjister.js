const btn = document.getElementById("butoni1");

const fullname = document.getElementById("fullname");
const email = document.getElementById("email");
const password = document.getElementById("password");
const birthday = document.getElementById("birthday");
const genderInputs = document.getElementsByName("gender");

const fullnameError = document.getElementById("fullnameError");
const emailError = document.getElementById("emailError");
const passwordError = document.getElementById("passwordError");
const birthdayError = document.getElementById("birthdayError");
const genderError = document.getElementById("genderError");

const fullnameRegex = /^[A-Z][a-zA-Z''-]+(?: [A-Z][a-zA-Z''-]+)+$/;
const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
const passwordRegex = /^(?=.*[A-Z])(?=.*\d)(?=.*[*&^%$#@!]).{8,}$/;

btn.addEventListener("click", function (event) {
    event.preventDefault(); 

    let valid = true;

    if (fullname.value.trim() === "") {
        fullnameError.textContent = "Fullname is required";
        fullnameError.style.visibility = "visible";
        valid = false;
    } else if (!fullnameRegex.test(fullname.value.trim())) {
        fullnameError.textContent = "Enter a valid fullname (Name Surname)";
        fullnameError.style.visibility = "visible";
        valid = false;
    } else {
        fullnameError.style.visibility = "hidden";
    }

  
    if (email.value.trim() === "") {
        emailError.textContent = "Email is required";
        emailError.style.visibility = "visible";
        valid = false;
    } else if (!emailRegex.test(email.value.trim())) {
        emailError.textContent = "Invalid email format";
        emailError.style.visibility = "visible";
        valid = false;
    } else {
        emailError.style.visibility = "hidden";
    }

  
    if (password.value.trim() === "") {
        passwordError.textContent = "Password is required";
        passwordError.style.visibility = "visible";
        valid = false;
    } else if (!passwordRegex.test(password.value.trim())) {
        passwordError.textContent = "Min 8 characters, at least one special character, capital letter and number";
        passwordError.style.visibility = "visible";
        valid = false;
    } else {
        passwordError.style.visibility = "hidden";
    }

  
    if (birthday.value.trim() === "") {
        birthdayError.textContent = "Birthday is required";
        birthdayError.style.visibility = "visible";
        valid = false;
    } else {
        birthdayError.style.visibility = "hidden";
    }

    let genderSelected = false;
    for (let g of genderInputs) {
        if (g.checked) {
            genderSelected = true;
            break;
        }
    }
    if (!genderSelected) {
        genderError.textContent = "Gender is required";
        genderError.style.visibility = "visible";
        valid = false;
    } else {
        genderError.style.visibility = "hidden";
    }

    if (valid) {
        window.location.href = "Online%20Drug%20Store/LogIn.php";
    }
    
});

const btn2 = document.getElementById("butoni");
btn2.addEventListener("click", function() {
    window.location.href = "Online%20Drug%20Store/LogIn.php"
})

