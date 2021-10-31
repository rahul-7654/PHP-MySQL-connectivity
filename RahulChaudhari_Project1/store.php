<?php ob_start();
session_start();  
 include 'connection.php';?>
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

<body>
    <main>
        <div class="grid">
            <?php
$query = "select * from bookinventory where quantity != '0'";
$res = mysqli_query($link, $query);

while ($row = mysqli_fetch_assoc($res)) {
    ?>
            <article class="card product-item">
                <header class="card__header">
                    <h1 class="product__title">
                    <?php echo $row['BookName']; ?>
                    </h1>
                </header>
                <div class="card__content">
                    <h2 class="product__price">
                    <?php echo $row['Quantity']; ?> - Available
                    </h2>
                </div>
                <div class="card__actions">
                    <form action="" method="post">
                        <button class="btn" type="submit" name="submit" >Check Out</button>
                        <input type="hidden" value="<?php echo $row['BookID'];?>" name="bookID">
                    </form>
                </div>
            </article>

            <?php }?>
        </div>
    </main>

    <?php
if (isset($_REQUEST['submit'])) {
    $_SESSION['bookID'] = $_REQUEST['bookID'];
    header('location:checkout.php');
}?>
</body>

</html>
