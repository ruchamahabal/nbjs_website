<?php
   include_once 'db_conn.php';
   if(isset($_POST['mid'])){
     $query = 'delete from add_member_list where member_id = '.$_POST['mid'].';';
     $result = mysqli_query($conn, $query);
     if($result){
       header('Location: view_member.php?successsdel='.$_POST['mid']);
     }
     else{
       echo "Something went wrong";
     }
   }
 ?>
