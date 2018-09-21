<?php include_once 'db_conn.php' ?>
<?php include_once 'dashboard_header.php'?>

<div class = "container" style="padding:50px;">
<form action="add_member.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name of the Member</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" required>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Village</label>
    <input type="text" class="form-control" name="village" id="exampleFormControlInput1" required>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Designation</label>
    <input type="text" name="desg" class="form-control" id="exampleFormControlInput1" required>
  </div><br>
  <input type="submit" value="Add" class="btn" style="background-color:#FE0000;color:#fff;" name="submit">
</form>
</div>
<?php include_once '../footer.php' ?>

<?php
if (isset($_POST['submit'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $village = mysqli_real_escape_string($conn, $_POST['village']);
  $desg =  mysqli_real_escape_string($conn, $_POST['desg']);
  $sql = "INSERT INTO add_member_list (name,village,Designation) VALUES ('$name', '$village', '$desg');";
  mysqli_query($conn,$sql);
  echo "<script> alert('Entry added successfully');</script>";
  exit();
}
else {
  // echo "<script> location.href='dashboard.php?failure'; </script>";
  exit();
}

?>
