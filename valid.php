<?php
session_start();
if(count($_SESSION)>0){
}
else{
  header("location:invalid_login.php");
}
 ?>
