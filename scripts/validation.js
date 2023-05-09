function regValidate() {

    const fname = document.getElementById("fname").value;
    const lname = document.getElementById("lname").value;
    const mail = document.getElementById("email").value;
    const psw = document.getElementById("password").value;
    const confirmPsw = document.getElementById("confirmPassword").value;
    const mobile = document.getElementById("mobile").value;

    if (fname == "" || lname == "") {
        document.getElementById("userName").innerHTML = "Please enter your name";
        return false;
    } else if(mail == "") {
        document.getElementById("userMail").innerHTML = "Please enter a valid Email";
        return false;
    }else if (psw.length < 8) {
        document.getElementById("psw").innerHTML = "Password must be at least 8 characters";
        return false;
    } else if (psw != confirmPsw) {
        document.getElementById("confirmPsw").innerHTML = "Passwords do not match";
        return false;
    } else if ((mobile.length < 10) || (mobile.length > 10) || (isNaN(mobile))) {
        document.getElementById("userMobile").innerHTML = "Please enter a valid mobile number";
        return false;
    } else {
        alert("GTF Member account created successfully!");
        return true;
    }

}


function memberAccDel() {

    if (confirm("Are you sure you want to delete your account?")) {
        alert("Your account has been deleted successfully!");
        return true;
    } else {
        return false;
        Window.location.href = "profile.php";
    }

}


function regCptVal() {

    const fname = document.getElementById("fname").value;
    const lname = document.getElementById("lname").value;
    const mail = document.getElementById("email").value;
    const psw = document.getElementById("password").value;
    const confirmPsw = document.getElementById("confirmPassword").value;
    const mobile = document.getElementById("mobile").value;

    if (fname == "" || lname == "") {
        document.getElementById("userName").innerHTML = "Please enter your name";
        return false;
    } else if(mail == "") {
        document.getElementById("userMail").innerHTML = "Please enter a valid Email";
        return false;
    }else if (psw.length < 8) {
        document.getElementById("psw").innerHTML = "Password must be at least 8 characters";
        return false;
    } else if (psw != confirmPsw) {
        document.getElementById("confirmPsw").innerHTML = "Passwords do not match";
        return false;
    } else if ((mobile.length < 10) || (mobile.length > 10) || (isNaN(mobile))) {
        document.getElementById("userMobile").innerHTML = "Please enter a valid mobile number";
        return false;
    } else {
        alert("GTF Captain account created successfully!");
        return true;
    }

}


function regStfVal() {

    const fname = document.getElementById("fname").value;
    const lname = document.getElementById("lname").value;
    const mail = document.getElementById("email").value;
    const psw = document.getElementById("password").value;
    const confirmPsw = document.getElementById("confirmPassword").value;
    const mobile = document.getElementById("mobile").value;

    if (fname == "" || lname == "") {
        document.getElementById("userName").innerHTML = "Please enter your name";
        return false;
    } else if(mail == "") {
        document.getElementById("userMail").innerHTML = "Please enter a valid Email";
        return false;
    }else if (psw.length < 8) {
        document.getElementById("psw").innerHTML = "Password must be at least 8 characters";
        return false;
    } else if (psw != confirmPsw) {
        document.getElementById("confirmPsw").innerHTML = "Passwords do not match";
        return false;
    } else if ((mobile.length < 10) || (mobile.length > 10) || (isNaN(mobile))) {
        document.getElementById("userMobile").innerHTML = "Please enter a valid mobile number";
        return false;
    } else {
        alert("Staff account created successfully!");
        return true;
    }

}

