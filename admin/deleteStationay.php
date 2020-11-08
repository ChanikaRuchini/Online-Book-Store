<?php
    include_once ("../dbconnect.php");

	$query="delete from stationary where s_id =".$_GET['sid'];
	print($query);
		
	mysqli_query($conn,$query) or die("can't Execute...");
	$filename_with_extension = $_GET['path'];
	unlink( "../".$filename_with_extension );
			
	header("location:allstationary.php?msg=deletedsuccessful");

?>
