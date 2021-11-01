<?php 
    ob_start();
    session_start();  
    include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Book Store Inventory</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/product.css">
</head>
<body style="background: #d2f8d2;">
<main>
<center>
    <h1><a href="index.php">Book Store Inventory</a></h1>
</center>
<div class="grid">
<?php
    $query = "select * from bookinventory where quantity != '0'";
    $res = mysqli_query($link, $query);

    while ($row = mysqli_fetch_assoc($res)) {
        if($row['Quantity'] > 0){
?>
    <article class="card product-item"  style="background: #e8e8e8">
    <center>
        <header class="card__header">
            <h1 class="product__title">
            <?php echo $row['BookName']; ?>
            </h1>
        </header>

        <div class="card__content">
            <img class="img" style="align:center;" src="<?php echo $row['BookImage'];?>" height="150" width="150"/>
            <br><br>
            <h2 class="product__price">
            <?php echo $row['Quantity']; ?> - Available
            </h2>
        </div>
        <br>
        <div class="card__actions">
            <form action="" method="post">
                <button class="btn" type="submit" name="submit" >Check Out</button>
                <input type="hidden" value="<?php echo $row['BookID'];?>" name="bookID">
            </form>
        </div>
        <br>
    </center>
    </article>
            <?php } }?>
</div>
</main>
<?php
if (isset($_REQUEST['submit'])) {
    $_SESSION['bookID'] = $_REQUEST['bookID'];
    $_SESSION['bookName'] = $_REQUEST['bookName'];
    header('location:checkout.php');
}?>
</body>
</html>
