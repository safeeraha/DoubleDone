<?php
  //start the session functionality
  session_start();

  //connect to the MySQL DB Server
  require("dbCon.php");

  if(isset($_POST['btnCreate']))
  {
  $f_name = $_POST['first_name'];
  $l_name = $_POST['last_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql  = "insert into user(f_name,l_name,email,password) values(";
  $sql .= "'$f_name',";
  $sql .= "'$l_name',";
  $sql .= "'$email',";
  $sql .= "'$password')";

  //execute the SQL command
  $x = $mysqli->query($sql);
  }

 //build the dynamic SQL command usering user_id and access_code
 //$sql = "select * from logs where user_id='$user_id'";

  //execute the sql command
  //$rs = $mysqli->query($sql);

  //make sure the username exists
  //if(mysqli_num_rows($rs)>0){
    //username exisits
    //echo "valid username can proceed to next level";
    //$row = mysqli_fetch_assoc($rs);
    //check the user typed access_code is same as the db table $access_code
    //if($access_code==$row['access_code']){ //old code before encryption
    //if(crypt($access_code,$row['access_code']) == $row['access_code']){
      //password is also correct
      //echo "passwrod also correct can login";

      //store values in the $_SESSION array
      // $_SESSION['full_name'] = $full_name;
      // $_SESSION['user_id'] = $user_id;
      // $_SESSION['access_code'] = $access_code;
      // $_SESSION['user_group'] = $user_group;

      //redirect the user to the index.php file
      header("location:login.php");

    /*else{
      //password is wrong
      //echo "wrong password";
      header("location:invalid_login.php");
    }

  else{
    //user does not exists
    //echo "invalid username";
    header("location:invalid_login.php");
  }*/


 ?>
