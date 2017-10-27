<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/jquery.min.js"></script>

    <link href="vendor/bootstrap/css/style.css" type="text/css" rel="stylesheet">
    <link href="gavendor/bootstrap/css/ga.css" type="text/css" rel="stylesheet">
	


<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" />
	
	
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Start Shopping Books</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">


    
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    
    

    <!-- Temporary navbar container fix -->
    <style>
	#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}


	
div.footer-style{
    font: arial;
    color: white;
}
.navbar-collapse {
padding-right:-20px;

}
.navbar{
margin-bottom:-14px;
}
.margin{
margin-top:1x;
}
        .navbar-nav > li{
  margin-left:20px;
  margin-right:20px;
}

        .ss{
            width: 300px;
            height: 100px;
        }
        
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    /* Temporary fix for img-fluid sizing within the carousel */
    
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    </style>


  	
	</head>
<body>
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script type="text/javascript" src="js/slide.js"></script>
   
    



	
	
	   <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container">
        <img src="./images/logo.png" alt="logo" height="65" width="60">
            <a class="navbar-brand" href="main.php">Book's Villa</a>


</div>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search " title="Type in a name" style="width:550px";/>

            <div class="collapse navbar-collapse " id="navbarExample">
                <ul class="navbar-nav ml-auto pull-right">
                    <li class="nav-item active">
                        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php" style="width:auto;">Sign Up</a>
                    </li>
                    <li class="nav-item"   style="width:auto;">
                        <a class="nav-link" href="login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                    <a href="cart.php">  <button type="button" class="btn btn-primary active"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button> </a>   
                    </li>
                </ul>
            </div>
        </div>
    </nav>

	

	<div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
		<p>
			Not yet a member? <a href="register.php">Sign up</a>
		</p>
	</form>


</body>
</html>