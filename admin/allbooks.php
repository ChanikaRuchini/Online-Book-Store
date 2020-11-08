<?php 
    include_once "../classes/module.php";
    include_once "../classes/lecturer.php";
    session_start();
     include_once ("../dbconnect.php");
     $q="select * from book";
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
	<?php  include_once "header.php";
	 if(isset($_GET['msg']) && $_GET['msg'] == 'deletedsuccessful'){echo "<script type='text/javascript'>alert(' One item Deleted Successfully!');</script>";}

       
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
						<td colspan="7"><a href="addbook.php">Add New Book</a></td>
						</tr>
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>SR.NO</u></b></td>
<TD style="color:darkgreen" WIDTH='50%'><b><u>NAME</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>PUBLISHER</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>ISBN</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>PRICE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>IMAGE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></TD>				
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$count.'
										<td>'.$row['b_nm'].'
										<td>'.$row['b_publisher'].'
										<td>'.$row['b_isbn'].'
										<td>'.$row['b_price'];
				echo "<td><img src='../$row[b_img]' width='50'/>";
										
										
									echo 	'<td><a href="deletebook.php?bid='.$row['b_id'].'&path='.$row['b_img'].'"><img src="../imgs/drop.png" ></a>
												
									
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