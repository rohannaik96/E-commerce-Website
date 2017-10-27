<?php
session_start();
$database="shop"; //database name

    $con = mysqli_connect("localhost","root" ,"",$database);//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db( $con,"$database");
?>




<!DOCTYPE html>
<html lang="en">

<head>

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
    
    <link href="vendor/bootstrap/css/form.css" rel="stylesheet">
	
	
	   <style type="text/css">
  p.p::first-letter{
    color:red;
    font-size: 35px;
    font-family: AR BERKLEY;
  }
  p.p{
    color: purple;
    font-size: 30px;
  }

   div.img1 {
    margin: 5px;
    padding: 0px;
    border: 1px solid blue;
    height: auto;
    width: auto;
    text-align: center;
    position: relative;
    float: left;
    z-index: 0;
    margin-left:60px;
    margin-top:50px;
   
    text-align: center;
} 


div.img1 img {
    display: inline;
    margin: 0px;
    padding:20px;
    width: 250px;
    height:300px;
    border: 1px solid #F0F0F0;;
}


div.img1 a:hover img {
    border: 1px solid #fff;
    opacity: 0.8;
    background-color: pink;
}

div.desc {
 background-color: #fff;
  text-align: center;
  font-weight: normal;
  width: 250px;
  height:60px;
  padding:10px;
   margin: 0px;
}

div.desc1 {
 background-color: #fff;
  text-align: center;
  font-weight: normal;
  width: 250px;
  height:auto;
   padding:5px;
   margin: 0px;
   margin-bottom: 0px;
}


table{
  margin-top: 0px;
}





.view1 {
    background-color:#fff;
    height:550px;
     margin:0px;  1
    width:412px;
    float:left;
        
}
.view2 {
    width:470px;
    height:550px;
    float:left;
    padding:0px;
    margin:0px;    
}

input[type=submit].input {
    width: 100px;  
    background-color: red;
    color: white;
    border-radius: 10px;
    height: 50px;
}
input[type=submit].input1 {
    width: 100px;  
    background-color: purple;
    color: white;
   text-align: center;
    border-radius: 20px;
    height: 30px;
}
input[type=submit].input1:hover{
    opacity:0.8;
    background-color: green;
}
h1.h1{
  
  padding:0px;
  margin:0px;
}
h2.h2{
  padding:0px;
  margin:0px;
}
    </style>
    <script>
$(document).ready(function(){
     $(".img2").hide();
    $(".img1").show();

    $('.img1').click(function(){
    $(this).next(".img2").slideToggle();
    });
});
</script>


    <!-- Temporary navbar container fix -->
    <style>
div.footer-style{
    font: arial;
    color: white;
}
.navbar-collapse {
padding-right:0px;

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

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="container">
        <img src="./images/logo.png" alt="logo" height="65" width="60">
            <a class="navbar-brand" href="##">Book's Villa</a>


</div>
            <div class="collapse navbar-collapse " id="navbarExample">
                <ul class="navbar-nav ml-auto pull-right">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
                    <a href="">  <button type="button" class="btn btn-primary active"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button> </a>   
                    </li>
                </ul>
            </div>
        </div>
    </nav>

   <!-- Page Content -->
    <div class="container-fluid margin">
                <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner " role="listbox">
                        <div class="carousel-item active">
                            <img class="img-responsive" class="slide 1" img src="./images/GOT.jpg" alt="First slide" style="width: 1500px;height: 550px;">
                        </div>
                        <div class="carousel-item">
                            <img class="img-responsive" class="slide 2"  img src="./images/shadowhunters.jpg" alt="Second slide" style="width: 1500px;height: 550px;">
                        </div>
                        <div class="carousel-item">
                            <img class="img-responsive" class="slide 3" img src="./images/The-Fault-in-Our-Stars-HD-Wallpapers.jpeg" alt="Third slide" style="width: 1500px;height: 550px;">
                        </div>
                        <div class="carousel-item">
                            <img class="img-responsive" class="slide 3" img src="./images/13reasons.jpg" alt="Fourth slide" style="width: 1500px;height: 550px;">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>
    

    
    
    
    
    
    <!-- Footer -->
    <footer class="footer-distributed">

            <div class="footer-left">

                <h3><img src="./images/logo.png" height="65" width="65">Book Villa</h3>

                <p class="footer-links">
                    <a href="#">Home</a>
                    ·
                    <a href="#">Contact</a>
                    ·
                    <a href="#">Sign Up</a>
                    ·
                    <a href="#">About</a>
                    ·
                    
                </p>

                <p class="footer-company-name">Book Villa &copy; 2017</p>
            </div>

            <div class="footer-center">

                <div>
                    <i class="fa fa-map-marker"></i>
                    <p><span>Kalva</span> Thane, India</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+91 9967077027</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">rohan@naik.com</a></p>
                </div>

            </div>

            <div class="footer-right">

                <p class="footer-company-about">
                    <span>About the company</span>
                    Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>

                <div class="footer-icons">

                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="https://twitter.com/login"><i class="fa fa-twitter"></i></a>
                    <a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                    <a href="https://github.com/"><i class="fa fa-github"></i></a>

                </div>

            </div>

        </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
