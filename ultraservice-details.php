<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(isset($_POST['submit']))
{
$fromname=$_POST['fromname'];
$toname=$_POST['toname'];
$fromaddress=$_POST['fromaddress'];
$fromdate=$_POST['fromdate'];
// $todate=$_POST['todate'];
$fromcontactno=$_POST['fromcontactno'];
$tocontactno=$_POST['tocontactno'];
$delivaryprocess=$_POST['delivaryprocess'];
$delivarysystem=$_POST['delivarysystem'];
$paymentid=$_POST['paymentid'];

$message=$_POST['message'];
$useremail=$_SESSION['login'];
$status=0;
$vhid=$_GET['vhid'];
$sql="INSERT INTO  ultrabookings(userEmail,VehicleId,From_Name,To_Name,From_Address,FromDate,From_Contact_No,To_Contact_No,payment_Type,Payment_Category,Payment_ID,message,Status) VALUES(:useremail,:vhid,:fromname,:toname,:fromaddress,:fromdate,:fromcontactno,:tocontactno,:delivaryprocess,:delivarysystem,:paymentid,:message,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':useremail',$useremail,PDO::PARAM_STR);
$query->bindParam(':vhid',$vhid,PDO::PARAM_STR);
$query->bindParam(':fromname',$fromname,PDO::PARAM_STR);
$query->bindParam(':toname',$toname,PDO::PARAM_STR);
$query->bindParam(':fromaddress',$fromaddress,PDO::PARAM_STR);
$query->bindParam(':fromdate',$fromdate,PDO::PARAM_STR);
$query->bindParam(':fromcontactno',$fromcontactno,PDO::PARAM_STR);
$query->bindParam(':tocontactno',$tocontactno,PDO::PARAM_STR);
$query->bindParam(':delivaryprocess',$delivaryprocess,PDO::PARAM_STR);
$query->bindParam(':delivarysystem',$delivarysystem,PDO::PARAM_STR);
$query->bindParam(':paymentid',$paymentid,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);

$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Booking successfull.');</script>";
}
else
{
echo "<script>alert('Something went wrong. Please try again');</script>";
}

}

?>


<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="keywords" content="">
<meta name="description" content="">
<title>Emergency Courier Port | Delivary Details</title>
<!--Bootstrap -->
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css">
<!--Custome Style -->
<link rel="stylesheet" href="assets/css/styles.css" type="text/css">
<!--OWL Carousel slider-->
<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css">
<!--slick-slider -->
<link href="assets/css/slick.css" rel="stylesheet">
<!--bootstrap-slider -->
<link href="assets/css/bootstrap-slider.min.css" rel="stylesheet">
<!--FontAwesome Font Style -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet">

<!-- SWITCHER -->
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
</head>
<body>

<!-- Start Switcher -->
<?php include('includes/colorswitcher.php');?>
<!-- /Switcher -->

<!--Header-->
<?php include('includes/header.php');?>
<!-- /Header -->

<!--Listing-Image-Slider-->








      <!--Side-Bar-->
      <aside class="col-md-6">
<h1 style="text-align:center; color:gray">Ultra Delivery Service</h1>
<hr>
        <div class="share_vehicle">
          <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a> </p>
        </div>
        <div class="sidebar_widget">
          <div class="widget_heading">
            <h5><i class="fa fa-envelope" aria-hidden="true"></i>Add Parcel Now</h5>
          </div>
          <form method="post">
          <div class="form-group">
              <input type="text" class="form-control" name="fromname" placeholder="From Name" required>
            </div>
          <div class="form-group">
              <input type="text" class="form-control" name="toname" placeholder="To Name" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="fromaddress" placeholder="From Address" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="fromdate" placeholder="To Address" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="fromcontactno" placeholder="From Contact No" maxlength="11" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="tocontactno" placeholder="To Contact No" maxlength="11" required>
            </div>
           
            <div class="form-group">
              <!-- <textarea class="form-control"  placeholder="How would you like to take delivery?" required>
               -->
              <select class="form-control" name="delivaryprocess"  required>
<option Value = "Select">Select Delivary Type</option>

<option value="Cash On Delivary">Normal</option>
<option value="Cash On Delivary">Emergency</option>
<option value="Payment">Ultra Emergency</option>
</select>
</div>
<div class="form-group">
<select class="form-control" name="delivarysystem"  required>
<option Value = "Select">Select Payment Category</option>

<option value="Cash On Delivary">Cash On Delivary</option>
<option value="Bkash">Bkash</option>
<option value="Rocket">Rocket</option>
<option value="Doutch Bangla Bank">Doutch Bangla Bank</option>
<option value="Others">Others</option>

</select>
</div>
<div class="form-group">
              <input type="text" class="form-control" name="paymentid" placeholder="Enter payment ID/not enter 0" >
            </div>
<div class="form-group">
              <textarea rows="4" class="form-control" name="message" placeholder="Message"></textarea>
            </div>
              
              </textarea>
            </div>
          <?php if($_SESSION['login'])
              {?>
              <div class="form-group text-center">
                <input type="submit" class="btn"  name="submit" value="Submit">
              </div>
              <?php } else { ?>
<a href="#loginform" class="btn btn-xs uppercase" data-toggle="modal" data-dismiss="modal">Login For Delivery</a>

              <?php } ?>
          </form>
        </div>
      </aside>
      <!--/Side-Bar-->
    </div>

    <div class="space-20"></div>
    <div class="divider"></div>

    

  </div>
</section>
<!--/Listing-detail-->

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

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/interface.js"></script>
<script src="assets/switcher/js/switcher.js"></script>
<script src="assets/js/bootstrap-slider.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>

</body>
</html>
