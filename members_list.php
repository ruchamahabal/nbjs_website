<?php include_once 'admin/db_conn.php'; include_once 'header.php'; ?>

<div class="" align=center style="margin-top:50px;">
  <h2>नानभाट जनहित सोसायटी सदस्य</h2>
  <p style="color:#fe0000;">
    Office Bearer
    <span id="year">
       2017 - 2020
    </span>
  </p>
</div>

<!-- Table -->
<div class="container shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:50px;">
  <table class="table table-hover">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Name of the Member</th>
        <th scope="col">Village</th>
        <th scope="col">Designation</th>
      </tr>
    </thead>
    <tbody id="member_table_body">
      <?php
          $query = "select * from add_member_list where Year='2017 - 2020';";
          $result = mysqli_query($conn, $query);
          $resultCheck = mysqli_num_rows($result);
          if($resultCheck > 0){
            while($row = mysqli_fetch_assoc($result))
            {
              echo "<tr>";
              echo "<td>".$row['name']."</td>";
              echo "<td>".$row['village']."</td>";
              echo "<td>".$row['Designation']."</td>";
              echo "</tr>";
            }
        }
       ?>
    </tbody>
  </table>
</div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script type="text/javascript">
   $(document).ready(function(){
     $('#member-list-nav a').click(function(e){
       e.preventDefault();
       var selected = $(this).text();
       $('#year').html(selected);
       $.ajax({
         type:'POST',
         url:'get_members_table.php',
         data: {tableYear: selected},
         dataType: 'html',
         success: function(data){
            $('#member_table_body').html(data);
          }
         }).fail(function(){
           alert("could not complete");
         });
       });
     });
</script>
