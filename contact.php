<?php include_once 'header.php' ?>

<div class="container" style="margin-top:50px;">
  <div class="" align=center style="margin-bottom:30px;" >
      <h2 style="font-weight:bold; ">संपर्क</h3>
      <h5 style="color:#fe0000;"><i>Contact Us</i> </h5>
      <hr>
  </div>
  <div class="row">
    <div class="col">
      <h5 style="color:#fe0000;">संपर्क पत्ता</h5>
      <h6 style="font-weight:bold;">सुनील लोपेज़</h6>
      <h6>नानभाट जनहित सोसायटी</h6>
      <h6 >द्वारा:</h6>
      <h6>संत पौल चर्च,</h6>
      <h6>नानभाट, नालासोपारा पश्चिम,</h6>
      <h6>पो. सोपारा, ता. वसई,</h6>
      <h6>जि. पालघर – ४०१ २०३</h6><br>
      <h6><span style="font-weight:bold;" >ईमेल</span>  info@nanbhatjanhitsociety.com</h6>
      <h6><span style="font-weight:bold;">मो.</span> +91 93237 10386</h6>
    </div>
    <div class="col">
      <h5 style="color:#fe0000;">Reach Us</h5>
      <div id="map" style="height:400px;width:100%;"></div>
      <script>
        // Initialize and add the map
        function initMap() {
          // The location of Uluru
          var uluru = {lat: 19.427337, lng: 72.78793};
          // The map, centered at Uluru
          var map = new google.maps.Map(
              document.getElementById('map'), {zoom: 15, center: uluru});
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: uluru, map: map});
        }
      </script>
      <script async defer
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQIH53JOFdhyRkTQcdCJFOCSjvRlXY-ms&callback=initMap">
      </script>
    </div>
  </div>
</div>

<?php include_once 'footer.php' ?>