<?php session_start();

   
     include_once ("dbconnect.php");
	 include_once "header.php";
       include_once "footer.php";
	
	$id=$_GET['id'];
	$type = "book";
	
	$q="select * from stationary where s_id=$id";
	
	$res=mysqli_query($conn,$q) or die("Can't Execute Query..");
	$row=mysqli_fetch_assoc($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link rel="stylesheet" href="lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
    <script type="text/javascript" src="js/java.js"></script>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
		

<body>
			
		
			<!-- start page -->
			<div class="middle">

				<div id="page">
						<!-- start content -->
							<div id="content">
								<div class="post">
									<h1 class="title"><?php echo $row['s_nm'];?></h1>
									<div class="entry">
										<?php
										
											echo '	<table border= "0px" PDF_set_border_color(#19334d) width="100%">
												 <tr>
													<td><hr color="#19334d"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Item Details</td>
												</tr>
												<tr>
													<td><hr color="#19334d"></td>
												</tr>
											 </table>
											
											<table border="0"  width="100%" bgcolor="#d4d4d4">
												<tr> 
													
													<td width="15%" rowspan="3">
														<img src="'.$row['s_img'].'" width="100">
													
													</td>
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">NAME</td>
																<td width="6%">: </td>
																<td align="left">'.$row['s_nm'].'</td>
															</tr>

															
															<tr>
																<td align="right">ISBN</td>
																<td>: </td>
																<td align="left">'.$row['s_brand'].'</td>
																
															</tr>
															
																					
														
															<tr>
																<td align="right"> PRICE</td>
																<td>: </td>
																<td align="left">'.$row['s_price'].'</td>
															</tr>
														</table>
										
														
													</td>
												</tr>
											</table>
										
												<tr valign="bottom" >
												
														
													
												</tr>
											
											<table border="0" width="100%">
												 <tr>
													<td><hr color="#19334d"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>DESCRIPTION</td>
												</tr>
												<tr>
													<td><hr color="#19334d"></td>
												</tr>
																		
											 </table>
											 
											 																				

											 
											 <tr><td colspan=2><hr color="#19334d"></td></tr>
											
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EEE9F3">';
												 
												 if(isset($_SESSION['user']))
												 {
													echo ' <td><a href="addtocart.php?nm='.$row['s_nm'].'&rate='.$row['s_price'].'&type=Stationary">
														<img src="imgs/addcart.jpg">
													</a></td>';
												}
												else
												{
													echo '<td><img src="imgs/addcart.jpg"><br><a href="signin.php"> <h4>Please Login..</h4></a></td>';
												}
												echo '</tr>
											</table>';
										?>
									</div>
				
								</div>
			
							</div>
						<!-- end content -->
							
								<div style="clear: both;">&nbsp;</div>
				
				</div> 
			<!-- end page -->
			</div>
				</body>
</html>
