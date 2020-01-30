<!--Amandeep kaur 8622414-->
<!--Part - 2-->
 <?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
$age= $_POST['age'];
    
//    check for firstname
    if(!empty($_POST['firstname'])){ 
	
	$firstname = $_POST['firstname'];//if firstname was given display nothing
      echo 'Your firstname is:' .$firstname.'<br/>';
}
	else{
		
	echo '<p>Please Enter Your firstname!!</p>'; // if firstname was not given print this message
	}
	
    //    check for lastname
	 if(!empty($_POST['lastname'])){
	 
	 $lastname = $_POST['lastname'];
         echo 'your lastname is:'.$lastname.'<br/>';
	 }
	 else{
		 echo '<p>Please Enter Your last name!!</p>'; // print this message if lastname was empty
	 }
	 
    //    check for age
	 if(!is_numeric($age)){
		 
		echo "Age should be a number";
	 } 
	 else{
		 echo 'Your age is:'.$age.'<br/>'; // print this message when age was not given
	 }
	 
    //    check for newsletter
	 if(isset($_POST['newsletter'])){
		 
		 $newsletter = $_POST['newsletter']; 
         echo 'newsletter is :'.$newsletter;
	 }
	 else{
		echo  '<p>Select a button!!</p>'; // print this message when not selected any of the button
	 }

}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Simple HTML Form</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>

<form method="post" action="a1p2.php">

	<fieldset><legend>Account Creation:</legend>

	<p><label>First Name: <input type="text" name="firstname" size="20" maxlength="40" value="<?php 
//        sticky note for firstname
        if(isset($_POST['firstname'])) 
            
        {
            echo $_POST['firstname'];
        }
        ?>"></label></p>
	
	<p><label>Last Name: <input type="text" name="lastname" size="20" maxlength="40"value="<?php 
        //        sticky note for lastname
        if(isset($_POST['lastname'])) 
        {
            echo $_POST['lastname'];
        }
        ?>"></label></p>

	<p><label>Age: <input type="text" name="age" size="20" maxlength="40"value="<?php 
        
        //        sticky note for age
        if(isset($_POST['age'])) 
        {
            echo $_POST['age'];
        }
        ?>"></label></p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label><input type="radio" name="newsletter" value="Y"> Yes <input type="radio" name="newsletter" value="N"> No</p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>
   
</body>
</html>