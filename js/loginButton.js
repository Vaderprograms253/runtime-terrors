
// CONSTANTS
const USERNAME_INPUT = document.getElementById("usernameInput");
const PASSWORD_INPUT = document.getElementById("passwordInput");

document.getElementById("loginForm").onsubmit = validateLogin;
LOGIN_BUTTON.onclick = clearLoginInputs;

/**
 * Checks to see if login form has any input inside the username and password fields
 * @returns {boolean} True if the form has input in both the username and password fields
                      False if the form is missing input in either username or password fields
 */
function validateLogin(){

    clearErrors();
    // return true if form is valid
    let valid = true;

    // Validate username
    let username = USERNAME_INPUT.value;
    if(username === "") {
        document.getElementById("err-username").style.display = "block";
        valid = false;
    }
    // Validate password
    let password = PASSWORD_INPUT.value;
    if(password === ""){
        document.getElementById("err-password").style.display = "block";
        valid = false;
    }
    // Return true if form is valid. Return false if form is not valid
    return valid;
}


// Clear error messages if any form has input
function clearErrors() {
    let errors = document.getElementsByClassName("err");
    for (let i = 0; i < errors.length; i++) {
        errors[i].style.display = "none";
    }
}

function clearLoginInputs() {
    clearErrors();
    USERNAME_INPUT.value = "";
    PASSWORD_INPUT.value = "";
}