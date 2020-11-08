<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Contact Us
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
        <div class="middle_bar"><br>
            <!-- Add icon library -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

            <div class="card"><br>
              <h2 style="margin-left:20px">Global Online Book Store - Weligama</h2><br>
              
              <img src="imgs/phone.png" alt="Phone" width="20" height="20" style="margin-left:170px">&nbsp &nbsp+94412650534<br><br>
              <img src="imgs/fax.png" alt="Fax" width="20" height="20" style="margin-left:170px">&nbsp &nbsp+94412650622<br><br>
              <img src="imgs/email.png" alt="Email" width="20" height="20" style="margin-left:170px">&nbsp &nbspinfoglobal@gmail.com<br><br>
              <img src="imgs/home.png" alt="Address" width="20" height="20" style="margin-left:170px">&nbsp &nbspGlobal Book Store, 
              <p style="margin-left:202px"> Bandaranayake Mawatha,</p>
              <p style="margin-left:202px"> Galbokka,</p>
              <p style="margin-left:202px"> Weligama.</p>
              <br>
              <p class="title" style="margin-left:202px">Follow us on</p>
              <a href=""><i class="fa fa-twitter" style="margin-left:210px"></i></a> 
              <a href="" style="margin-left:10px"><i class="fa fa-linkedin"></i></a> 
              <a href=""><i class="fa fa-facebook" style="margin-left:10px"></i></a><br><br>
            </div>
        </div>
        <?php include_once "footer.php";?>
        
    </body>
</html>