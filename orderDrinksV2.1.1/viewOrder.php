<?php
    include_once 'includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <title>View Orders</title>
    <meta http-equiv="refresh" content="5" >
    <link rel="stylesheet" type="text/css" href="styles/veiwOrder.css" >
</head>
<body>
<?php

    $i = 0;
    $sql = "SELECT * FROM orders"; 
    $result = mysqli_query($conn, $sql);
    echo 
    '<table  style="width:100%">' .
        "<tr>" .
            "<th>" . "Done" . "</th>" . 
            "<th>" . "Order Num" . "</th>" .
            "<th>" . "Name" . "</th>" .
            "<th>" . "Order" . "</th>" .
        "</tr>";
    $count = mysqli_num_rows($result);
    while ($i < $count )  {
        $row = $result-> fetch_assoc();

        echo
        "<tr>" .
            "<td>" . "<input type='checkbox' class='viewOrderCheckbox'>" . "</td>" .
            "<td>" . $row["ordernum"] ."</td>" .
            "<td>" . $row["nam"]  ."</td>" .
            "<td>" . $row["drink"] . "</td>" .
        "</tr>"; 
    
        $i = $i + 1;
        
    }

    if( $row['ordernum'] > $_SESSION['countPosSize']){

        $myAudioFile = "Alert.mp3";
        echo '<audio autoplay="true" style="display:none;">
            <source src="'.$myAudioFile.'" type="audio/mp3">
        </audio>';
    }

    echo "$count";

    $_SESSION['countPosSize'] = $count;



?>
</body>
</html>