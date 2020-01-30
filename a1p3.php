<!--Amandeep kaur 8622414-->
<!--Part - 3-->
<?php

$sentence = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum";

echo $sentence;
$str_array = explode(' ', $sentence);

//sort the array
sort($str_array);
$sentence = implode(' ', $str_array); 
echo "<p>$sentence</p>";
?>
   

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Enter Text</title>
	<style type="text/css">
	label {
		font-weight: bold;
		color: #300ACC;
	}
	</style>
</head>
<body>
    <?php

//    create function for unique char
function uniqueChar($str){
	
	for($i = 0; $i < strlen($str); $i++) 
	{ 
		for($j = $i + 1; $j < strlen($str); $j++) 
		{ 
			if($str[$i] == $str[$j]) 
			{ 
				return true; 
			} 
		} 
	} 
	
	return false; 
} 


 if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     check for firstname
        if(!empty($_POST['firstname'])){
            
            $checking = uniqueChar($_POST['firstname']); 
            
            if($checking == true){
                echo '<p>duplicate characters</p>'; 
            }else{
                echo '<p>no duplicate characters</p>'; 
            }
           
        }else{
            echo '<p>enter input string</p>'; 
        }
    }
?>

<form method="post">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>