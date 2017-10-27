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
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/jquery.min.js"></script>

    <link href="vendor/bootstrap/css/style.css" type="text/css" rel="stylesheet">
    <link href="gavendor/bootstrap/css/ga.css" type="text/css" rel="stylesheet">
	
	
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

    <!-- Temporary navbar container fix -->
    <style>
	</head>
	
	<body>
	<div class="container">
	
	$result=mysqli_query($connect,"select * from cart ");


<h1>Employees</h1>
	<table width="500" cellpadding=5celspacing=5 border=1>
	<tr>

	<th> Name</th>
	<th>Price</th>
	<th>Offer</th>
	<th>img</th>
	</tr>
	<?php while($row=mysqli_fetch_array($result)):?>
	<tr>
	
	<td><?php echo $row['name'];?></td>
	<td><?php echo $row['price'];?></td>
	<td><?php echo $row['offer'];?></td>
	<td><?php echo $row['img'];?></td>
	</tr>
	<?php endwhile;?> 
	</table

</div>
<div>

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
</div>
     <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	</body>
	</html>