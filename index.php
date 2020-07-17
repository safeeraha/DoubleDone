<?php
  require 'valid.php';
  //session_start();

  require("dbCon.php");
  //global $email;
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Index</title>
    <!-- linking the libs -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/style.css" />
  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>
  <link rel="stylesheet" href="css/custom.css">

  </head>
  <body>
    <!-- nav bar code starts here -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="#">
          <strong>DoubleDone</strong> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">Add Task</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Search Task
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="search_today.php">Today</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="search_up.php">Upcomming</a>
              </div>
            </li>
            <li class="nav-item">
              <a href="login.php" class="nav-link disabled" href="#">Sign Out</a>
            </li>
          </ul>
          <!--
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        -->
        </div>
      </div><!--end of container for nav bar -->
      </nav>
    <!-- nav bar code end here-->

    <!--Add Task code starts here-->
    <div class="frm-grp">
    <form name="frm" id="frm" action="" method="post" enctype="multipart/form-data" onsubmit="return validate();">

      <div class="form-group">
        <label for="">New Task</label>
        <input type="text" name="task" id="task" class="form-control col-lg-10" placeholder="Title..." required>
        <span onclick="newElement()" </span>
      </div>

      <div class="form-group">
        <label for="">Date</label>
        <input type="date" id="date" name="date" required>
      </div>

      <?php
      //in php variables for ease of coding
      if(isset($_POST['btnSubmit']))
      {
      $tsk      = $_POST['task'];
      $descr    = $_POST['description'];
      $dte      = $_POST['date'];

      $sql  = "insert into tasks (task,description,date,user_id) values('$tsk', '$descr', '$dte', SELECT user_id FROM user WHERE email='$email')";

      //execute the sql command
      $x = $mysqli->query($sql);
      //echo "success";
      }
       ?>

       <script type="text/javascript">
         function validate()
         {
           //alert('bla bla');

           var flag = false;
           if(document.getElementById("task").value=="")
           {
              document.getElementById("error_title").innerHTML = "Invalid Task";
              document.getElementById("error_text").innerHTML = "Task cannot be a blank value";
              $('#myModal').modal('show');
              flag = false;
           }
           else
           {
              document.getElementById("error_title").innerHTML = "Success";
              document.getElementById("error_text").innerHTML = "Successfully Task is been added";
               $('#myModal').modal('show');
             flag = true;
           }

           //$('#myModal').modal('show');
           return flag;
       }
       </script>


      <div class="form-group">
        <label for="">Description</label>
        <input type="text" name="description" id="description" class="form-control col-lg-12"  placeholder="Description of the task">
      </div>


      <div class="form-group">
        <label for=""></label>
        <input type="submit" class="btn btn-info col-lg-2" name="btnSubmit" value="Add" style="margin-bottom:10px;">
        <input type="reset" value="Clear All" class="btn btn-danger col-lg-2" style="margin-bottom:10px;" >
      </div>

      <div class="form-group">
        <a href="index.php" class="btn btn-success col-lg-2" type="success">Add New Task</a>
        <a href="login.php" class="btn btn-dark col-lg-2" type="success">Logout</a>
      </div>

    </form>
    </div>
    <!--Add Task code ends here-->


      <div class="container">




        <!-- <div class="row" style="margin-top:20px;">

          <div class="col-lg-12">
              <h2 style="color: #f2f2f2;">DoubleDone | Weclome :
                <small style="text-transform:capitalize;" class="text-info">
                  <?php
                  //  $name_arr = explode("@",$_SESSION['user_id']);
                  //  echo  $name_arr[0]; ?>
                </small></h2>
          </div>

        </div> -->

        <!-- <div class="dropdown-divider"></div> -->



      <div class="row footer-box" style="margin-top:200px;">
        <div class="col-lg-12 text-center">
          <p style="color: #000;">All rights Reserved &reg; Copyright &copy; Safeer Ahamed</p>
        </div>
      </div>


      </div><!--end of container -->


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



  </body>
</html>
