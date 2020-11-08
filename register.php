<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
<?php 
    if(isset($_GET['msg']) && $_GET['msg'] == 'signupsuccessful'){echo "<script type='text/javascript'>alert('Add member successful!');</script>";}
    include_once "header.php";
    include_once "footer.php";
?>
<!signup procedure>
<?php
    
    include "classes/admin.php";
    include "classes/customer.php";
    if(isset($_POST['un']) && isset($_POST['fn'])){
        if( $_POST['p1']!=$_POST['p2']){    // check whether entered passwords are matching
            $_POST = array();
            header("Location:register.php?err=passwordsdonotmatch");
        }else{
            if(strlen($_POST['un'])==0){    // check whether index number is valid
                $_POST = array();
                header("Location:register.php?err=invalidindexnumber");
            }else{
                include_once "dbconnect.php";
                $un=$_POST['un'];
                $fn=$_POST['fn'];
                $em=$_POST['em'];
                $mo=$_POST['mo'];

                $pd=md5($_POST['p1']);
                    $sql = "SELECT c_userName FROM customer WHERE c_userName='".$_POST['un']."'";
                    $qry = $conn->query($sql);
                    if($qry->num_rows>0){   // check whether already a user or not
                        $_POST = array();
                        header("Location:register.php?err=usernamealreadyexists");
                    }else{
                        
                        $sql = "INSERT INTO customer(c_fullname, c_userName, c_pwd,c_email,c_contact) VALUES ('$fn','$un', '$pd', '$em', '$mo')";
                        if($conn->query($sql)===TRUE){ header("Location:customer/profile.php?msg=signupsuccessful");}
                    }
                }
                                                   
            
        }
    }
?>

<!signup form>
<div class="middle">
<div class="login"><br><br><br>
    <form action="register.php" method="POST">
    <fieldset>
        <legend align="center"><h1>Sign Up</h1></legend><br>
        <?php if (isset($error) && !empty($error)) {echo '<p class="error">'.$error.'</p>';}?>
        <div class="row">
            <div class="column">
            <p><label>Full Name: </label><input type="text" name="fn"  required placeholder="Enter full name" autofocus value=<?php if(isset($_POST['fn'])){echo $_POST['fn'];}?>></p>
            <p><label>User Name: </label><input type="text" name="un"  required placeholder="Enter user name" value=<?php if(isset($_POST['un'])){echo $_POST['un'];}?>></p>
           <p><label>Email: </label><input type="email" name="em"  placeholder="Enter email address" value=<?php if(isset($_POST['em'])){echo $_POST['em'];}?>></p>
            </div>
            <div class="column">
            
        
            <p><label>Mobile: </label><input type="tel" name="mo"  maxlength="10" placeholder="Enter mobile number" value=<?php if(isset($_POST['mo'])){echo $_POST['mo'];}?>></p>
            <p><label>Password: </label><input type="password" name="p1"  required placeholder="Enter your password" value=<?php if(isset($_POST['p1']) && $_POST['p1']!=""){echo $_POST['p1'];}?>></p>
            <p><label>Confirm password: </label><input type="password" name="p2"  required placeholder="Confirm your password" value=<?php if(isset($_POST['p2']) && $_POST['p2']!=""){echo $_POST['p2'];}?>></p>
            </div>
            <p><button type="submit" >Sign Up</button></p>
        </div>
    </fieldset>
    </form>
</div>
</div>
</body>
</html>
