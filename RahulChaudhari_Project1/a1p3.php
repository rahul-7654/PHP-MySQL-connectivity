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

$firstname_error = "";
$lastname_error = "";
$age_error = "";
$newsletter_error = "";

if (@$_REQUEST['submit']) {
    $string = $_REQUEST["firstname"];

	$arr = str_split($string);
	$result = false;
	$data = array_filter(array_count_values($arr), function($el)
	{
		
		return $el > 1;
	});
	
	// echo '<pre>'. print_r($data,1) .'</pre>';

	if($data != null){
		echo "The String has duplicates characters : true";
	}else{
		echo "The String has duplicates characters : false";
	}
    
}

?>

<form method="post" action="">

	<p><label>Input String: <input type="text" name="firstname"></label></p>
	<p align="center"><input type="submit" name="submit" value="Submit String"></p>

</form>

</body>
</html>