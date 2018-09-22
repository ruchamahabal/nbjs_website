<?php include_once 'admin/db_conn.php';
  if(isset($_POST['tableYear'])){
    $query = "select * from add_member_list where Year = '".$_POST['tableYear']."';";
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
}
?>
