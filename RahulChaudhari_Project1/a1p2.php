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

<?php 

$firstname_error = "";
$lastname_error = "";
$age_error = "";
$newsletter_error = "";

if(@$_REQUEST['submit'])
{
	if(@$_REQUEST['firstname'] != null){
		echo "First Name :".$_REQUEST["firstname"]."<br/>";
	}else{
		$firstname_error = "Please Enter First Name";
	}
	if(@$_REQUEST['lastname'] != null){
		echo "Last Name :".$_REQUEST["lastname"]."<br/>";
	}else{
		$lastname_error = "Please Enter Last Name";
	}
	if(@$_REQUEST['age'] != null){
		echo "Age :".$_REQUEST["age"]."<br/>";
	}else{
		$age_error = "Please Enter age";
	}
	if(@$_REQUEST['newsletter'] != null){
		echo "NewsLetter Subscription :".$_REQUEST["newsletter"]."<br/>";
	}else{
		$newsletter_error = "Please Select Newsletter Subscription";
	}

}

?>

<form method="post" action="">

	<fieldset><legend>Account Creation:</legend>

	<p>
		<label>First Name: <input type="text" name="firstname" size="20" maxlength="40"></label>
		<p style="color:red"><?php if($firstname_error!= ""){echo $firstname_error;}?></p>
    </p>
	
	<p>
		<label>Last Name: <input type="text" name="lastname" size="20" maxlength="40"></label>
		<p style="color:red"><?php if($lastname_error!= ""){echo $lastname_error;}?></p>
    </p>

	<p>
		<label>Age: <input type="text" name="age" size="20" maxlength="40"></label>
		<p style="color:red"><?php if($age_error != ""){echo $age_error;}?></p>
	</p>
	
	<p><label for="newsletter">Subscribe to newsletter: </label>
	<input type="radio" name="newsletter" value="Y"> Yes 
	<input type="radio" name="newsletter" value="N"> No
	<p style="color:red"><?php if($newsletter_error!= ""){echo $newsletter_error;}?></p>
    </p>

	</fieldset>

	<p align="center"><input type="submit" name="submit" value="Submit My Information"></p>

</form>




</body>
</html>