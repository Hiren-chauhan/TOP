<?php
 
  // database connection
   include './config/connection.php';
 
  // post data
  if(!empty($_POST)) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $password = sha1($_POST['password']);
 
    // insert data into database
    $querry = "INSERT INTO users_info (name, email, contact, password) VALUES ('$name', '$email', '$contact','$password')";
    $result = mysqli_query($conn,$querry);
 
    if($result){
      echo "The form has been successfully submitted.";
    } else {
      echo "Something went wrong!";
    }
  }
  include "./config/close-connection.php";
 
?>