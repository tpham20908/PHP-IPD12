var firstName = document.getElementById("firstName");

firstName.addEventListener("input", function (event) {
    if (firstName.validity.valueMissing) {
        firstName.setCustomValidity("This is a required field.");
    } else {
        firstName.setCustomValidity("");
    }
});