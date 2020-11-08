<?php session_start();

	if(isset($_GET['nm']) and isset($_GET['rate']) and isset($_GET['type']))
	{
		//add item
		$_SESSION['cart'][] = array("nm"=>$_GET['nm'],"cat"=>$_GET['cat'],"rate"=>$_GET['rate'],"qty"=>"1", "type" => $_GET['type']);
		header("location: viewcart.php");
	}
	else if(isset($_GET['id']))
	{
		//del a item
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location: viewcart.php");
	}
	else if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location: viewcart.php");
		}
	}


?>