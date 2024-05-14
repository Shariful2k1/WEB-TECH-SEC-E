function Forgot() {
    let username = document.getElementById("username").value;
    let newpassword = document.getElementById("newpassword").value;
    let retypepassword = document.getElementById("retypepassword").value;
    let uErr = document.getElementById("unameErr");
    let npErr = document.getElementById("npassErr");
    let rpErr = document.getElementById("rpassErr");
    uErr.innerHTML = "";
    npErr.innerHTML = "";
    rpErr.innerHTML = "";
    let flag = true;
    if (username == "") {    
        uErr.innerHTML= "<br>Please provide username";
        uErr.style.color="blue";
        flag = false;
    }
    if(newpassword == "") {
        npErr.innerHTML= "<br>Please provide password";
        npErr.style.color="blue";
        flag = false;
    }
    else if (newpassword.length < 8) {
        npErr.innerHTML= "<br>New password must be at least 8 digit";
        npErr.style.color="blue";
        flag = false;
    }
    if(retypepassword == "") {
        rpErr.innerHTML= "<br>Please retype password";
        rpErr.style.color="blue";
        flag = false;
    }
    if(retypepassword !== newpassword) {
        rpErr.innerHTML= "<br>Your passwords do not match";
        rpErr.style.color="blue";
        flag = false;
    }
    if ((newpassword.indexOf('@') < 0) && (newpassword.indexOf('#') < 0) && (newpassword.indexOf('$') < 0) && (newpassword.indexOf('%') < 0))  {
        npErr.innerHTML= "<br>Your new password must contain at least one speciail character (@, #, $, %)";
        npErr.style.color="blue";
        flag = false;
    }
    if(flag == true) {
        let data = {
            username: username,
            newpassword: newpassword,
        };
 
        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../controller/Forgotpasswordcheckk.php");
        xhttp.setRequestHeader("Content-Type", "application/json");
        xhttp.send(JSON.stringify(data));
        xhttp.onreadystatechange=function(){
            if (this.readyState==4 & this.status==200){
                alert(this.responseText);
            }
        }
}
}

function Signup() {
    let username = document.getElementById("username").value;
    let registeras = document.getElementById("registeras").value;
    let password = document.getElementById("password").value;
    let email = document.getElementById("email").value;
    let mobileno = document.getElementById("mobileno").value;
    let retypepassword = document.getElementById("retypepassword").value;
    let gender = document.getElementById("gender").value;
    let dob = document.getElementById("dob").value;
    let uErr = document.getElementById("unameErr");
    let pErr = document.getElementById("passErr");
    let rpErr = document.getElementById("rpassErr");
    let reErr = document.getElementById("registerErr");
    let eErr = document.getElementById("emailErr");
    let mErr = document.getElementById("mobileErr");
    let gErr = document.getElementById("genderErr");
    let dErr = document.getElementById("dobErr");
    uErr.innerHTML = "";
    pErr.innerHTML = "";
    rpErr.innerHTML = "";
    reErr.innerHTML = "";
    eErr.innerHTML = "";
    mErr.innerHTML = "";
    gErr.innerHTML = "";
    dErr.innerHTML = "";
    let flag = true;
    if (username == "") {    
        uErr.innerHTML= "Please provide username";
        uErr.style.color="blue";
        flag = false;
    }
    if (registeras == "") {    
        reErr.innerHTML= "<br>Please provide what you want to register as";
        reErr.style.color="blue";
        flag = false;
    }
    else if (registeras !== "Farmer" && registeras !== "Wholesaler" && registeras !== "Investor") {    
        reErr.innerHTML= "<br>Please register as Farmer/Investor/Wholesaler";
        reErr.style.color="blue";
        flag = false;
    }
    if(email == "") {
        eErr.innerHTML= "<br>Please provide email";
        eErr.style.color="blue";
        flag = false;
    }
    else if((email.indexOf('@') < 0) || (email.indexOf('.com') < 0)) {
        eErr.innerHTML= "<br>Email must contain @ and .com";
        eErr.style.color="blue";
        flag = false;
    }
    if (mobileno == "") {    
        mErr.innerHTML= "<br>Please provide mobile number";
        mErr.style.color="blue";
        flag = false;
    }
    else if (mobileno.length < 11 || mobileno.length > 11) {    
        mErr.innerHTML= "<br>Mobile number must be 11 digit";
        mErr.style.color="blue";
        flag = false;
    }
    if(password == "") {
        pErr.innerHTML= "<br>Please provide password";
        pErr.style.color="blue";
        flag = false;
    }
    else if (password.length < 8) {
        pErr.innerHTML= "<br>Password must be at least 8 digit";
        pErr.style.color="blue";
        flag = false;
    }
    else if ((password.indexOf('@') < 0) && (password.indexOf('#') < 0) && (password.indexOf('$') < 0) && (password.indexOf('%') < 0))  {
        pErr.innerHTML= "<br>Your password must contain at least one speciail character (@, #, $, %)";
        pErr.style.color="blue";
        flag = false;
    }
    if(retypepassword == "") {
        rpErr.innerHTML= "<br>Please confirm your password";
        rpErr.style.color="blue";
        flag = false;
    }
    else if(retypepassword !== password) {
        rpErr.innerHTML= "<br>Your passwords do not match";
        rpErr.style.color="blue";
        flag = false;
    }
    if (gender == "") {    
        gErr.innerHTML= "<br>Please provide gender";
        gErr.style.color="blue";
        flag = false;
    }
    if (dob == "") {    
        dErr.innerHTML= "<br>Please provide date of birth";
        dErr.style.color="blue";
        flag = false;
    }

    if(flag == true) {
        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "../controller/Signupcheckk.php");
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("username=" + username + "&register_as=" + registeras + "&email=" + email + "&mobile_no=" + mobileno + "&password=" + password + "&DOB=" + dob + "&gender=" + gender);
        xhttp.onreadystatechange=function(){
            if (this.readyState==4 & this.status==200){
                alert(this.responseText);
            }
    }
}
}



function Login(pForm) {
    let username = pForm.username.value;
    let password = pForm.password.value;
    let uErr = document.getElementById("unameErr");
    let pErr = document.getElementById("passErr");
    uErr.innerHTML = "";
    pErr.innerHTML = "";
    let flag = true;
    if (username == "") {    
        uErr.innerHTML= "Please provide username";
        uErr.style.color="blue";
        flag = false;
    }
    if(password == "") {
        pErr.innerHTML= "<br>Please provide password";
        pErr.style.color="blue";
        flag = false;
    }
    else if (password.length < 8) {
        pErr.innerHTML= "<br>Password must be at least 8 digit";
        pErr.style.color="blue";
        flag = false;
    }
    return flag;
}


function mhinvestor(pForm) {
    let myimg = pForm.myimg.value;
    let title = pForm.title.value;
    let quantity = pForm.quantity.value;
    let price = pForm.price.value;
    let mErr = document.getElementById("myimgErr");
    let tErr = document.getElementById("titleErr");
    let qErr = document.getElementById("quantityErr");
    let pErr = document.getElementById("priceErr");
    mErr.innerHTML = "";
    tErr.innerHTML = "";
    qErr.innerHTML = "";
    pErr.innerHTML = "";
    let flag = true;
    if (myimg.files.length==0) {    
        mErr.innerHTML= "Please select an image";
        mErr.style.color="blue";
        flag = false;
    }
    if(title == "") {
        tErr.innerHTML= "<br>Please provide title";
        tErr.style.color="blue";
        flag = false;
    }
    if (quantity=="") {
        qErr.innerHTML= "<br>Please select quantity";
        qErr.style.color="blue";
        flag = false;
    }
    if (price=="") {
        pErr.innerHTML= "<br>Please enter price";
        pErr.style.color="blue";
        flag = false;
    }
    return flag;
}


