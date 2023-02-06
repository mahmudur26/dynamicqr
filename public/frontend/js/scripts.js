const addLogoBtn = document.getElementById('add-logo-btn');
const selectImageContainer = document.getElementById('select-image-container');

// addLogoBtn.onclick = function () {
//     document.getElementById("select-image-container").style.display = "none";
// }

var emailFeild = document.getElementById("input-email");
var passFeild = document.getElementById("input-pass");

var emailRegex = /^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/;

function validateEmail() {
    if (emailFeild.value == "") {
        return false;
    }
    else if (!emailFeild.value.match(emailRegex)) {
        return false;
    }
    else {
        return true;
    }
}

function validatePass() {
    if (passFeild.value == "") {
        return false;
    }
    else if (passFeild.value.length > 3) {
        return true;
    }
    else {
        return false;
    }
}

function check() {
    if (validateEmail()) {
        if (validatePass()) {
            return true;
        }
        return false;
    }
    return false;
}