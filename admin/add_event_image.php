<?php include_once 'db_conn.php' ?>
<?php include_once 'dashboard_header.php'?>

<div class = "container" style="padding:50px;">
<form action="add_event_image.php" name="upload" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Select Event Year</label>
    <select name="year" class="form-control" id="exampleFormControlSelect1">
      <option>2018 - 2019</option>
      <option>2017 - 2018</option>
      <option>2016 - 2017</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Select Event Image</label><br>
    <input type="file" name="image" id="fileToUpload"><br><br>
    <input class="btn" style="background-color:#fe0000;color:#fff;" type="submit" value="Upload Image" name="submit">
  </div>
</form>
</div>
<?php include_once '../footer.php' ?>

<?php
    error_reporting(0);
    $year=$rights=$_POST['year'];
    if(isset($_FILES['image'])){
       $errors= array();
       $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
       $file_name = $_FILES['image']['name'];
       $file_size =$_FILES['image']['size'];
       $file_tmp =$_FILES['image']['tmp_name'];
       $file_type=$_FILES['image']['type'];
       $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));

       $expensions= array("jpeg","jpg","png");

       if(in_array($file_ext,$expensions)=== false){
          $errors[]="extension not allowed, please choose a JPEG or PNG file.";
       }

       if($file_size > 2097152){
          $errors[]='File size must be excately 2 MB';
       }

       if(empty($errors)==true){
         $sql = "INSERT INTO add_event_image (year, image) VALUES ('{$year}','$image')";
         // $sql = "insert into add_event_image(year,image) Values ('{$year}','{$image}')";
          // move_uploaded_file($file_tmp,"../uploads/".$year."_".$file_name);
          if(mysqli_query($conn,$sql)){
            echo "<script> alert('Image added successfully');</script>";
          }

       }else{
          print_r($errors);
       }
    }

?>
