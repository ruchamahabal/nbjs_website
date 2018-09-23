<?php include_once 'admin/db_conn.php';
  if(isset($_POST['EventYear'])){
    $query = "select * from add_event_image where year = '".$_POST['EventYear']."';";
    $result = mysqli_query($conn, $query);
    $resultCheck = mysqli_num_rows($result);
    $count = 0;
    if($resultCheck > 0){
      while($row = mysqli_fetch_assoc($result))
      {
        if($count%3 == 0)
        {
           echo "<div class='row mb-3'>";
        }
        echo    "<div class='col md-4'>";
        echo        "<div class=''>";
        $a=$row['image'];
        $encoded_image = base64_encode($a);
        $image = "<img class='shadow p-3 mb-5 bg-white rounded' style='max-width:380px;height:250px;margin:-15px;margin-top:10px;' src='data:image/jpeg;base64,{$encoded_image}' alt='image not found'>";
        $href ="data:image/jpeg;base64,{$encoded_image}";
        echo  $image;
        echo        "</div>";
        echo    "</div>";
        if($count%3 == 2)
        {
           echo "</div>";
        }
        $count++;
      }
  }
}
?>
