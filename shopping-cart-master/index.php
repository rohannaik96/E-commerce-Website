<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>

				
		
		
		
<!DOCTYPE html>
<html>
<head>
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


            <div class="collapse navbar-collapse " id="navbarExample">
                <ul class="navbar-nav ml-auto pull-right">
                    <li class="nav-item active">
                        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php" style="width:auto;">
						<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			
			
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
			
			
		<?php endif ?>
						
						</a>
                    </li>
                    <li class="nav-item"   style="width:auto;">
                        <a class="nav-link" href="login.php">
						<?php  if (isset($_SESSION['username'])) : ?>
			<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
			<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
		<?php endif ?></a>
                    </li>
                    <li class="nav-item">
                    <a href="cart.php">  <button type="button" class="btn btn-primary active"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</button> </a>   
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



				

				
				
				
				
<div class="container">

<?php 
// Run a select query to get my letest 6 items
// Connect to the MySQL database  
$connect=mysqli_connect('localhost','root','','ecom');
$dynamicList = "";
$sql = mysqli_query($connect,"SELECT * FROM products ");
$productCount = mysqli_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysqli_fetch_array($sql)){ 
             $id = $row["id"];
			 $product_name = $row["product_name"];
			 $price = $row["price"];
			 
			 $dynamicList .= 
			  '<div class="container">
 <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="col-item">
                                <div class="photo">
								<a href="product.php?id=' . $id . '">
                                    <img src="./images/index.jpg" class="img-responsive" alt="a" />
									</a>
                                </div>
                                <div class="info">
                                    <div class="row">
                                        <div class="price col-md-6">
                                            <h5>
                                                ' . $product_name . '</h5>
                                            <h5 class="price-text-color">
                                                $' . $price . '</h5>
                                        </div>
                                        <div class="rating hidden-sm col-md-6">
                                            <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                            </i><i class="fa fa-star"></i>
                                        </div>
                                    </div>
								
                                    <div class="separator clear-left">
                                       
                                        <p class="btn-details">
                                            <i class="fa fa-list"></i><a href="product.php?id=' . $id . '" class="hidden-sm">More details</a></p>
                                    </div>
                                    <div class="clearfix">
                                    </div>
                                </div>
                            </div>
                        </div>
</div>		
		</div>
		</div>
    </div				
			';
	 
    }
} else {
	$dynamicList = "We have no products listed in our store yet";
}
mysqli_close($connect);
?>
<?php echo $dynamicList; ?>
  </div>
  </div>
  </div>
<!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

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
                    <p><span>Maharashtra</span>  India</p>
                </div>

                <div>
                    <i class="fa fa-phone"></i>
                    <p>+91 9967077027</p>
                </div>

                <div>
                    <i class="fa fa-envelope"></i>
                    <p><a href="mailto:support@company.com">Contact@bookvilla.com</a></p>
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


     
    
</body>

</html>


		
