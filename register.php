<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Register</title>
    <!-- linking the libs -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>




  <script type="text/javascript">
    function validate()
    {
      //alert('bla bla');

      var flag = false;
      if(document.getElementById("first_name").value==""){
        document.getElementById("error_title").innerHTML = "Invalid Name";
        document.getElementById("error_text").innerHTML = "Name cannot be a blank value";
        $('#myModal').modal('show');
        flag = false;
      }
      else if(document.getElementById("last_name").value==""){
        document.getElementById("error_title").innerHTML = "Invalid Name";
        document.getElementById("error_text").innerHTML = "Name cannot be a blank value";
        $('#myModal').modal('show');
        flag = false;
      }
      else if(document.getElementById("email").value==""){
        document.getElementById("error_title").innerHTML = "Invalid Email Address";
        document.getElementById("error_text").innerHTML = "Please enter a valid Email Address, empty field detected.!";
        $('#myModal').modal('show');
        flag = false;
      }
      else if(document.getElementById("password").value==""){
        document.getElementById("error_title").innerHTML = "Invalid Password";
        document.getElementById("error_text").innerHTML = "Please enter a valid password, empty field detected.!";
        $('#myModal').modal('show');
        flag = false;
      }
      else{
        flag = true;
      }

      //$('#myModal').modal('show');
      return flag;
    }
  </script>
  <style>
  html,
body {
  height: 100%;
}

body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f2f2f2;
  /* background-image: url('images/bg.jpg'); */
  background-size: contain;
}

.form-register
{
  padding-left: 250px;
  padding-right: 250px;
}
.form-control
{
  margin-top: 15px;
}
/*.button
{
  margin-top: 15px;
}*/

  </style>

  </head>
  <body>


      <div class="container">

        <!--login screen code starts here -->
        <div class="container text-center">


        <form class="form-register"
          action="register2.php"
          method="post"
          onsubmit="return validate();">

          <!-- <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
          <h1 class="h3 mb-3 font-weight-normal text-dark"><strong>DoubleDone</strong></h1>
          <h2 class="h3 mb-3 font-weight-normal text-dark"><strong></strong>Register</h2>
          <label for="inputFirstName" class="sr-only">First Name</label>
          <input type="firstName" id="first_name" name="first_name" class="form-control" placeholder="First Name"  autofocus>
          <label for="inputLastName" class="sr-only">Last Name</label>
          <input type="lastName" id="last_name" name="last_name" class="form-control" placeholder="Last Name"  autofocus>
          <label for="inputEmail" class="sr-only">Email</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email address" >
          <label for="inputCreatePassword" class="sr-only">Create Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="New Password">

          <button class="btn btn-success" type="submit" name="btnCreate" style="margin-top:15px;">Create Account</button>
          <a href="login.php" class="btn btn-info" type="success" style="margin-top:15px;">Back</a>

    </form>
  </div><!-- end of container-->
        <!-- login screen code ends here-->


      <div class="row footer-box" style="margin-top:20px;">
        <div class="col-lg-12 text-center">
          <p>All rights Reserved &reg; Copyright &copy; Safeer Ahamed</p>
        </div>
      </div>


      </div><!--end of container -->


<!-- -->
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="error_title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p id="error_text">
            Custom error message goes here
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- -->


  </body>
</html>
