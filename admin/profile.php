<?php 
    include_once "../classes/admin.php";
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
            if(isset($_GET['msg']) && $_GET['msg'] == 'assignlecturersuccessful'){echo "<script type='text/javascript'>alert('Assign lecturer successful!');</script>";}
            include_once "header.php";
            include_once "slider.php";
            if(isset($_GET['status']) && $_GET['status']=="signout"){
                unset($_SESSION['user']);
                session_destroy();
                header("Location:../index.php");
            }else if(isset($_SESSION['user'])){
                $admin = $_SESSION['user'];
                $id = $admin->getID();
                $name = $admin->getName();
                echo 
                    "<div class='middlediv'>
                    <br><br><br><br><br>
                        <div class='card'><br>
                            <img src='../imgs/user.png' style='width:60%;align:center;'>
                            <h1>".$name."</h1>
                            <p class='title'>".$id."</p><br>
                            <p>Admin</p><br>
                        </div>
                    </div>";
                
            }else{
                header("Location:../signin.php");
            }
            include_once "../footer.php";
        ?>
    </body>
</html>