<?php include_once 'db_conn.php' ?>
<?php include_once 'dashboard_header.php'?>

<div class = "container">
<form action="add_event_image.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Name of the Member</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Village</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlInput1">Designation</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" required>
  </div><br>
  <input type="submit" value="Add" class="btn btn-danger" name="submit">
</form>
</div>
<?php include_once '../footer.php' ?>
