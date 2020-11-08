<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>

<?php 
    include_once "header.php";
    include_once "classes/customer.php";
?>
<!signup procedure>
<?php
if(isset($_POST['usn']) && isset($_POST['pwd'])){   // check whether username and password is set
    if(strlen($_POST['usn'])==0 || strlen($_POST['pwd'])==0){   // chech whether username is valid and password is not null
        $errors=true;
    }else{
        include_once "dbconnect.php";
        switch($_POST['profile']){
            case 'customer':
                $sql = "SELECT * FROM customer WHERE c_userName='".$_POST['usn']."'";                            
                break;            
            case 'admin':
                $sql = "SELECT * FROM admin WHERE a_userName='".$_POST['usn']."'";
                print($sql);
                break;
        }
        $qry = $conn->query($sql);
        if($row = $qry->fetch_assoc()){
            $password = $row["pwd"];
            if(md5($_POST['pwd']) == $password){ 
                print("sdfghjkl");    // check whether password is matching
                switch($_POST['profile']){
                    case 'customer':
                        $customer = new Customer($_POST['usn']);
                        $customer->setMobile($row["c_contact"]);
                        $customer->setName($row['c_fullName']) ;
                        $customer->setEmail($row['c_email']) ;
                        $_SESSION['user'] = $customer;
                        $_SESSION['profile'] = 'customer';
                        header("Location:customer/profile.php?msg=signinsuccessful");                              
                        break;                  
                    case 'admin':
                        $_SESSION['user'] = unserialize($row["val"]);
                        $_SESSION['profile']='admin';
                        header("Location:admin/profile.php?msg=signinsuccessful");
                        break;
                }
                }else{
                    $errors=true;
                }
            }else{
                $errors=true;
            }
        }
    }
?> 

<!sign in form>   
<div class="middle_bar">
    <div class="login">
        <form action="signin.php" method="POST" >
            <fieldset>
                <legend align="center"><h1>Sign in</h1></legend><br>
                <?php if (isset($errors) && !empty($errors)) {echo '<p class="error"> Invalid Username / Password</p>';}?>
                <p>
                    <label for="">Username :</label>
                    <input id="u" type="text"  name="usn" maxlength="7" placeholder="Enter Username" autofocus 
                    value="<?php if(isset($_POST['usn'])){echo $_POST['usn'];}else{echo '';} ?>">
                </p>
                <p>
                    <label for="">Password :</label>
                    <input id="p" type="password"  name="pwd" maxlength="1023" placeholder="Enter Password">
                </p>
                <p>
                    <label>I am a/an :</label>
                    <select name="profile">
                        <option value="customer" selected>Customer</option>
                        <option value="admin">Admin</option>
                    </select>
                </p>
                <p>
                    <button type="submit" name="submit">Sign In</button><br>
                </p>
            </fieldset>
        </form>
    </div> 
</div>

<?php include "footer.php";?>

</body>
</html>
