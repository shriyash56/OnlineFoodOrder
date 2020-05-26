
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
  
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    
    <style>

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('img/bg3.jpg');
background-size: 100% 100%;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 500px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}
.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
.card-footer{
position: absolute;
top: 450px;
left: 80px;
}
button{
	position: absolute;
	left: 290px;
}



    </style>

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Create Account</h3>
			</div>
			<form role="form" action="customer_registered_success.php" method="POST">
			<div class="card-body">
					<div class="input-group form-group">
						<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-users"></i></span>
						</div>
						<input class="form-control" id="fullname" type="text" name="fullname" placeholder="Your Full Name" required="" autofocus="">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input class="form-control" id="username" type="text" name="username" placeholder="Your Username" required="">
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input class="form-control" id="email" type="email" name="email" placeholder="Email" required="">
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-address-book"></i></span>
						</div>
						<input class="form-control" id="contact" type="text" name="contact" placeholder="Contact" required="" pattern="^[2-9]{2}[0-9]{8}">
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-map-marked-alt"></i></span>
						</div>
						<input class="form-control" id="address" type="text" name="address" placeholder="Address" required="">
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
						<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input class="form-control" id="password" type="password" name="password" placeholder="Password" required="">
					</div>
					<div class="form-group">						
						<button class="btn btn-success" id="butt" type="submit">Submit</button>
					</div>
			


			</div>
			<div class="card-footer" id="footer">
				<div class="d-flex justify-content-center links">
					Have an account?<a href="login.php">Login</a>
				</div>
			</div>
			</form>





		</div>
	</div>
</div>
</body>
</html>