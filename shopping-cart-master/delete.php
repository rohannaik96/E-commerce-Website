
<?php

 //create connection
 $connect=mysqli_connect('localhost','root','','shop');
	
//check connection
 if(mysqli_connect_errno($connect))
 {
	echo 'Failed to connect to database: '.mysqli_connect_error();
}



$result=mysqli_query($connect,"select * from cart");
	if( isset($_GET['del']) )
	{
		$id = $_GET['del'];
		$sql= "DELETE FROM cart WHERE id='$id'";
		
		echo "<meta http-equiv='refresh' content='0;url=ok1.php'>";
	}


 
?>