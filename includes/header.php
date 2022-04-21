<header>
<div class="default-header">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-md-2">
          <div class="logo"> <a href="index.php"><img src="assets/images/oeneedeilogo.png" height="8%" width="100%" alt="image"/></a> </div>
        </div>
        <div class="col-sm-9 col-md-10">
          <div class="header_info">
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-envelope" aria-hidden="true"></i> </div>
              <p class="uppercase_text" style="color:#111111">For Support Mail us : </p>
              <a href="mailto:info@example.com">ecs@gmail.com</a> </div>
            <div class="header_widgets">
              <div class="circle_icon"> <i class="fa fa-phone" aria-hidden="true"></i> </div>
              <p class="uppercase_text" style="color:#111111">Service Helpline Call Us: </p>
              <a href="tel:01779206002">01745-367286 / 01732-510196</a> </div>
            <div class="social-follow">
              <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              </ul>
            </div>
   <?php   if(strlen($_SESSION['login'])==0)
	{
?>
 <div class="login_btn"> <a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login / Register</a> </div>
<?php }
else{

echo "Welcome To ECS";
 } ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Navigation -->
  <nav id="navigation_bar" class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
        <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="header_wrap">
        <div class="user_login">
          <ul>

            <li class="dropdown"> <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i>
<?php
$email=$_SESSION['login'];
$sql ="SELECT FullName FROM tblusers WHERE EmailId=:email ";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
foreach($results as $result)
	{

	 echo htmlentities($result->FullName); }}?><i class="fa fa-angle-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
           <?php if($_SESSION['login']){?>
            <li><a href="profile.php">Profile</a></li>
              <li><a href="update-password.php">Password</a></li>
            <li><a href="my-booking.php">Packages</a></li>
            <li><a href="ultradelivery.php">Ultra</a></li>
            <li><a href="post-testimonial.php">Feedback</a></li>
          <li><a href="my-testimonials.php">My Feedback</a></li>
            <li><a href="logout.php">Log Out</a></li>
            <?php } else { ?>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Profile</a></li>
              <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Password</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Pakages</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Ultra</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Feedback</a></li>
          <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">My Feedback</a></li>
            <li><a href="#loginform"  data-toggle="modal" data-dismiss="modal">Log in</a></li>
            <?php } ?>
          </ul>
            </li>
          </ul>
        </div>
        <div class="header_search">
          <div id="search_toggle"><i class="fa fa-search" aria-hidden="true"></i></div>
          <form action="#" method="get" id="header-search-form">
            <input type="text" placeholder="Search..." class="form-control">
            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
          </form>
        </div>
      </div>

      
      <div class="collapse navbar-collapse" id="navigation">
      <!-- <a class="navbar-brand" href="#"><img src="images/emerlogo.jpg" height="10%" width="50%" alt=""></a> -->
      
        <ul class="nav navbar-nav">

        
            
          

          <!-- <li><a href="index.php">Home</a></li> -->
          
          <!-- <div class="dropdown">
              <button class="nav-link" style="color: black !important;">SERVICES</button>
              <div class="dropdown-content">
              <a href="#">Ultra Delivery</a>
                <a href="bike-listing.php">Package Delivery</a>
              </div>
            </div>
             -->
             <li>
             <div  class="dropdown" style="padding:20px 0">
             <b><a class="nav-link" style="color: black !important">SERVICES <i class="fa fa-angle-down" aria-hidden="true"></i> </a></b>
              <div class="dropdown-content">
              <b><a href="bike-listing.php">Package</a></b>
               <b> <a href="ultraservice-details.php">Delivery</a></b>

              </div>
            </div>
            </li>

            <li><a href="page.php?type=servicearea">Service Area</a></li>

          <li><a href="page.php?type=aboutus">About Us</a></li>
          
          <!-- <li><a href="bike-listing.php">Service</a> -->
          <li><a href="contact-us.php">Contact Us</a></li>

         
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navigation end -->

</header>
