<?php session_start(); include_once 'db_conn.php' ?>
<?php include_once 'dashboard_header.php'?>
<?php if (isset($_SESSION['login'])) {
  echo '<div class = "container" style="padding:50px;">
  <form action="add_member.php" method="post">
    <div class="form-group">
      <label for="exampleFormControlInput1">Name of the Member</label>
      <input type="text" name="name" class="form-control" id="exampleFormControlInput1" required>
    </div><br>
    <div class="form-group">
      <label for="exampleFormControlInput1">Village</label>
      <input type="text" class="form-control" name="village" id="exampleFormControlInput2" required>
    </div><br>
    <div class="form-group">
      <label for="exampleFormControlInput1">Designation</label>
      <input type="text" name="desg" class="form-control" id="exampleFormControlInput3" required>
    </div><br>
    <div class="form-group">
      <label for="exampleFormControlSelect2">Year</label>
      <select name="year" class="form-control" id="exampleFormControlSelect1">
        <option>2017 - 2020</option>
        <option>2014 - 2017</option>
        <option>2011 - 2014</option>
        <option>2008 - 2011</option>
        <option>2005 - 2008</option>
      </select>
    </div><br>
    <input type="submit" value="Add" class="btn" style="background-color:#FE0000;color:#fff;" name="submit">
  </form>
  </div>';
} else {
  header("Location: ../index.php");
  exit();
}

?>



<!-- inserted successfully modal -->
<div id="insert" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Alert</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Record Inserted Successfully</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">OK</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<?php
if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $village = mysqli_real_escape_string($conn, $_POST['village']);
  $desg =  mysqli_real_escape_string($conn, $_POST['desg']);
  $year = $_POST['year'];
  $sql = "INSERT INTO add_member_list (name,village,Designation,Year) VALUES ('$name', '$village', '$desg', '$year');";
  mysqli_query($conn,$sql);
  echo "<script type='text/javascript'>
           $(document).ready(function(){
               $('#insert').modal('show');
            });
      </script>";
  exit();
}
else {
  // echo "<script> location.href='../index.php'; </script>";
  exit();
}

?>
