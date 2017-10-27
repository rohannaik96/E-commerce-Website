
<?php
session_start();
?>
<?php
$database="shop"; //database name

    $con = mysqli_connect("localhost","root" ,"",$database);//for wamp 3rd feild is balnk
    if (!$con)
    {
    die('Could not connect: ' . mysqli_error());
    }
    mysqli_select_db( $con,"$database");

$name=$_REQUEST["name"];

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star JCING</title>

    <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/jquery.min.js"></script>

	<link href="style.css" type="text/css" rel="stylesheet">
    <link href="ga.css" type="text/css" rel="stylesheet">
    <style type="text/css">


.view1 {
    background-color:#fff;
    height:550px;
     margin:0px;  1
    width:412px;
    float:left;
        
}
body{
  background-color:#99ffff;
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
input[type=submit].input:hover{
    opacity:0.8;
    background-color: green;
}
h1.h1{
  
  padding:0px;
  margin:0px;
  color:#000099;
}
h2.h2{
  padding:0px;
  margin:0px;
  color:#ff0000;
}
</style>
</head>
<body>







$sql = "SELECT * from `novels` where (name='$name')";
$result= mysqli_query($con,$sql) ;
while ($shop=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
    


echo"
<div style='margin-top:60px;'>
</div>
<div class='img2'>

<div class='col-12 col-m-12' style='margin:0px;padding:0px; background-color:#99ffff;'>
<div class='col-2 col-m-2'>
</div>
<div class='col-9 col-m-9' style='border-style: solid;border-color:pink;margin:0px;padding:0px; background-color:#fff'>
<div class='view1' style='text-align:center;'>
<a href='".$shop['img']."'>
<img ";
echo" src='".$shop['img']."' width='412px' height='400px' style='margin:5px;border-style:solid;border-width:thin;border-color:yellow;' > </a>
  <center><a href='#'><img src='".$shop['img']."' width='100px' height='100px'  style='margin:10px;border-style:solid;border-width:thin;border-color:black;'> </a>
  

</div>

<div class='view2' style=' background-color:#fff; padding:15px; '>
<h1 class='h1'>".$shop['name']."</h1>
<br>
<h2 class='h2'>Price :".$shop['price']."</h2>
<br>
<p style='padding:0px;margin:0px;color:#ff3300;'>Shipping Charges : 100Rs.
</p>
<hr style='padding:0px;margin:0px;'>

<br>
<p style='padding:0px;margin:0px;'>Specification:<br>
  Mug, 71 gms chocolate bag and message tag
</p>
<br>

<p style='padding:0px;margin:0px;'>Description :<br>
  Let your dear one be surprised in a unique way on their special day as you gift her or him this birthday hamper. A perfect way to make the big day special for her or him, this hamper includes a smileys mug, 71 gms chocolate bag and a tag with your message. 
</p>
<br>
<form style='padding:0px;margin:0px;'>
 Quantity :  <input type='number' name='quantity' min='1' max='50'>
</form>
<br>
<br>

<br>

<br>
<a href='buy.php' style='padding:6px; float:right; '>
 <input type='submit'class='input' name='BUY NOW' value='buy now' style:'padding:6px; float:right;'>
</a>
</div>
</div>


</div>

</div>";
}






?>
</body>
</html>