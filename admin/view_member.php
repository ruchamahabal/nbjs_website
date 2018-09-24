<?php session_start(); include_once 'dashboard_header.php'; include_once 'db_conn.php'; ?>

<?php if (isset($_SESSION['login'])) {
  echo '<div class="container shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:50px;">
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
      <tbody id="member_table_body">';
      $sql = "select * from add_member_list";
      $result = mysqli_query($conn,$sql);
      $resultCheck = mysqli_num_rows($result);
          if($resultCheck > 0){
            $counter = 1;
            while($row = mysqli_fetch_assoc($result))
            {
               //Creates a loop to loop through results
               ?>
              <tr id=<?php echo $row['member_id']; ?> >
               <td><?php echo $counter; ?></td>
               <td><?php echo $row['name']; ?></td>
               <td><?php echo $row['village']; ?> </td>
               <td><?php echo $row['Designation']; ?></td>
               <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#DeleteModal" data-mid="<?php echo $row['member_id']; ?>" style="margin:0px; background-color:#fe0000; color:#fff;">Del</button></td>
             </tr>
             <?php
               $counter ++;
          }
      }
      echo '</tbody>
    </table>
  </div>';
}
else {
  header("Location: ../index.php");
  exit();
}
?>
<!-- Table -->


      <!-- delete-modal -->
      <div class="modal" id="DeleteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Warning!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Are you sure you want to delete the record?</p>
            </div>
            <div class="modal-footer">
              <form action="delete_member.php" method="post">
                <input name="mid"  class="form-control mmid" style="display:none;">
                <button type="submit" class="btn" style="background-color:#fe0000; color:#fff;">Delete</button>
              </form>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>


      <script type="text/javascript" src="../assets/js/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script type="text/javascript">
  $('#DeleteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
  var mid = button.data('mid')
  var modal = $(this)
  modal.find('.modal-footer .mmid').val(mid)
  })
  </script>

  <div class="" style="background-color:#5F5F5F;" align=center>
          <p style="font-size:16px;" class="lead">&#169; नानभाट जनहित सोसायटी 2018</p>
        </div>
      </body>
  </html>
