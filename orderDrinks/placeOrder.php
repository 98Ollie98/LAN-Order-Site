<?php
    include_once 'includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
    <style> img { max-width: 100%; } </style>
    <meta charset="UTF-8">
    <title>Order Drinks</title>
</head>
<body>

<input type="button" onclick="location.href='menu.php';" value = "Go back to menu" >
<br>
<br>
<br>
<form method="POST"> 
    What would you like?<br><br>
    If you are having coctail such as a Gin and Tonic please specify the amount of spirt (big or small) and what you would like it to be mixed with.
    <br><br>Place your order below:
    <input type="text" name="drink" placeholder="Order">
    <br>
    <button type="submit" name="submit">Place Order</button>
</form>


<?php if(isset($_POST['drink'])) {  // makes sure $_POST['drink'] is set to avoid warning message

    $_SESSION['drink'] = $_POST['drink'];
//    $sql = "INSERT INTO orders () VALUES ();";
//   mysqli_query($conn, $sql);
    header('location: includes/submitOrder.inc.php');

    }

?>

</body>
</html>