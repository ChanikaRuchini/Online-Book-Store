<?php 

    session_start();
     include_once ("../dbconnect.php");
     $q="select * from orders where order_type= 'Book'";
	 $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
	 $tot = 0;

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	
		<link rel="stylesheet" type="text/css" href="../css/styles.css">
	<style>

			table{padding:5px;margin-top: 20px;,border:50px solid gray}
			td,th{padding:15px}

		</style>
</head>
<body>
	<!-- start page -->
	<?php  include_once "header.php";
       
            include_once "../footer.php";  ?>
      <div class="middle">
      	
         
<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title">Books Summary</h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						<tr>
						
						</tr>
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>Order ID</u></b></td>
<TD style="color:darkgreen" WIDTH='25%'><b><u>Order type</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>Customer Name</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>Order Date</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>Item Name</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>Unit Price</u></b></TD>
<TD style="color:darkgreen" WIDTH='20%'><b><u>Quantiy</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>Total</u></b></TD>
<!-- <TD style="color:darkgreen" WIDTH='25%'><b><u>IMAGE</u></b></TD>
<TD style="color:darkgreen" WIDTH='25%'><b><u>DELETE</u></b></TD>	 -->			
							
						</tr>
						<?php
							$count=1;
							
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										
										<td>'.$row['order_ID'].'
										<td>'.$row['order_type'].'
										<td>'.$row['customer_ID'].'
										<td>'.$row['order_date'].'
										<td>'.$row['item_name'].'
										<td>'.$row['unit_price'].'
										<td>'.$row['quantity'].'
										<td>'.$row['total'].'
									
									</tr>';
									$tot = $tot + $row['total'];
									$count++;
							}
						?>
  <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
                
              <tr>
              <td colspan="7" align="right">
              <h4>Total:</h4>
              
              </td>
              <td> <h4><?php echo $tot; ?> </h4></td>
              </tr>
              <tr><td colspan="8"><hr style="border:1px Solid #a1a1a1;"></tr>
              
              <Br>
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