
function validateForm() {
  var email = document.getElementById("email").value;
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  var Error = document.getElementById('Error');
 
  if (email === "") {
      Error.innerHTML = "please fill in the email";
        document.getElementById('email').focus();
        return false;
    }
  if (username === "") {
    Error.innerHTML = "please fill in the username";
      document.getElementById('username').focus();
      return false;
  }
 
  if (password.length < 8) {
    Error.innerHTML = "the password must be longer than 8 characters";
      document.getElementById('password').focus();
      return false;
  }

  if (!password.match(/[a-zA-Z]/)) {
    Error.innerHTML = "the password must contain an alphabetic character";
      document.getElementById('password').focus();
      return false;
  }


  return true;
}
