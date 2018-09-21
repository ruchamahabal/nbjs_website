<?php include_once 'dashboard_header.php'; include_once 'db_conn.php'; ?>

<!-- Table -->
<div class="container shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:50px;">
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name of the Member</th>
        <th scope="col">Village</th>
        <th scope="col">Designation</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody id="member_table_body">
      <?php
      $sql = "select * from add_member_list";
      $result = mysqli_query($conn,$sql);
      $resultCheck = mysqli_num_rows($result);
          if($resultCheck > 0){
            $counter = 1;
            while($row = mysqli_fetch_assoc($result)){   //Creates a loop to loop through results
               echo "<tr><td>" . $counter."</td><td>" . $row['name'] . "</td><td>" . $row['village'] . "</td><td>" .$row['Designation']."</td><td>"."<Button class='delete btn btn-danger' style='margin:0px;'>Del</button> "."</td></tr>";
               $counter ++;
          }
      }
      ?>
    </tbody>
  </table>
</div>

<?php include_once '../footer.php' ?>
