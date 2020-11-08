<?php 
    include_once "classes/customer.php";
    session_start();
    	
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Settings</title>
        <style>
            label {
                padding: 12px 12px 12px 0;
                display: inline-block;
                box-sizing: border-box;
            }
            input, select, textarea {
                width: 85%;
                padding: 12px;
                border: 1px solid #ccc;
                border-radius: 4px;
                resize: vertical;
                float: right;
                box-sizing: border-box;
            }
            input[type=submit] {
                background-color: #4CAF50;
                color: white;
                padding: 12px 20px;
              	margin-top: 10px;
                margin-bottom: 50px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                font-size:16px;
                float: right;
                box-sizing: border-box;
            }
            input[type=submit]:hover {
                opacity: 0.8;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <?php
           // Session availability
            $student = $_SESSION['user'];
            $id = $student->getID();
            $date = date("Y-m-d") ;

            include_once "header.php";
            include_once "footer.php";
            include_once "dbconnect.php";
            $total_price=$_GET['tot'];
            $tot= floatval(str_replace(',', '.', $total_price));;

            if(isset($_POST['status'])){    // update data
                $student->setName($_POST['name']);
                $student->setMobile($_POST['mobile']);
                $student->setEmail($_POST['email']);
                $val = serialize($student);
                 $tot = 0;
                  $i = 1;
                  $success = TRUE;
                  if(isset($_SESSION['cart']))
                  {

                  foreach($_SESSION['cart'] as $id=>$x)
                  { 
                  	$type= $x['type'];
                  	$name = $x['nm'];
                  	$rate = $x['rate'];
                  	$quantity = $x['qty'];
                  	$price =($x['qty']*$x['rate']);
                  	  $sql ="INSERT INTO orders(customer_ID ,order_date,order_type,item_name,unit_price,quantity,total) VALUES ('$id','$date' , '$type','$name','$rate','$quantity','$price')";
                  	    if($conn->query($sql)===TRUE){
                  	    	$success= TRUE;
                  	    }
                  	    else{
                  	    	$success =FALSE;
                  	    	break;

                  	    }


                    $i++;
                  }
                  }
                 /* $sql ="INSERT INTO orders(customer_ID ,order_date,total_price) VALUES ('$id','$date' , '$tot')";*/
        if($success===TRUE){
        	unset($_SESSION['cart']);
        	
            header("Location:customer/profile.php?msg=Paymentsuccessful");
        } else {
            header("Location:index.php?msg=Paymentnotsuccessful");
        }
               /* $updatesql = "UPDATE students SET val='$val' WHERE id='$id'";
                $_SESSION['user'] = $student;

                $sql = "SELECT pwd FROM students WHERE id='".$id."'"; 
                $qry = $conn->query($sql);
                $row = $qry->fetch_assoc();
                $oldpwd = $row['pwd'];
                $newpwd = md5($_POST['pwd2']);

                if ($_POST['pwd2'] != "" && $oldpwd == md5($_POST['pwd1']) && $_POST['pwd2'] == $_POST['pwd3']){
                    $updatesql = "UPDATE students SET val='$val', pwd='$newpwd' WHERE id='$id'";
                    if($conn->query($updatesql)===TRUE){header("Location:profile.php?msg=updatesuccessful");}
                } else if ($_POST['pwd1'] == "" && $_POST['pwd2'] == "" && $_POST['pwd3'] == ""){
                    if($conn->query($updatesql)===TRUE){header("Location:profile.php?msg=updatesuccessful");}
                } else {
                    header("Location:editprofile.php?msg=updatenotsuccessful");
                }
                */
                
            }else{  // get data
                echo 
                    "<div class='middle'>
                  
                         <form action='checkout.php' method='POST'>
                            <br><br><br>   
                          <label>Total: </label><input type='text' name='name' value='".$total_price."'><br>
                            <label>Full Name: </label><input type='text' name='name' value='".$student->getName()."'><br>
                            <label>Email: </label><input type='email' name='email' value='".$student->getEmail()."'><br>
                            <label>Mobile: </label><input type='number' name='mobile' value='".$student->getMobile()."' maxlength='10'><br>
                           
                                <label>Street Adress: </label><input type='text' name='street' ><br>
                            <label>City: </label><input type='text' name='city'><br>
                              <label>District: </label><input type='text' name='district'><br>
                            <label>Postal Code: </label><input type='number' name='code'><br>
                               <label>Credit Card No: </label><input type='number' name='creditcard'><br>
                               <label>CCC: </label><input type='number' name='ccc'><br>
                            <input type='text' name='status' value='update' hidden>
                            <input type='submit' style='background-color:#123456;' value='Pay Now'><br><br>
                        </form>  <br><br><br>   
                      
                    </div>";
            }
        ?>
    </body>
</html>
