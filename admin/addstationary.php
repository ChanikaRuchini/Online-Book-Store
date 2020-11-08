<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
<?php 

    if(isset($_GET['msg']) && $_GET['msg'] == 'addedsuccessfull'){echo "<script type='text/javascript'>alert('Add stationary successful!');</script>";}
    include_once "header.php";
       include_once "../footer.php";
?>


<div class="middle">
<div class="login"><br><br><br>
    <form action='processAddStationary.php' method='POST' enctype="multipart/form-data">
    <fieldset>
        <legend align="center"><h1>Add Stationary</h1></legend><br>
        <?php if (isset($error) && !empty($error)) {echo '<p class="error">'.$error.'</p>';}?>
        <div class="row">
            <div class="column">
            <p><label>Stationary Name: </label><input type="text" name="name"  required placeholder="Enter Stationary Name" autofocus size="40" ></p>
           
				
					<p><label>Brand: </label><input type='text' name='brand' required placeholder="Enter Brand name"  size='40'>
              
           
												
												
            </div>
            <div class="column">

            	                        
          		 <p><label>Price: </label><input type='text' name='price' required placeholder="Enter Price"  size='40'>
                        	
					       
          		 <p><label>Image: </label><input type='file' name='img' size='35' required placeholder="Insert Image"  size='40'>	
           
            </div>
            <p><button type="submit" >Add</button></p>
        </div>
    </fieldset>
    </form>
</div>
</div>
</body>
</html>











