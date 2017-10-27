<?php
// This file is www.developphp.com curriculum material
// Written by Adam Khoury January 01, 2011
// http://www.youtube.com/view_play_list?p=442E340A42191003
// Connect to the MySQL database  

$connect=mysqli_connect('localhost','root','','shop');

$sqlCommand = "CREATE TABLE admin (
		 		 id int(11) NOT NULL auto_increment,
				 username varchar(24) NOT NULL,
		 		 password varchar(24) NOT NULL,
		 		 last_log_date date NOT NULL,
		 		 PRIMARY KEY (id),
		 		 UNIQUE KEY username (username)
		 		 ) ";
if (mysqli_query($connect,$sqlCommand)){ 
    echo "Your admin table has been created successfully!"; 
} else { 
    echo "CRITICAL ERROR: admin table has not been created.";
}
?>