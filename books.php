<?php  
session_start();
    include_once ("dbconnect.php");
     $q="select * from book";
   $res=mysqli_query($conn,$q) or die("Can't Execute Query...");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Books
        </title>
        <style>
.card {
    box-shadow: 0px 4px 8px 0 rgba(0, 0, 0, 0.2);
    max-width: 500px;
    margin: auto;
    
}

.title {
    color: black;
    font-size: 18px;
}


a {
    text-decoration: none;
    font-size: 22px;
    color: black;
}
a:hover {
    opacity: 0.7;
}
        </style>
    </head>
    <body>
        
        <?php include_once "header.php";?>
        <div class="middle"><br>

          <div class="grid-container">

            <?php
              $count=1;
              while($row=mysqli_fetch_assoc($res))
              {
                $a=1000;
             echo '<div class="\grid-item\">
  <div class="\card_item\">
    <a href="bookdetail.php?id='.$row['b_id'].'">
                            <img src="'.$row['b_img'].'" width="80" height="100">
                            <br>'.$row['b_nm'].'</a>

  
  
</div>
  
</div>';
           $count++;    }
            ?>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</div>
        </div>
        <?php include_once "footer.php";?>
        
    </body>
</html>