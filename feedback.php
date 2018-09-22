<?php include_once 'header.php' ?>

<div class="container" style="margin-top:50px;">

  <div class="" align=center style="margin-bottom:30px;" >
      <h2 style="font-weight:bold; ">अभिप्राय</h3>
      <h5 style="color:#fe0000;"><i>Feedback Form</i> </h4>
      <hr>
  </div>
  <div>
      <h5 style="color:#fe0000; font-weight:bold;">आम्हाला लिहा</h3>
      <h6>We always appreciate for your valuable feedback. </h6>
      <h6>(आपला प्रत्येक सल्ला आमच्यासाठी मौवल्यावान असून आम्हाला प्रेरणादायी आहे)</h6>
      <hr style="margin-top:30px;margin-bottom:30px;">
  </div>

  <form class="" action="feedback.php" method="post">
    <div class="row" style="margin-bottom:30px;">
      <div class="col">
        <input type="name" name="name" class="form-control" placeholder="Enter name" required>
      </div>
      <div class="col">
        <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
      </div>
      <div class="col">
        <input type="number" name="number" class="form-control" placeholder="Enter Number" required>
      </div>
    </div>
    <div class="row" style="margin-bottom:30px; margin-left:0px;margin-right:0px;">
      <textarea class="form-control" name="message" rows="8" placeholder="Your Valuable Feedback" required></textarea>
    </div>
    <div class="row" style="margin-bottom:30px;margin-left:0px;">
      <input type="submit" class="btn btn-long" name="submit" value="Submit" style="background-color:#fe0000; color:white;">
    </div>
  </form>
</div>


<?php include_once 'footer.php' ?>

<?php
error_reporting(0);
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $mailFrom = $_POST['email'];
  $phno = $_POST['number'];
  $message = $_POST['message'];
  $mailTo = "info@nanbhatjanhitsociety.co.in";
  $subject = "Enquiry";
  $headers = "From: ".$mailFrom;
  $txt = "You have received a feedback from ".$name.".\n\nPhone number :".$phno."\n\nEmail id".$message;

  mail($mailTo,$subject,$txt,$headers);
  echo "<script> alert('Feedback sent successfully');</script>";
  exit();
}


?>
