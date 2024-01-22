<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register Now</title>
    <script defer src="index.js"></script>
    <link rel="stylesheet" href="./css/RegisterForm.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="screen">
      <div class="registerform">
        <h1>Register Form</h1>
        <form name="forms" method="post" onsubmit="validateForm()">
          <div class="form-row">
            <div class="form_column">
              <label class="labels" for="Firstname">First Name</label>
              <input
                type="text"
                id="firstname "
                class="box"
                for="name "
                placeholder="Enter your firstname"
                required
              />
            </div>
            <div class="form_column">
              <label class="labels" for="lastname">Last Name</label>

              <input
                type="text"
                id="lastname"
                class="box"
                placeholder="Enter your lastname"
                name="lastname    "
                required
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form_column">
              <label class="labels" for="birthday">Birthday</label>
              <input type="date" id="birthday" class="box" required />
            </div>

            <div class="form_column">
              <label class="labels" for="gender">Gender</label>
              <div class="form_column-checkbox">
                <input
                  type="radio"
                  id="gender"
                  class="custom-checkbox"
                  required
                />
                <label> F</label>
                <input
                  type="radio"
                  id="gender"
                  class="custom-checkbox"
                  required
                />
                <label> M</label>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form_column">
              <label class="labels" for="email">Email</label>

              <input
                type="email"
                id="email "
                placeholder="Enter your email"
                class="box"
              />
            </div>
            <div class="form_column">
              <label class="labels" for="phonenumber">Phone Number</label>

              <input
                type="text"
                id="phonenumber"
                placeholder="Enter your phone number"
                class="box"
              />
            </div>
          </div>

          <div class="form-row">
            <div class="form_column">
              <label class="labels" for="password">Password</label>

              <input
                type="password"
                id="password"
                placeholder="Enter your password  "
                class="box"
              />
            </div>
            <div class="form_column">
              <label class="labels" for="confirmpassword"
                >Confirm Password</label
              >

              <input
                type="password"
                id="confirmpassword"
                placeholder="Enter your confirm password"
                class="box"
              />
            </div>
          </div>

          <div class="form_input-group">
            <div class="button-submit">
              <button type="submit" id="button " class="btn">Register</button>
            </div>
          </div>
          <div class="div">
            <div class="div2">
            <p>Already have an account ?</p>
            <div class="registerForm">
              <a href="./LogIn.php">Log In </a>
            </div>
          </div>
          </div>
        </form>
      </div>
    </div>
<script>
  function validateForm(){
    let nameInput = document.getElementById('firstname');
    let nameError = document.getElementById('nameError');
    let emailInput = document.getElementById('email');
    let emailError = document.getElementById('emailError');
    let errorMessages = document.getElementById('errorMessages');

    nameError.innerText = '';
    emailError.innerText = '';
    errorMessages.innerText = '';

    if (!nameRegex.test(nameInput.value)) {
        nameError.innerText = 'Invalid name';
        return;
    }
    if (!emailRegex.test(emailInput.value)) {
        emailError.innerText = 'Invalid email';
        return;
    }

    errorMessages.innerText = 'Form submitted successfully!';
}

</script>
  </body>
</html>
