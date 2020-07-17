<?php
  //do this 1st always - start the session functionality
  session_start();

  //connect to the MySQL DB Server
  require 'dbCon.php';

  if(isset($_POST['email']))
  {
  $mail = $_POST['email'];
  $pass = $_POST['password'];

 //build th e dynamic SQL command usering user_id
  $sql = "select * from user where email='".$mail."' AND password='".$pass."' ";

  //execute the sql command
  $rs = $mysqli->query($sql);
  }
  //make sure the username exists
  if(mysqli_num_rows($rs)>0)
  {
    //echo "Success";
    //redirect the user to the index.php file
    header("location:index.php");

    // else
    // {
    //   //password is wrong
    //   //echo "wrong password";
    //   header("location:invalid_login.php");
    // }
  }
  else
  {
    //echo "incorrect";
    //user does not exists
    //echo "invalid username";
    header("location:invalid_login.php");
  }

 ?>
