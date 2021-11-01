<?php
    ob_start();
    include 'connection.php';
    session_start();  
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store Inventory</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/forms.css">
    <link rel="stylesheet" href="./css/product.css">
</head>
<body style="background: #d2f8d2;">
<center>
    <h1><a href="index.php">Book Store Inventory</a></h1>
    <h2><u>Check Out Page</u></h2>
</center>
<main>
    <form class="product-form" action="" method="POST">
        <input type="hidden" value="<?php if (isset($_SESSION['bookID'])) {echo $_SESSION['bookID'];}?>" name="bookID">
        <div class="form-control">
            <label for="title">First Name</label>
            <input type="text" name="firstName" id="firstName" />
        </div>
        <div class="form-control">
            <label for="title">Last Name</label>
            <input type="text" name="lastName" id="lastName" />
        </div>
        <div class="form-control">
            <label for="title">Email Address</label>
            <input type="text" name="email" id="email" />
        </div>
        <div class="form-control">
            <label for="title">Telephone</label>
            <input type="text" name="telephone" id="telephone" />
        </div>
        <div class="form-control">
            <label for="title">Address</label>
            <textarea type="text" name="address" id="address" columns="5"> </textarea>
        </div>
        <div class="form-control">
            <label for="title">Payment Option</label>
            <select id="paymentOption" name="paymentOption">
                <option>Select Payment</option>
                <option value="cash">Cash</option>
                <option value="creditCard">Credit Card</option>
                <option value="debitCard">Debit Card</option>
                <option value="payPal">PayPal</option>
            </select>
        </div>
        <button class="btn" type="submit" name="submit">Order</button>
    </form>
</main>
<?php
if (isset($_REQUEST['submit'])) {
    $firstName = $_REQUEST['firstName'];
    $lastName = $_REQUEST['lastName'];
	$paymentOption = $_REQUEST['paymentOption'];
	$address = $_REQUEST['address'];
	$telephone = $_REQUEST['telephone'];
	$email = $_REQUEST['email'];
	$bookID = $_REQUEST['bookID'];

    $query = "select * from bookinventory where BookID=".$bookID;
    $res = mysqli_query($link, $query);

    $bookData = mysqli_fetch_assoc($res);

    $quantity = (int)$bookData['Quantity'] - 1;

    if(mysqli_query($link, "update bookinventory SET Quantity='$quantity' WHERE  BookID=".$bookID)){
        $insertQuery = "insert into bookinventoryorder (FirstName,LastName,PaymentOption,Address,Telephone,EmailAddress,BookID) 
        values ('$firstName','$lastName','$paymentOption','$address','$telephone','$email','$bookID')";
        if(mysqli_query($link, $insertQuery)){
            header('location:thankYou.php');
        }
    }
}
?>
</body>
</html>