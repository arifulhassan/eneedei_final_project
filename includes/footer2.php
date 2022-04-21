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

<section id="footer">
              <img src="images/wave no3.svg" class="footer-img" alt="" >

                   <div class="container">
                     <div class="row">
                     <div class="col-md-4 footer-box">
                         <img src="images/emerlogo.jpg" alt="" >
                         <!-- <p>With our simple and easy to use user interface you can get all the information you need in your own user dashboard. You can view your user dashboard to stay updated. Whether it’s about a parcel or payment, you can get all of your information with just simple clicks.</p> -->
                         <ul>


<li><a href="page.php?type=aboutus" style="color:#fff; text-decoration:none">About Us</a></li>
  <li><a href="page.php?type=faqs" style="color:#fff; text-decoration:none">FAQs</a></li>
  <li><a href="page.php?type=privacy" style="color:#fff; text-decoration:none">Privacy</a></li>
<li><a href="page.php?type=terms" style="color:#fff; text-decoration:none">Terms of use</a></li>
     <li><a href="admin/" style="color:#fff; text-decoration:none">Admin Login</a></li>
</ul>

                     </div>
                     <div class="col-md-4 footer-box">
                       <p><b>CONTACT US</b></p>
                       <P><a href="https://goo.gl/maps/X1XYbpfxgRExPXfC7" style="color:#fff; text-decoration:none"><i class="fa fa-map-marker"></i>DIU,Ashulia,Dhaka</P></a>
                       <P><a href="tel:01745367286" style="color:#fff; text-decoration:none"><i class="fa fa-phone"></i>+880 1745367286</P></a>
                       <P><a href="mailto:ecs@gmail.com" style="color:#fff; text-decoration:none"><i class="fa fa-envelope-o"></i>ecs@gmail.com</P></a>

                     </div>
                     <div class="col-md-4 footer-box">
                       <p><b>SUBSCRIBE NEWSLETTER</b></p>
                       <form method="post">
                       <input type="email" name="subscriberemail" class="form-control" placeholder="Enter Your Email">
                       <button type="button" name="emailsubscibe" class="btn btn-primary">SUBSCRIBE</button>
                       <p class="subscribed-text">*We send great deals and latest auto news to our subscribed users very week.</p>

                     </div>
                   </div>
                   <hr>
                   <p class="copyright">Copyright &copy; 2021 ECS. Brought To You By <a style="text-decoration:none; color:red" href="https://www.facebook.com/profile.php?id=100006323677239">Ariful Hassan</p>


                  </div>
            </section>

                <!---------------------------------- Smooth Scrool  ---------------------------->
                <script src="smooth-scrool.js"></script>
                <script>
                  var scrool = new SmoothScrool('a[href*="#"]');


                  </footer>
                  



