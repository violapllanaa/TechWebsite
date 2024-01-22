<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Log In</title>
    <link rel="stylesheet" href="./css/LogIn.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="screen">
      <div class="loginForm">
        <form name="forms" method="post" onsubmit="validateForm()">
          <h2>Log In</h2>

          <div class="forms">
            <div class="form_input-group">
              <input
                type="text"
                id="username"
                placeholder="Username"
                name="username"
                required
              />
            </div>
            <div class="form_input-group">
              <input
                type="password"
                placeholder="password"
                name="password"
                required
              />
            </div>
            <div class="form_input-group">
              <input
                type="password"
                placeholder="Confirm your password"
                name="password"
                required
              />
            </div>
          </div>
          <div class="form_input-group">
            <div class="button-submit">
              <button type="submit" class="btn">Log In</button>
            </div>
          </div>
          <div class="div">
            <div class="div2">
            <p>Don't have an account?</p>
            <div class="registerForm">
              <a href="RegisterForm.php">Register now</a>
            </div>
          </div>
          </div>
        </form>

        <script>
          function validateForm() {
            var username = document.forms["forms"]["username"].value;
            var password = document.forms["forms"]["password"].value;
            var confirmpassword =
              document.forms["forms"]["confirmpassword"].value;

            if (username == null || username == "") {
              alert("Username cannot be blank");
              return false;
            } else if (password == null || password == "") {
              alert("Password cannot be blank");
              return false;
            } else if (confirmpassword == null || confirmpassword == "") {
              alert("Confirm password cannot be blank");
              return false;
            }
          }
        </script>
     
    </div>
    </div>
  </body>
</html>
