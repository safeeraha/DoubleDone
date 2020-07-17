<?php
  require 'dbCon.php';
  $task_id = $_REQUEST['task_id'];

  $sql = "select * from task where task_id=$task_id";

  $rs = $mysqli->query($sql);

  ?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Task Id</th>
        <th>Task</th>
        <th>Description</th>
        <th>Task Date</th>
        <th>Done</th>
      </tr>
    </thead>

    <tbody>
      <tr>

      <?php
        if(mysqli_num_rows($rs)>0){
          $row = mysqli_fetch_assoc($rs);
          echo "<td>$row[task_id]</td>";
          echo "<td>$row[task]</td>";
          echo "<td>$row[description]</td>";
          echo "<td>$row[date]</td>";
          echo "<td>$row[done]</td>";
        }
        else{
          ?>
            <td colspan="5" class="text-center text-danger">Sorry No Task Found</td>
          <?php
        }
       ?>
       </tr>
    </tbody>
  </table>

  <?php


 ?>
