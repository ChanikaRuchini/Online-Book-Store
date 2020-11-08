<?php 
    include_once "../classes/module.php";
    include_once "../classes/lecturer.php";
    session_start();
     include_once ("../dbconnect.php");
     $q="select * from stationary";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<style>

			table{padding:5px;border:50px solid gray}
			td,th{padding:15px}

		</style>
</head>
<body>
	<!-- start page -->
	<?php  
        if(isset($_GET['msg']) && $_GET['msg'] == 'deletedsuccessful'){echo "<script type='text/javascript'>alert(' One item Deleted Successfully!');</script>";}


	include_once "header.php";
       
            include_once "../footer.php";  ?>
      <div class="middle">
      	
         
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						<tr>
						<td colspan="7"><a href="addstationary.php">Add New Stationary</a></td>
						</tr>
						<tr>
<td WIDTH='25%' style="color:darkgreen"><b><u>NAME</u></b></td>
<TD style="color:darkgreen" WIDTH='25%'><b><u>Brand</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>PRICE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>IMAGE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></TD>				
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										
										<td>'.$row['s_nm'].'
										<td>'.$row['s_brand'].'
									
										<td>'.$row['s_price'];
				echo "<td><img src='../$row[s_img]' width='50'/>";
										
										
									echo 	'<td><a href="deleteStationay.php?sid='.$row['s_id'].'&path='.$row['s_img'].'"><img src="../imgs/drop.png" >



									</a>
												
									
									</tr>';
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			

		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
	<!-- end sidebar -->
	<div style="clear: both;">&nbsp;</div>
</div>
</div>
 </div>  
<!-- end page -->

</body>
</html>