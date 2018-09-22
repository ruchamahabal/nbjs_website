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
    <input type="text" class="form-control" name="village" id="exampleFormControlInput2" required>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Designation</label>
    <input type="text" name="desg" class="form-control" id="exampleFormControlInput3" required>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlSelect2">From Year</label>
    <select name="fromYear" class="form-control" id="exampleFormControlSelect1">
      <option>2017</option>
      <option>2014</option>
      <option>2011</option>
      <option>2008</option>
      <option>2005</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlSelect2">To Year</label>
    <select name="toYear" class="form-control" id="exampleFormControlSelect2">
      <option>2020</option>
      <option>2017</option>
      <option>2014</option>
      <option>2011</option>
      <option>2008</option>
    </select>
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
  $fromYear = (int)$_POST['fromYear'];
  $toYear = (int)$_POST['toYear'];
  $sql = "INSERT INTO add_member_list (name,village,Designation,Year_from, Year_to) VALUES ('$name', '$village', '$desg', $fromYear, $toYear);";
  mysqli_query($conn,$sql);
  echo "<script> alert('Entry added successfully');</script>";
  exit();
}
else {
  // echo "<script> location.href='../index.php'; </script>";
  exit();
}

?>
