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

<div class="container">

</div>

<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
     $('#event_gallery_nav a').click(function(e){
       e.preventDefault();
       var selected = $(this).text();
       $('#year').html(selected);
       // $.ajax({
       //   type:'POST',
       //   url:'get_members_table.php',
       //   data: {tableYear: selected},
       //   dataType: 'html',
       //   success: function(data){
       //      $('#member_table_body').html(data);
       //    }
       //   }).fail(function(){
       //     alert("could not complete");
       //   });
       });
     });
</script>

<?php include_once 'footer.php' ?>
