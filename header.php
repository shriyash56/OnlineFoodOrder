<!Doctype html>
<html>
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
</head>
<!-- <style>
    #text:hover {
    text-shadow: 0 2px 0 #d84f4f, 0 4px 0 #d54646, 0 6px 0 #ce3333, 0 8px 0 #b92e2e, 0 10px 0 #912525, 0 12px 0 #721e1e, 0px 12px 10px rgba(0,0,0,0.5);
    top: -12px;
}
</style> -->
<body>
    
    <header role="banner">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class="container">
          <a class="navbar-brand" href="index.php">Royal</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarsExample05">
            <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
              <li class="nav-item">
                <a class="nav-link" id="text" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="recipes.php">Recipes</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="services.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
                <div class="dropdown-menu" aria-labelledby="dropdown04">
                  <a class="dropdown-item" href="services.php">Online Order</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>

 <?php
 session_start();
if (isset($_SESSION['login_user2']) && $_SESSION['loggedin'] == true ) {
?>
              <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart(<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>) </a>
              </li>
<?php
}
?>
            </ul>

            <?php
            
if (isset($_SESSION['login_user2']) && $_SESSION['loggedin'] == true || isset($_SESSION['login_user1']) ) {
?>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="logout_u.php">Logout</a>
              </li>
            </ul>
<?php
}
            else{
  ?>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item cta-btn">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
  <?php
            }
    ?>
            
          </div>
        </div>
      </nav>
    </header>
    <!-- END header -->
    


</body>
</html>