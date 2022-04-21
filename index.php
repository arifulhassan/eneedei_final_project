<?php
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title> Emergency Courier Service</title>
<!-- <link rel="stylesheet" href="assets/css/style.css"> -->

<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<link href="assets/css/slick.css" rel="stylesheet">
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/red.css" title="red" media="all" data-default-color="true" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/orange.css" title="orange" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/blue.css" title="blue" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/pink.css" title="pink" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/green.css" title="green" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/purple.css" title="purple" media="all" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="assets/images/favicon-icon/24x24.png">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

<style>

         /* dropdown-menu */

/* Style The Dropdown Button */
.dropbtn {
  /* background-color: black; */
  color: black;
  padding: 16px;
  font-size: 16px;
  
  border: none;
  cursor: pointer;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #f1f1f1}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}



</style>


</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->



<section id="banner">
      
      <div class="container">
      <div class="row">
          <div class="col-md-6"> 
  
          <p class="promo-title">Fastest Delivery on <br><br>resolving emergencies</p>
          <p style="font-size: 17px;padding:12px 0">Easily track your courier, Get courier within hours. Efficient & safe delivery.</p>
          <a href="marchant/login-user.php" data-dismiss="modal" data-dismiss="modal" class="btn btn-outline-success" style="background-color:#ffffff; color:#5da26c;">BECOME A MERCHANT <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true" style="font-size: 20px;"></i></span></a> 
        </div>
          <div class="col-md-6 text-center">
            <img src="images/img-cycle.svg" alt="" class="img-fluid">
  
          </div>
        </div>
     
  </div>
  <img src="images/wave1.png" class="bottom-img" alt="">
  </section>
  
                <!------------------- Service Section ----------------------->
  
                <section id="services">
                  <div class="container">
                    <h1 class="title text-center">Our Services</h1>
                    <div class="row text-center">
  
                      <div class="col-md-4 services">
                        <img src="images/userreview.jpg" class="service-img" alt="">
  <h4>Daily Pick up, No limitations</h4>
  <p>Emergency Courier gives you the opportunity of unlimited pickup. You can give any amount of parcels regardless of their size and weight. Also you don’t have to bring your parcels to our office! Our trusted pickup man will visit your location and pick up your parcels on behalf of you. You can request for pickup for every day of the week.
  </p>
                      </div>
                      <div class="col-md-4 services">
                        <img src="images/cashon.jpg" class="service-img" alt="">
  <h4>Cash on Delivery</h4>
  <p>At Emergency Courier we will collect the cash on behalf of you. Our trusted delivery man will deliver your parcel to your customer and collect the money. And then with our various payment methods we will give your money back to you. Also we are giving you the opportunity of sending a non-conditioned parcel to delivery as well.
  </p>
   </div>
  
  <div class="col-md-4 services">
                        <img src="images/online.jpg" class="service-img" alt="">
  <h4>Online Management</h4>
  <p>With our simple and easy to use user interface you can get all the information you need in your own user dashboard. You can view your user dashboard to stay updated. Whether it’s about a parcel or payment, you can get all of your information with just simple clicks.</p>
  
                      </div>    
  
                    </div>
                    <div style="margin:20px 500px"><a href="bike-listing.php"><button type="button" class="btn btn-primary">All services</button></a></div>
  
                  </div>
  
                </section>
  
                <!---------------------- about-us ------------------->
                <section id="about-us">
                  <div class="container">
                    <h1 class="title text-center">WHY CHOOSE US ?</h1>
                  
                  <div class="row">
                   <div class="col-md-6 about-us">
                     <p class="about-title">Why we're different ?</p>
                     <ul>
                       <li>Delivery of parcels in the fastest Possible time.</li>
                       <li>Resolving emergencies.</li>
                       <li>Believe in doing business with honestly Opportunity to choose scheduled for bookings.</li>
                       <li>pick up the parcel from home & home delivery.</li>
                       <li>Opportunity to get Emergency & Ultra Emergency delivery service. </li>
                       <li>Believe in doing business with honestly.</li>
                       <!-- <li>Belive indoing business with honestly</li>
                       <li>Belive indoing business with honestly</li> -->
  
                     </ul>
                   </div>
                  
                  
  
                  <div class="col-md-6">
                    <img src="images/choose.jpg" height="50%" width="70%" class="img-fluid">
                  </div>
                 </div>
                </div>
                </section>
  
                <!------------------------ Testimonials --------------------->
                <section id="testimonials">
                  <div class="container">
                    <h1 class="title text-center">What  Developers  Say ?</h1>
                     <div class="row  offset-1">
                       <div class="col-md-5 testimonials">
                        <p>With our simple and easy to use user interface you can get all the information you need in your own user dashboard. You can view your user dashboard to stay updated. Whether it’s about a parcel or payment, you can get all of your information with just simple clicks.</p>
                           <img src="images/tushar.png" alt="">
                           <p class="user-details"><b>Ariful Hassan</b><br>Co-founder at ECS</p>
  
                       </div>
                       <div class="col-md-5 testimonials">
                        <p>With our simple and easy to use user interface you can get all the information you need in your own user dashboard. You can view your user dashboard to stay updated. Whether it’s about a parcel or payment, you can get all of your information with just simple clicks.</p>
                           <img src="images/maisha.jpg" alt="">
                           <p class="user-details"><b>Maisha Ferdoushi</b><br>Co-founder at ECS</p>
  
                       </div>
                     </div>
                  </div>
                </section>
  
                <!-- Social Media Section -->
                <!-- <section id="social-media">
                <div class="container text-center">
                 <p>FIND US ON SOCIAL MEDIA</p>
                 <div class="social-icons">
                   <a href="#"><img src="images/facebook.png" alt=""></a>
                   <a href="#"><img src="images/instagram.png" alt=""></a>
                   <a href="#"><img src="images/twitter.png" alt=""></a>
                   <a href="#"><img src="images/whatsapp.png" alt=""></a>
                   <a href="#"><img src="images/youtube.png" alt=""></a>
                   <a href="#"><img src="images/linkedin.png" alt=""></a>
  
                 </div>
  
                </div>
  
              </section> -->
<p></p>



<!-- Banners -->
<!-- <section id="banner" class="banner-section">
  <div class="container">
    <div class="div_zindex">
      <div class="row">
        <div class="col-md-5 col-md-push-7">
          <div class="banner_content">
            <h1>Find Your Perfect Courier Delivery</h1>
            <p>We have more than a Package courier service for you to choose. </p>
            <a href="#" class="btn">Read More <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a> </div>
        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- /Banners -->


<!-- Resent Cat-->

<!-- <section class="section-padding gray-bg">
  <div class="container">
    <div class="section-header text-center">
      <h2>Find the Best <span>Courier Delivery Service For You</span></h2>
      <p>You will be able to fully enjoy your holiday and your ride! Any problems? Our passionate team will be happy to help you!! No waste of time during your holidays to find a rental point on the spot! No language barrier, thanks to our multilingual team! At the same price you would pay on the spot! We have best Courier Delivery with best deals</p>
    </div>
    <div class="row"> -->

      <!-- Nav tabs -->

      <!-- <div class="recent-tab">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#resentnewcar" role="tab" data-toggle="tab">New Package</a></li>
        </ul>
      </div> -->

      <!-- Recently Listed New Cars -->

      <!-- <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="resentnewcar">

<?php $sql = "SELECT tblvehicles.VehiclesTitle,tblbrands.BrandName,tblvehicles.PricePerDay,tblvehicles.FuelType,tblvehicles.ModelYear,tblvehicles.id,tblvehicles.SeatingCapacity,tblvehicles.VehiclesOverview,tblvehicles.Vimage1 from tblvehicles join tblbrands on tblbrands.id=tblvehicles.VehiclesBrand";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{
?>

<div class="col-list-3">
<div class="recent-car-list">
<div class="car-info-box"> <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="image"></a>
<ul>
<li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> Time Schedule</li>
<li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
</ul>
</div>
<div class="car-title-m">
<h6><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h6>
<span class="price">TK. <?php echo htmlentities($result->PricePerDay);?> /Delivery Charge Per Kg</span>
</div>
<div class="inventory_info_m">
<p><?php echo substr($result->VehiclesOverview,0,70);?></p>
</div>
</div>
</div>
<?php }}?>

      </div>
    </div>
  </div>
</section> -->

<!-- /Resent Cat -->

<!-- Fun Facts-->

<!-- <section class="fun-facts-section">
  <div class="container div_zindex">
    <div class="row">
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-calendar" aria-hidden="true"></i>10+</h2>
            <p>Years In Business</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-motorcycle " aria-hidden="true"></i>10000+</h2>
            <p>New Courier For Delivery</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-motorcycle " aria-hidden="true"></i>999+</h2>
            <p>Used Use For Delivery</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6 col-sm-3">
        <div class="fun-facts-m">
          <div class="cell">
            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>850+</h2>
            <p>Satisfied Customers</p>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Dark Overlay-->
  <!-- <div class="dark-overlay"></div> -->
</section>
<!-- /Fun Facts-->


<!--Testimonial -->
<section class="section-padding testimonial-section parallex-bg">
  <div class="container div_zindex">
    <div class="section-header white-text text-center">
      <h2>Our Satisfied <span>Customer's Review</span></h2>
    </div>
    <div class="row">
      <div id="testimonial-slider">
<?php
$tid=1;
$sql = "SELECT tbltestimonial.Testimonial,tblusers.FullName from tbltestimonial join tblusers on tbltestimonial.UserEmail=tblusers.EmailId where tbltestimonial.status=:tid";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>


        <div class="testimonial-m">
          <div class="testimonial-img"> <img src="assets/images/rl-img.png" alt="" /> </div>
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5><?php echo htmlentities($result->FullName);?></h5>
            <p><?php echo htmlentities($result->Testimonial);?></p>
          </div>
        </div>
        </div>
        <?php }} ?>



      </div>
    </div>
  </div>
  <!-- Dark Overlay-->
  <!-- <div class="dark-overlay"></div> -->
</section>
<!-- Testimonial-->


<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->

<!--Back to top-->
<!-- <div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div> -->
<!--/Back to top-->

<!--Login-Form -->
<?php include('includes/login.php');?>
<!--/Login-Form -->

<!--Register-Form -->
<?php include('includes/registration.php');?>

<!--/Register-Form -->

<!--Forgot-password-Form -->
<?php include('includes/forgotpassword.php');?>
<!--/Forgot-password-Form -->

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<!--Switcher-->
<script src="assets/switcher/js/switcher.js"></script>
<!--bootstrap-slider-JS-->
<script src="assets/js/bootstrap-slider.min.js"></script>
<!--Slider-JS-->
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>
