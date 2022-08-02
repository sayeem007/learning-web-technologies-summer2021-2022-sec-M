function notNull() {
  let username = document.getElementById('username').value;
  let password = document.getElementById('password').value;
  if(username==""||password=="")
  {
    alert("please input values");
    return false;
  }
  else{
    return true;
  }
}
