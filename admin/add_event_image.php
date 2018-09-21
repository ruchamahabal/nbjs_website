<?php include_once 'db_conn.php' ?>
<?php include_once 'dashboard_header.php'?>

<div class = "container">
<form action="add_event_image.php" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Select Event Year</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>2018</option>
      <option>2017</option>
      <option>2016</option>
      <option>2015</option>
    </select>
  </div><br>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Select Event Image</label><br>
    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <input class="btn btn-danger" type="submit" value="Upload Image" name="submit">
  </div>
</form>
</div>
<?php include_once '../footer.php' ?>

<?php
// $target_dir = "../assets/uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
// // Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
// // Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
// // Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
// // if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }
?>
