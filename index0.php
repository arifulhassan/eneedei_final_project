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
<title> Ebari Obari</title>

<link rel="stylesheet" href="assets/css/style.css" type="text/css">


<!-- <link rel="stylesheet" href="style.css"> -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

 <!-- Bootstrap CSS -->
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">




<!-- Bootstrap --> 

<!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
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
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> -->


<!-- <style>

/* Navbar container */

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial;
}

/* Links inside the navbar */

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* The dropdown container */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Dropdown button */
.dropdown .dropbtn {
  font-size: 16px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit; /* Important for vertical align on mobile phones */
  margin: 0; /* Important for vertical align on mobile phones */
}

/* Add a red background color to navbar links on hover */
.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

/* Dropdown content (hidden by default) */
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
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a grey background color to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {
  display: block;
}



</style> -->



</head>
<body>



<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->


<section id="banner">
      
      <div class="container">
      <div class="row">
          <div class="col-md-6"> 
  
          <p class="promo-title">Fastest Delivery on<br>resolving emergencies</p>
          <p style="font-size: 19px;">Easily track your courier, Get courier within hours. Efficient & safe delivery.</p>
          <a href="#loginform" data-toggle="modal" data-dismiss="modal" data-dismiss="modal" class="btn btn-outline-success" style="background-color:#ffffff; color:black;">BECOME A MARCHANT <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true" style="font-size: 20px;"></i></span></a> 
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
                    <div  style="float:right"><button type="button" class="btn btn-primary">All services</button></div>
  
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
                       <li>Delivery of parcels in the fastest time.</li>
                       <li>Resolving emergencies.</li>
                       <li>Belive indoing business with honestly Opportunity to choose scheduled for bookings.</li>
                       <li>pick up the parcel from home & home delivery.</li>
                       <li>Opportunity to get Emergency & Ultra Emergency delivery service. </li>
                       <li>Belive indoing business with honestly.</li>
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
                    <h1 class="title text-center">WHAT CLIENTS SAY ?</h1>
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
                <section id="social-media">
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
  
              </section>
  



<!--Footer -->
<?php include('includes/footer.php');?>
<!-- /Footer-->



</body>

<!-- Mirrored from themes.webmasterdriver.net/carforyou/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Jun 2017 07:22:11 GMT -->
</html>
