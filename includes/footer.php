<?php
if(isset($_POST['emailsubscibe']))
{
$subscriberemail=$_POST['subscriberemail'];
$sql ="SELECT SubscriberEmail FROM tblsubscribers WHERE SubscriberEmail=:subscriberemail";
$query= $dbh -> prepare($sql);
$query-> bindParam(':subscriberemail', $subscriberemail, PDO::PARAM_STR);
$query-> execute();
$results = $query -> fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query -> rowCount() > 0)
{
echo "<script>alert('Already Subscribed.');</script>";
}
else{
$sql="INSERT INTO  tblsubscribers(SubscriberEmail) VALUES(:subscriberemail)";
$query = $dbh->prepare($sql);
$query->bindParam(':subscriberemail',$subscriberemail,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Subscribed successfully.');</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}
}
}
?>

<footer>
  <div id="footer" class="footer-top">
  <img src="images/wave no3.svg" class="footer-img" alt="">

    <div class="container">
      <div class="row">

        <div class="col-md-4">
        <a href="index.php"><img src="assets/images/onlogo.png" alt="" height="10%" width="50%"></a>

          <!-- <h6>About Us</h6> -->
          <ul>

          <li><a href="bike-listing.php" style="color:white; text-style:bold">Services</a></li>
          <li><a href="page.php?type=servicearea" style="color:white; text-style:bold">Service Area</a></li>
          <li><a href="page.php?type=aboutus" style="color:white; text-style:bold">About Us</a></li>
          <li><a href="contact-us.php" style="color:white; text-style:bold">Contact Us</a></li>
            <li><a href="page.php?type=privacy" style="color:white; text-style:bold">Privacy</a></li>
          <li><a href="page.php?type=terms" style="color:white; text-style:bold">Terms of use</a></li>
          </ul>
        </div>

        <div class="col-md-4 footer-box">
                       <p><b>CONTACT US</b></p>
                       <P><a href="https://goo.gl/maps/X1XYbpfxgRExPXfC7" style="color:#fff; text-decoration:none"><i class="fa fa-map-marker"></i>DIU,Ashulia,Dhaka</P></a>
                       <P><a href="tel:01745367286" style="color:#fff; text-decoration:none"><i class="fa fa-phone"></i>+880 1745367286</P></a>
                       <P><a href="mailto:ecs@gmail.com" style="color:#fff; text-decoration:none"><i class="fa fa-envelope-o"></i>ecs@gmail.com</P></a>

                     </div>

        <div class="col-md-4 col-sm-4">
          <h6 style="color:white">Subscribe Newsletter</h6>
          <div class="newsletter-form">
            <form method="post">
              <div class="form-group">
                <input type="email" name="subscriberemail" class="form-control newsletter-input" required placeholder="Enter Email Address" />
              </div>
              <button type="submit" name="emailsubscibe" class="btn btn-block">Subscribe <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
            </form>
            <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users very week.</p>
          </div>
         
        </div>
       
      </div>
      <hr>
                   <p class="copyright">Copyright &copy; 2021 ECS. Brought To You By <a style="text-decoration:none; color:red" href="https://www.facebook.com/profile.php?id=100006323677239">Ariful Hassan</a></p>

     
    </div>
    
   
 
  <!-- <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-push-6 text-right">
          <div class="footer_widget">
            <p>Connect with Us:</p>
            <ul>
              <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
              <li><a href="ecs@gmail.com"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
              <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
            </ul>
          </div>
        </div> -->
        <!-- <div class="col-md-6 col-md-pull-6">
          <p class="copy-right">Copyright &copy; 2021 Emergency Courier Service.Brought To You By <a href="https://www.facebook.com/profile.php?id=100006323677239">ECS Team</a></p>
        </div>
      </div>
    </div>
  </div> -->
  
</footer>
