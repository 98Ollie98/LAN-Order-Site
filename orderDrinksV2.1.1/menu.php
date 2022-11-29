<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order a drink</title>
    <link rel="stylesheet" type="text/css" href="styles/menu.css" >
</head>
<body>



<form method="post">
    <div class="placeOrderButtonDIV">  <input class="placeOrderButton" type="submit" name="orderPlaced" value="Place Order">  </div>
</form>

<!--start of 1 drink segment-->

<form method="POST"><div class = menuItemEven>
<h1>Fanta</h1><input class="addToOrderButton" type="submit" name="fanta" value="Add to
Order"></form>

<?php
    if (isset($_POST['fanta'])) {
        $_SESSION['drink'] .= "Fanta ";
    };
?>
</div>

<!-- end of 1 drink segment -->

<form method="POST"><div class = menuItemOdd>
<h1>G & T</h1><input class="addToOrderButton" type="submit" name="G&T" value="Add to
Order"></form>

<?php
    if (isset($_POST['G&T'])) {
        $_SESSION['drink'] .= "G & T ";
    };
?>
</div>



<?php

    if(isset($_POST['orderPlaced'])){

        $drin = $_SESSION['drink'];
        $_SESSION['drink'] = ""; 
        $na = $_SESSION['name'];


        $sql = "INSERT INTO orders (nam, drink) VALUES ('$na', '$drin' );";
        
        if (isset($na)&&isset($drin)) {
        mysqli_query($conn, $sql);  //puts order into data base 
        header("location: successfulOrder.php");
        
        }
        else {
            header("location: ERROR.php");
        }
    }

?>
</body>
</html>