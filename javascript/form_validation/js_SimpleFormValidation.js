function validateForm() {
    let firstName = document.getElementById("first_name").value;
    let firstNameError = document.getElementById("first_name_error");

    let lastName  = document.getElementById("last_name").value;
    let lastNameError = document.getElementById("last_name_error");

    let email  = document.getElementById("email").value;
    let emailError = document.getElementById("email_error");
    
    let mobile = document.getElementById("mobile").value;
    let mobileError = document.getElementById("mobile_error");
    let dob = document.getElementById("dob").value;
    let dobError = document.getElementById("dob_error");
    let address = document.getElementById("address").value;
    let addressError = document.getElementById("address_error");
    let gender = document.querySelector('input[name="gender"]:checked');
    const genderError = document.getElementById("gender_error");
    let city = document.getElementById("city").value;
    let cityError = document.getElementById("city_error");
    

    // Check if firstName is empty
    if (firstName === "") {
        firstNameError.innerHTML = "First Name should not be empty";
        return false;
    }

    // Check if firstName length is between 3 and 15 characters
    if (firstName.length < 3 || firstName.length > 15) {
        firstNameError.innerHTML = "First Name must be 3 to 15 characters long";
        return false;
    }

    // Check if firstName contains only letters
    for (let i = 0; i < firstName.length; i++) {
        let char = firstName.charAt(i);
        if (!((char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z'))) {
            firstNameError.innerHTML = "First Name must contain only letters";
            return false;
        }
    }

    // validation for Last Name
     
     if (lastName === "") {
        lastNameError.innerHTML = "Last Name should not be empty";
        return false;
    }

    if (lastName.length < 3 || lastName.length > 15) {
        lastNameError.innerHTML = "Last Name must be 3 to 15 characters long";
        return false;
    }

    for (let i = 0; i < lastName.length; i++) {
        let char = lastName.charAt(i);
        if (!((char >= 'A' && char <= 'Z') || (char >= 'a' && char <= 'z'))) {
            lastNameError.innerHTML = "Last Name must contain only letters";
            return false;
        }
    }

    // Validatioan for Email 
    if (email === "") {
        emailError.innerHTML = "Email Id is Required";
        return false;
    }
    
     let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
     if (!emailPattern.test(email)) {
         emailError.innerHTML = "Please enter a valid email address";
         return false;
     }

       // Validation for Mobile Number
    if (mobile === "") {
        mobileError.innerHTML = "Mobile Number is Required";
        return false;
    }

    let mobilePattern = /^[7896]\d{9}$/;
    if (!mobilePattern.test(mobile)) {
        mobileError.innerHTML = "Please enter a valid Indian mobile No. (10 digits starting with 7, 8, or 9)";
        return false;
    }

      // Validate Date of Birth
    if (dob === "") {
        dobError.innerHTML = "Please Select Date of Birth";
        return false;
    }

    // Validate for Address
     if (address === "") {
        addressError.innerHTML = "Address should not be empty";
        return false;
    }

    // Validate for Gender
    if (!gender) {
        genderError.innerHTML = "Please Select Gender";
        return false;
    }
    if (city === "") {
        cityError.innerHTML = "Please Select Your City";
        return false;
    }

    //  If all Validation Passes it will return true
    return true;

    
}
