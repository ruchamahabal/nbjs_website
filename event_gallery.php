<?php include_once 'admin/db_conn.php'; include_once 'header.php'; ?>

<div class="" align=center style="margin-top:50px;">
  <h2>क्षणचित्रे संग्रहय</h2>
  <p style="color:#fe0000;">
    Events Photo Gallery
    <span id="year">
       2018 - 2019
    </span>
    <hr>
  </p>
</div>

<div class="container" style="margin-top:50px;">
    <div class="container gallery-container">
      <div class="gallery" id="eventGallery">

         <?php
         $query = "select * from add_event_image where year = '2018 - 2019';";
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
             echo    "<div class='col-md-4'>";
             echo        "<div class='card'>";
             $a=$row['image'];
             $encoded_image = base64_encode($a);
             $image = "<img src='data:image/jpeg;base64,{$encoded_image}' alt='image not found'>";
             echo  $image;
             echo        "</div>";
             echo    "</div>";
             if($count%3 == 0)
             {
                echo "</div>";
             }
             $count++;
           }
       }
       ?>
         </div>
     </div>
</div>

<?php include_once 'footer.php'; ?>

<script type="text/javascript">
   $(document).ready(function(){
     $('#event_gallery_nav a').click(function(e){
       e.preventDefault();
       var selected = $(this).text();
       $('#year').html(selected);
       $.ajax({
         type:'POST',
         url:'get_event_images.php',
         data: {EventYear: selected},
         dataType: 'html',
         success: function(data){
            $('#eventGallery').html(data);
          }
         }).fail(function(){
           alert("could not complete");
         });
       });
     });
</script>
