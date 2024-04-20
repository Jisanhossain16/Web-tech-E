//1. Name validation functions

function validName(name) {
    upperCaseName = name.toUpperCase();
    for (let i = 0; i < upperCaseName.length; i++) {
        let charCode = upperCaseName.charCodeAt(i);
        let char = name.charAt(i);

        if (charCode < 65 || charCode > 90) {
            if (char !== '-' && char !== '.') {
                return false;
            }
        }
    }
    return true;
}

function validateName() {
    userName = document.getElementById("name").value;

    userName = userName.trim();

    const words = userName.split(' ');
    flag = true;
    if (words.length >= 2) {
        for (const word of words) {
            if (!validName(word)) {
                flag = false;
            }
        }
        if (!flag) {
            alert("invalid")
        }
        else {
            alert("valid");
        }
    }
    else {
        alert("must be at least 2 words");
    }
}

//2. email validation functions

function validateEmail() {
    email = document.getElementById("email");

    fullEmail = email.value;
    flag = false;
    if (fullEmail.indexOf('@') !== -1) {
        const emailparts = fullEmail.split('@');
        //console.log(emailparts[0] + " " + emailparts[1]);
        emailName = emailparts[0];
        emailDomain = emailparts[1];
        if (emailDomain.length !== 0 && emailName.length !== 0) {
            if (emailDomain.indexOf('.') !== -1) {
                if (!emailName.startsWith('.') || !emailName.endsWith('.') || !emailDomain.startsWith('.') || !emailDomain.endsWith('.')) {
                    flag = true;
                }
            }
        }
    }

    if (flag) {
        alert("Valid Email");
    }
    else {
        alert("please enter a valid email address");
    }
}

//3. gender validation functions

function validateGender() {
    genders = document.getElementsByName("gender");
    flag = false;
    for (const option of genders) {
        if (option.checked) {
            flag = true;
            break;
        }
    }
    if (flag) {
        alert("option checked.");
    }
    else {
        alert("please checked a option!");
    }
}

//4. date of birth validation functions
function validateBob() {
    day = document.getElementById('day').value;
    month = document.getElementById('month').value;
    year = document.getElementById('year').value;
    flag = false;
    if (parseInt(day) > 0 && parseInt(day) <= 31) {
        if (parseInt(month) > 0 && parseInt(month) <= 12) {
            if (parseInt(year) > 1900 && parseInt(year) <= 2024) {
                flag = true;
            }
        }
    }

    if (flag) {
        alert("Valid");
    }
    else {
        alert("Please enter a valid BOB");
    }

}


//5. degree validation functions

function validateDegree() {
    degree = document.getElementsByName("degree");
    flag = false;

    for (const option of degree) {
        if (option.checked) {
            flag = true;
            break;
        }
    }
    if (flag) {
        alert("option checked.");
    }
    else {
        alert("please checked a option!");
    }
}


//6. Blood group validation functions

function validateGroup() {
    bloodGroup = document.getElementById('bloodGroup');

    selectedValue = bloodGroup.value;

    if (selectedValue === " ") {
        alert("please select a blood group!");
    }
    else {
        alert("Blood Group Selected!");
    }
}


//7. pictures validation functions

function validatePicture() {
    userId = document.getElementById('userId');
    picture = document.getElementById('image');

    userId = userId.value;

    flag = false;
    if (parseInt(userId) > 0) {
        if (picture.files.length > 0) {
            flag = true;
        }
    }

    if (flag) {
        alert("valid user id and picture has been selected.");
    }
    else {
        alert("InValid user id or picture must be selected.");
    }
}
//8. assignment validation.....

function assignment() {
    validateName();
    validateEmail();
    validateGender();
    validateBob();
    validateDegree();
    validateGroup();

}