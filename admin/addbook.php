<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../css/signup.css">
</head>
<body>
<?php 
    if(isset($_GET['msg']) && $_GET['msg'] == 'addedsuccessfull'){echo "<script type='text/javascript'>alert('Add book successful!');</script>";}
    include_once "header.php";
     include_once ("../dbconnect.php");
       include_once "../footer.php";
?>


<!signup form>
<div class="middle">
<div class="login"><br><br><br>
    <form action='processAddBook.php' method='POST' enctype="multipart/form-data">
    <fieldset>
        <legend align="center"><h1>Add Book</h1></legend><br>
        <?php if (isset($error) && !empty($error)) {echo '<p class="error">'.$error.'</p>';}?>
        <div class="row">
            <div class="column">
            <p><label>Book Name: </label><input type="text" name="name"  required placeholder="Enter index number" autofocus size="40" ></p>
            <p><label>Catogary : </label>
                <select name='cat'>
                  <?php
									
										
			
											$query="select * from category ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
																						
												
										echo '<option value="'.$row['cat_id'].'"> '.$row['cat_nm'];
												
													
												
												
											}
											mysqli_close($link);
								?>
                </select></p>
				<p><label>Description: </label><textarea cols="40" rows="6" name='description' required placeholder="Enter Description"   ></textarea>
					<p><label>Publisher: </label><input type='text' name='publisher' required placeholder="Enter full name"  size='40'>
              
           
												
												
            </div>
            <div class="column">

            	<p><label>Edition: </label><input type='text' name='edition' required placeholder="Enter Edition"  size='40'>
            	
            		<p><label>ISBN: </label><input type='text' name='isbn' required placeholder="ISBN"  size='40'>
                <p><label>Pages: </label><input type='text' name='pages' required placeholder="Enter Pages"  size='40'>
                        
          		 <p><label>PRICE: </label><input type='text' name='price' required placeholder="Enter Price"  size='40'>
                        	
					       
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











