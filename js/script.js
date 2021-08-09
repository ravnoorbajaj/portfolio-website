//hint         https://www.youtube.com/watch?v=In0nB0ABaUk and w3school


document.getElementById("sumbitForm").addEventListener("click", function (e) {
    const fname = document.getElementById("fname").value;
    const lname = document.getElementById("lname").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const query = document.getElementById("query").value;
    let flag = true;
    
    if (fname == "" || fname == null) {
        document.getElementById("fnameError").innerHTML = "<p>First Name cannot be empty.</p>";
        flag = false;
    }
    
    if (lname == "") {
        document.getElementById("lnameError").innerHTML = "<p>Last Name cannot be empty.</p>";
        flag = false;

    }

    if (email == "") {

        document.getElementById("emailError").innerHTML = "<p>Email cannot be empty.</p>";
        flag = false;
    }

    if (phone == "") {

        document.getElementById("phoneError").innerHTML = "<p>Phone Number cannot be empty.</p>";
        flag = false;
    }
    
    else if (isNaN(phone)) {
        document.getElementById("phoneError").innerHTML = "<p>Phone Number should include only numbers</p>";
        flag = false;
    }
    
    else if (phone.length < 10 || phone.length > 10) {
        document.getElementById("phoneError").innerHTML = "<p>Phone Number should be 10 digits</p>";
        flag = false;
    }

    if (query == "") {
            document.getElementById("queryError").innerHTML = "<p>Please describe your project.</p>";
            flag = false;
        }

    if (flag == true) {
        document.getElementById("fnameError").innerHTML = "";
        document.getElementById("lnameError").innerHTML = "";
        document.getElementById("emailError").innerHTML = "";
        document.getElementById("phoneError").innerHTML = "";
        document.getElementById("queryError").innerHTML = "";
    } else {
        e.preventDefault();
    }
});
