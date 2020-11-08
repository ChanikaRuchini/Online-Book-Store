<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>
            Contact Us
        </title>
        
    </head>
    <body>
        
        <?php include_once "header.php";?>
        <div class="middle">
       <div id="page">
          <!-- start content -->
          <div id="content">
            <div class="post">
              <h1 class="title">Viewcart</h1>
              <div class="entry">
            
              <pre><?php
              //  print_r($_SESSION);
              ?></pre>
            
              <form action="addtocart.php" method="POST">
              <table width="100%" border="0">
                <tr >
                  <Td> <b>No
                  <td> <b>Category
                  <td> <b>Product
                  <td> <b>Qty
                  <td> <b>Rate
                  <td> <b>Price
                  <td> <b>Delete
                </tr>
                <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
              
                <?php
           
                  $tot = 0;
                  $i = 1;
                  if(isset($_SESSION['cart']))
                  {

                  foreach($_SESSION['cart'] as $id=>$x)
                  { 
                    echo '
                      <tr>
                      <Td> '.$i.'
                      <td> '.$x['type'].'
                      <td> '.$x['nm'].'
                      <td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
                      <td> '.$x['rate'].'
                      <td> '.($x['qty']*$x['rate']).'
                      <td> <a href="process_cart.php?id='.$id.'">Delete</a>
                    </tr>
                    ';
                    
                    $tot = $tot + ($x['qty']*$x['rate']);
                    $i++;
                  }
                  }
                
                ?>
              <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
                
              <tr>
              <td colspan="6" align="right">
              <h4>Total:</h4>
              
              </td>
              <td> <h4><?php echo $tot; ?> </h4></td>
              </tr>
              <tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
              
              <Br>
                </table>            

                <br><br>
              <center>
              <input type="submit" value=" Re-Calculate " > 
              <a href="checkout.php?tot=<?php echo $tot ?> ">CONFIRM & PROCEED<a/>
                 </center>
              </form>
              </div>
              
            </div>
            
          </div>
          <!-- end content -->
          
        <div style="clear: both;">&nbsp;</div>
      </div>
      </div>
        <?php include_once "footer.php";?>
        
    </body>
</html>
