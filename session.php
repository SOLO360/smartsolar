<?php
session_start();
$a = '';
if(!(isset($_SESSION['user']))){
    echo "please login";
    header("refresh:2; url=index.php");
    die();
  }else {
  	 $now = time();
 // checking the time now when home page starts

    if($now > $_SESSION['expire'])

    {?>
    	<!DOCTYPE html>
    	<html>
    	<head>
    		<meta charset="utf-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<title></title>
    		<link rel="stylesheet" href="css/sb-admin.min.css">
    	</head>
    	<body>
    		<?php 
    			echo'<div class="alert alert-danger"><a class="close" aria-label="close" data-dismiss="alert">&times;</a>Your Session Has Ended</div>';
        header("refresh:1 , url=logout.php");

         ?>
    	</body>
    	</html>
 <?php        
    }else{
		 $conn=mysqli_connect('localhost', 'root', 'solo360', 'smartsolar') or die("cant connect!!!");
		$sql = "SELECT * FROM staff where username = '".$_SESSION['user']."'";
		$run = mysqli_query($conn,$sql);
		$fetch = mysqli_fetch_assoc($run);
	}
}
?>


