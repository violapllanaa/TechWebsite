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