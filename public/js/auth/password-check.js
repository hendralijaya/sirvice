function checkPasswords() {
  var password = document.getElementById('password').value;
  var rePassword = document.getElementById('repassword').value;
  
  if (password !== rePassword) {
    alert('The password fields do not match');
    return false;
  }
  
  return true;
}