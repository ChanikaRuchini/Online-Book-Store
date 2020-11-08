<?php
    include_once ("../dbconnect.php");

			$query="delete from book where b_id =".$_GET['bid'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			$filename_with_extension = $_GET['path'];
			unlink( "../".$filename_with_extension );
			
			header("location:allbooks.php?msg=deletedsuccessfuls");

?>