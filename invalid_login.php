<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- linking the libs -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>




  <script type="text/javascript">
    function validate(){
      //alert('bla bla');

      var flag = false;
      if(document.getElementById("user_id").value==""){
        document.getElementById("error_title").innerHTML = "Invalid Email";
        document.getElementById("error_text").innerHTML = "Email address or the user id cannot be a blank value";
        $('#myModal').modal('show');
        flag = false;
      }
      else if(document.getElementById("access_code").value==""){
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
  background-color: #f5f5f5;
  background-image: url('images/bg.jpg');
  background-size:contain;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

  </style>

  </head>
  <body>




      <div class="container">



        <!--login screen code starts here -->
        <div class="container text-center">


        <form class="form-signin"
          action="login2.php"
          method="post"
          onsubmit="return validate();">

          <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal text-dark"><strong>DoubleDone</strong> Login</h1>
          <h4 class="h5 mb-3 font-weight-normal text-danger"><strong>ACCESS</strong> DENIED</h4>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="Email address"  autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="password" name="password" class="form-control" placeholder="Password" >

          <button class="btn btn-lg btn-primary btn-block" name="btnLogin" type="submit">Login</button>
          <pre>









          </pre>
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
