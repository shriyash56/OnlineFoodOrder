<?php
include('header.php');
include('session_m.php');
if(!isset($login_session)){
header('Location: login.php'); // Redirecting To Home Page
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Royal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/magnific-popup.css">


    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript">
    function display_alert()
    {
      alert("Data Updated Successfully...!!!");
    }
  </script>
  </head>
  <body>
     
  <div class="slider-wrap">
      <section class="home-slider owl-carousel">


        <div class="slider-item" style="background-image: url('img/hero_1.jpg');">
          
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">The flavors of nature.</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Deliciousness jumping into the mouth.</p>
                <p data-aos="fade-up" data-aos-delay="200"></p>
              </div>
            </div>
          </div>

        </div>

        <div class="slider-item" style="background-image: url('img/hero_2.jpg');">
          <div class="container">
            <div class="row slider-text align-items-center justify-content-center">
              <div class="col-md-8 text-center col-sm-12 ">
                <h1 data-aos="fade-up">An oasis of pleasure</h1>
                <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Deliciousness jumping into the mouth.</p>
                <p data-aos="fade-up" data-aos-delay="200">
			</p>
              </div>
            </div>
          </div>
          
        </div>

      </section>
    <!-- END slider -->


</div>




<section class="section bg-light pt-0 bottom-slant-gray">



<div class="container">
    <div class="jumbotron">
     <h1>Hello Manager! </h1>
     <p>Manage all your restaurant from here</p>

    </div>
    </div>
<div class="container">
    <div class="container">
    	<div class="col">
    		
    	</div>
    </div>

    
    	<div class="col-xs-3" style="text-align: center;">

    	<div class="list-group">
    		<a href="myrestaurant.php" class="list-group-item active">My Restaurant</a>
    		<a href="view_food_items.php" class="list-group-item ">View Food Items</a>
    		<a href="add_food_items.php" class="list-group-item ">Add Food Items</a>
    		<a href="edit_food_items.php" class="list-group-item ">Edit Food Items</a>
    		<a href="delete_food_items.php" class="list-group-item ">Delete Food Items</a>
    	</div>
    </div>


    <div class="col-xs-3">

<div class="form-area" style="padding: 10px 10px 110px 10px; ">

  <div style="text-align: center;">
    <h3>Click On Menu <br><br></h3>
  </div>
  <?php
 


  if (isset($_GET['submit'])) {
  $F_ID = $_GET['dfid'];
  $name = $_GET['dname'];
  $price = $_GET['dprice'];
  $description = $_GET['ddescription'];


  $query = mysqli_query($conn, "UPDATE food set
  name='$name', price='$price',
  description='$description' where F_ID='$F_ID'");
  }
  $query = mysqli_query($conn, "SELECT * FROM food f WHERE f.R_ID IN (SELECT r.R_ID FROM RESTAURANTS r WHERE r.M_ID='$user_check') ORDER BY F_ID");
  while ($row = mysqli_fetch_array($query)) {

    ?>

    <div class="list-group" style="text-align: center;">
      <?php
    echo "<b><a href='edit_food_items.php?update= {$row['F_ID']}'>{$row['name']}</a></b>";  
      ?>
    </div>


  <?php
  }
  ?>
  

  <?php
  if (isset($_GET['update'])) {
  $update = $_GET['update'];
  $query1 = mysqli_query($conn, "SELECT * FROM food WHERE F_ID=$update");
  while ($row1 = mysqli_fetch_array($query1)) {

  ?>
</div>
</div>



<div class="container">
<div class="col-md-6">
<div class="form-area" style="padding: 0px 100px 100px 100px;">
      <form action="edit_food_items.php" method="GET">
      <br style="clear: both">
        <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> EDIT YOUR FOOD ITEMS HERE </h3>

        <div class="form-group">
          <input class='input' type='hidden' name="dfid" value=<?php echo $row1['F_ID'];  ?> />
        </div>

        <div class="form-group">
          <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Name: </label>
          <input type="text" class="form-control" id="dname" name="dname" value=<?php echo $row1['name'];  ?> placeholder="Your Food name" required="">
        </div>     

        <div class="form-group">
          <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Price: </label>
          <input type="text" class="form-control" id="dprice" name="dprice" value=<?php echo $row1['price'];  ?> placeholder="Your Food Price (INR)" required="">
        </div>

        <div class="form-group">
          <label for="username"><span class="text-danger" style="margin-right: 5px;">*</span> Food Description: </label>
          <input type="text" class="form-control" id="ddescription" name="ddescription" value=<?php echo $row1['description'];  ?> placeholder="Your Food Description" required="">
        </div>

        <div class="form-group">
        <button type="submit" id="submit" name="submit" class="btn btn-primary pull-right" onclick="display_alert()" value="Display alert box" > Update </button>    
    </div>
      </form>


  <?php
}
}
?>    
</div>
</div>
<?php
mysqli_close($conn);
?>
</div>
</div>
</section>
<br><br><br><br>

  
<footer class="site-footer" role="contentinfo">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mb-5">
            <h3>About Us</h3>
            <p class="mb-5">We are group of friends who started this cafe to make a meet up spot for all the group of friends who want to hangout at some place with a quality food and a perfect ambiance to spend time .</p>            <ul class="list-unstyled footer-link d-flex footer-social">
              <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
            </ul>

          </div>
          <div class="col-md-5 mb-5">
            <div class="mb-5">
              <h3>Opening Hours</h3>
              <p><strong class="d-block font-weight-normal text-black">Everyday</strong> 10AM - 10PM</p>
            </div>
            <div>
              <h3>Contact Info</h3>
              <ul class="list-unstyled footer-link">
                <li class="d-block">
                  <span class="d-block text-black">Address:</span>
                  <span>Xyz Road,Nashik-13</span></li>
                  <li class="d-block"><span class="d-block text-black">Phone:</span><span>+91 1234567890</span></li>
                  <li class="d-block"><span class="d-block text-black">Email:</span><span>abc@xyz.com</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <h3>Quick Links</h3>
            <ul class="list-unstyled footer-link">
              <li><a href="#">About</a></li>
              <li><a href="#">Terms of Use</a></li>
              <li><a href="#">Disclaimers</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </div>
          <div class="col-md-3">
          
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-md-center text-left">
            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
            </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- END footer -->


    <!-- loader -->
    <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#cf1d16"/></svg></div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/magnific-popup-options.js"></script>
    

    <script src="js/main.js"></script>
          </div>
  </body>
</html>