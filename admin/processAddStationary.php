<?php
 include_once ("../dbconnect.php");

	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['name']) || empty($_POST['brand']) || empty($_POST['price']))
		{
			$msg[]="Please full fill all requirement";
		}
		if(!(is_numeric($_POST['price'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		
		
		if(empty($_FILES['img']['name']))
		$msg[] = "Please provide a file";
	
		if($_FILES['img']['error']>0)
		$msg[] = "Error uploading file";
		
				
		if(!(strtoupper(substr($_FILES['img']['name'],-4))==".JPG" || strtoupper(substr($_FILES['img']['name'],-5))==".JPEG"|| strtoupper(substr($_FILES['img']['name'],-4))==".GIF"))
			$msg[] = "wrong file  type";
			
		if(file_exists("../upload_image/".$_FILES['img']['name']))
			$msg[] = "File already uploaded. Please do not updated with same name";
		
		
	
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			move_uploaded_file($_FILES['img']['tmp_name'],"../upload_image/".$_FILES['img']['name']);
			$s_img = "upload_image/".$_FILES['img']['name'];	
			
			$s_nm=$_POST['name'];		
			$s_brand=$_POST['brand'];		
			$s_price=$_POST['price'];
			
			
		
			
			$query="insert into stationary(s_nm,s_brand,s_price,s_img)
			values('$s_nm','$s_brand',$s_price,'$s_img')";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:addstationary.php?msg=addedsuccessfull");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	