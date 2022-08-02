function notNullpro() {
  let id = document.getElementById('id').value;
  let product_name = document.getElementById('product_name').value;
  let product_type = document.getElementById('product_type').value;
  let model_number = document.getElementById('model_number').value;
  let model_year = document.getElementById('model_year').value;
  if(id==""||product_name==""||product_type=""||model_number=""||model_year="")
  {
    alert("please input values");
    return false;
  }
  else{
    return true;
  }
}
