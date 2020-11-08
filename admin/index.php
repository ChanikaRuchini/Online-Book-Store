<?php
if(!isset($_SESSION['user'])){ // Session availability
    header("Location:../index.php");
} else {
    header("Location:profile.php");
} 
?>