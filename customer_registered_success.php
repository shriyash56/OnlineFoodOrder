

<html>
<head>
  <!--
<link rel="stylesheet" href="css/bootstrap.css">
 <script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script> -->
</head>
<style>
    
/*--thank you pop starts here--*/
.thank-you-pop{
	width:100%;
 	padding:20px;
	text-align:center;
}
.thank-you-pop img{
	width:76px;
	height:auto;
	margin:0 auto;
	display:block;
	margin-bottom:25px;
}

.thank-you-pop h1{
	font-size: 42px;
    margin-bottom: 25px;
	color:#5C5C5C;
}
.thank-you-pop p{
	font-size: 20px;
    margin-bottom: 27px;
 	color:#5C5C5C;
}

.thank-you-pop a{
	display: inline-block;
    margin: 0 auto;
    padding: 9px 20px;
    color: #fff;
    text-transform: uppercase;
    font-size: 14px;
    background-color: #8BC34A;
    border-radius: 17px;
}
.thank-you-pop a i{
	margin-right:5px;
	color:#fff;
}
#ignismyModal {
    border:0px;
}

/*--thank you pop ends here--*/

.close {
  position: absolute;
  left: 32px;
  top: 32px;
  width: 32px;
  height: 32px;
  opacity: 0.3;
}
.close:hover {
  opacity: 1;
}
.close:before, .close:after {
  position: absolute;
  left: 15px;
  content: ' ';
  height: 33px;
  width: 2px;
  background-color: #333;
}
.close:before {
  transform: rotate(45deg);
}
.close:after {
  transform: rotate(-45deg);
}

#bg{
  background-repeat: no-repeat;
  background-size: cover;
}

#button{
  position:absolute;
  top:270px;
  left:600px;
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
#button1{
  position:absolute;
  top:270px;
  left:600px;
  background-color: #f32013;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
<body id="bg">
<?php

require 'connection.php';
$conn = Connect();
$e="";
$fullname = $conn->real_escape_string($_POST['fullname']);
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$contact = $conn->real_escape_string($_POST['contact']);
$address = $conn->real_escape_string($_POST['address']);
$p = $conn->real_escape_string($_POST['password']);
$result = substr($username, 0, 5);
$password=md5($p);
if($result=="@dmin"){
  $query = "INSERT into MANAGER(fullname,username,email,contact,address,password) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address ."','" . $password ."')";
}
else{
  $query = "INSERT into CUSTOMER(fullname,username,email,contact,address,password) VALUES('" . $fullname . "','" . $username . "','" . $email . "','" . $contact . "','" . $address ."','" . $password ."')";
}
$success = $conn->query($query);

if (!$success){
  $e="error";
}
else{
  $conn->close();

}
?>

<div class="container" >

       <form role="form" action="login.php" method="POST">
          <!-- <div class="modal-body"> -->
            <div class="thank-you-pop">

            <?php
                if($e!="error"){
                ?>
                <button type="submit" class="btn btn-default btn-sm" id="button">
          <span class="glyphicon glyphicon-ok"></span> Ok 
        </button>
                <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                <h1>Thank You For Registration!</h1>
                </div>
                         </form>
               </div>
               
                   </body>
               </html>
              <?php
                }
                if($e=="error"&&$username==$password){
              ?>
              <button type="submit" class="btn btn-default btn-sm" id="button1">
          <span class="glyphicon glyphicon-ok"></span> Ok 
        </button>
              <img src="img/close.jpg">
              <h2>Username and Password is matched, please enter different password<h2>
              <?php
                }
                 if($e=="error"){
              ?>
              <button type="submit" class="btn btn-default btn-sm" id="button1">
          <span class="glyphicon glyphicon-ok"></span> Ok 
        </button>
              <img src="img/close.jpg">
              <h2>Username is already exists</h2>
              
              <?php  
                }
              ?>