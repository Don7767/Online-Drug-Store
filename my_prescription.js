const idInput = document.getElementById("id-number");
const idError = document.getElementById("idError");
const btn2 = document.getElementById("button2");

const idRegex = /^\d{10}$/;  

btn2.addEventListener("click", function(event) {
    event.preventDefault();

    if (idInput.value.trim() === "") {
        idError.textContent = "ID number is required";
        idError.style.visibility = "visible";
    } else if (!idRegex.test(idInput.value.trim())) {
        idError.textContent = "ID must be exactly 10 digits ";
        idError.style.visibility = "visible";
    } else {
        idError.style.visibility = "hidden";
        alert("ID number accepted!");
        window.location.href = "/OnlineDrugStore/the_doctor's_report.php";
    }
});


