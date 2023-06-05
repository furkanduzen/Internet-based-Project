<?php
ob_start();
error_reporting(0);
session_start();

require_once("db_connection.php"); 

		
session_start();
session_unset();
session_destroy(); 
echo '<meta http-equiv="refresh" content="0;URL=../index.php">';
			
    
 mysqli_close($conn); 
 ob_end_flush();exit();?>