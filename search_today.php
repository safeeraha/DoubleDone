<?php

  require 'valid.php';
  require 'dbCon.php';
  //pagination function starts here
  $display_length = 3;

  global $sql;
  global $rs;

  if(! count($_REQUEST)>0){
    $offset="0";
   }
   else
   {

    if ($_REQUEST["offset"]=="" )
    {
      $offset="0";
    }
    else
      $offset=$_REQUEST["offset"];
   }

  $display_length = 3;

  function show_pages($offset, $display_length)
  {
      global $mysqli;
      global $_REQUEST;
      global $sql;

         //run a query to see how many records there are total.
        $rs        = '';
        $total_records = 0;
        $pages        = 0;
        $base_offset  = 0;


        //***
        //$sql = "select count(*) from task where ";


        $sql = "select count(*) from task ";

        $rs  = $mysqli->query($sql);

        if (mysqli_num_rows($rs)==1)
        {
          $row = mysqli_fetch_array($rs);

          $total_records = $row[0];

          $pages = ceil($total_records/$display_length);  //call the number of links to show (ceil rounds up to next int)


      if($pages>10){
        //print the next previous + and last and
      }else{

      }


          for ($x = 1 ; $x <= $pages; $x++){

            //don't show current page as link
            if ($base_offset == $offset){

              echo "<span class='btn btn-default'>$x</span>  ";
            }else{

              //echo "<span class='btn'><a href=\"".$_SERVER['PHP_SELF']."?offset=$base_offset&searchBy=$searchBy&keywords=$keywords\" target='_parent' class='btn btn-success'>$x</a></span>  ";
        //echo "<span class='page '><a href=\"".$_SERVER['PHP_SELF']."?offset=$base_offset\" target='_parent' class='btn btn-info'>$x</a></span>  ";


            }//end if
            $base_offset += $display_length;
          }//next end of for loop


        }
        else{

        }
  }//end of function code
  //pagination function ends   here
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

  <style media="screen">
    .form-group
    {
      padding-left: 80px;
      padding-right: 80px;
      padding-top: 10px;
    }
    .frm-grp
    {
      padding-top: 40px;
    }

  </style>

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
              <!--  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="delete_vehicle_1.php">Delete Vehicle Information</a>-->
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


        <div class="row" style="margin-top:20px;">

          <div class="col-lg-12 col-md-12">

            <form class=""
                  action="search1.php#search_results"
                  method="post"
                  class="form form-inline text-center">
                  <a name="search_results"></a>
                  <h2 class="text-center text-dark">SEARCH RESULTS</h2>

            </form>

          </div>


        </div><!--end of row for search controls and form -->

        <div class="dropdown-divider"></div>


        <div class="row">
          <div class="">
            <?php
              show_pages($offset,$display_length);
             ?>
          </div>

        </div>


        <div class="row">
          <div class="container">

            <table class="table table-hover">
              <thead class="table-dark">
                <tr>
                  <th>Task Id</th>
                  <th>Task</th>
                  <th>Description</th>
                  <th>Date</th>
                  <th>Done</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  //let us search for records
                  //execute the sql command
                  $sql .= "$offset, $display_length";
                  $rs = $mysqli->query($sql);
                  if(mysqli_num_rows($rs)>0)
                  {//records found

                        while($row=mysqli_fetch_assoc($rs)){
                          ?>
                          <tr>
                            <td><?php echo $row['task_id'];?></td>
                            <td><?php echo $row['task'];?></td>
                            <td><?php echo $row['description'];?></td>
                            <td><?php echo $row['date'];?></td>
                            <td><?php echo $row['done'];?></td>

                            <td>
                              <a href="edit_task1.php?task_id=<?php echo $row['task_id']; ?>"
                                class="btn btn-primary btn-sm">
                                 <i class="fas fa-edit fa-1x"></i>
                                 </a>
                                 <button type="button" name="" class="btn btn-danger btn-sm"
                                 <i class="fas fa-trash-alt fa-1x"></i>></button>

                            </td>
                          </tr>
                          <?php
                        }//end of while loop

                  }
                  else{
                    //no records
                    ?>
                      <tr>
                        <td colspan="7">
                          <div class="alert alert-danger" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="alert-heading">SORRY NO TASK FOUND</h4>
                            <p>System could not locate any task for Today.</p>
                            <hr>
                            <a href="#" class="btn btn-success">Try Again</a>
                            <a href="index.php" class="btn btn-info">Back Home</a>
                          </div>
                        </td>
                      </tr>
                    <?php

                  }
                 ?>
              </tbody>
            </table>


          </div>

        </div>





        <div class="dropdown-divider"></div>


      <div class="row footer-box" style="margin-top:20px;">
        <div class="col-lg-12 text-center">
          <p>All rights Reserved &reg; Copyright &copy; Safeer Ahamed</p>
        </div>
      </div>


      </div><!--end of container -->


 <pre>


 </pre>
  </body>
</html>
