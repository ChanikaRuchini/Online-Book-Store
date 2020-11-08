<?php 
    include_once "../classes/customer.php";
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Profile</title>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin-left:390px;
            text-align: center;
        }

        .title {
            color: black;
            font-size: 18px;
        }
</style>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>
<body>
    <?php

        if(isset($_GET['msg']) && $_GET['msg'] == 'updatesuccessful'){echo "<script type='text/javascript'>alert('Update successful!');</script>";}
        if(isset($_GET['msg']) && $_GET['msg'] == 'signinsuccessful'){echo "<script type='text/javascript'>alert('Sign in successful!');</script>";}
        if(isset($_GET['msg']) && $_GET['msg'] == 'signupsuccessful'){echo "<script type='text/javascript'>alert('Sign up successful!');</script>";}
        if(isset($_GET['msg']) && $_GET['msg'] == 'applyconvocationsuccessful'){echo "<script type='text/javascript'>alert('Apply for convocation successful!');</script>";}
        if(isset($_GET['msg']) && $_GET['msg'] == 'applyconvocationnotsuccessful'){echo "<script type='text/javascript'>alert('Apply for convocation failed!');</script>";}
        if(isset($_GET['msg']) && $_GET['msg'] == 'registersuccessful'){echo "<script type='text/javascript'>alert('Register modules successful!');</script>";}
        include_once "header.php";
        if(isset($_GET['status']) && $_GET['status']=="signout"){
            unset($_SESSION['user']);
            session_destroy();
            header("Location:../index.php");
        }else if(isset($_SESSION['user'])){
            $customer = $_SESSION['user'];
            $id = $customer->getName();
           
          
           
          
        }else{
            header("Location:../signin.php");
        }
         include_once "slider.php";
        include_once "../footer.php";
    ?>
</body>
</html>