<?php
session_start();
error_reporting(0);
    $id =  $_GET['eid'];

  //  $conn = mysqli_connect('localhost','eneedeic_ecs','123456','eneedeic_ecs');

   $conn = mysqli_connect('localhost','root','','ecs');


   $sql = "SELECT * FROM ultrabookings WHERE id = $id";
   $result = mysqli_query($conn,$sql);

   $std = mysqli_fetch_assoc($result);
  //  var_dump($std);

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Bokking Information</title>
  </head>
  <body>

<br><br><br>  
  
    <div class="container">
        <div class="row">
            <div class="col-md-3">
              <a class= "btn btn-info" href="ultra-booking.php">Back</a>

            </div>
            <div class="col-md-9">
            <h2>Bokking Information</h2>
                 <table class="table">
                   <tr>
                     <th width="100" class="text-right"> ID :  </th>
                     <td><?php echo $std['id']; ?></td>
                   </tr>
                   <tr>
                   <th width="100" class="text-right">user Email Address : </th>
                   <td><?php echo $std['userEmail']; ?></td>
                   </tr>
                   <tr>
                     <th width="100" class="text-right"> From Name :  </th>
                     <td><?php echo $std['From_Name']; ?></td>
                   </tr>
                   <tr>
                     <th width="100" class="text-right"> To Name :  </th>
                     <td><?php echo $std['To_Name']; ?></td>
                   </tr>
                   
                   <tr>
                   <th width="100" class="text-right">From Address : </th>
                   <td><?php echo $std['From_Address']; ?></td>
                   </tr>
                   <tr>
                   <th width="100" class="text-right">To Address : </th>
                   <td><?php echo $std['FromDate']; ?></td>
                   </tr>
                   <tr>
                   <th width="100" class="text-right">From Contact No : </th>
                   <td><?php echo $std['From_Contact_No']; ?></td>
                   </tr>
                   <tr>
                   <th width="100" class="text-right">To Contact No : </th>
                   <td><?php echo $std['To_Contact_No']; ?></td>
                   </tr>
                   <tr>
                     <th width="100" class="text-right"> Message :  </th>
                     <td><?php echo $std['message']; ?></td>
                   </tr>
                   
                   <tr>
                   <th width="100" class="text-right">Payment Type : </th>
                   <td><?php echo $std['payment_Type']; ?></td>
                   </tr>
                   <tr>
                   <th width="100" class="text-right">Payment ID : </th>
                   <td><?php echo $std['Payment_ID']; ?></td>
                   </tr>
                   <tr>
                   <th width="100" class="text-right">Payment Category : </th>
                   <td><?php echo $std['Payment_Category']; ?></td>
                   </tr>
                   <tr>
                   <th width="100" class="text-right">Posting Date : </th>
                   <td><?php echo $std['PostingDate']; ?></td>
                   </tr>
                 </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>