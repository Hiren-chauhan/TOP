function validateform(){

  var first_name = document.myform.first_name.value;
  
  if (first_name == null || first_name == ""){  
    alert("first_name can't be blank");  
    return false;  
  }else {
    alert('succes');
    return true;
  }
} 