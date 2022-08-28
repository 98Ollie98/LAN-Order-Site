<?php
    include_once 'includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
    <style> img { max-width: 100%; } </style>
    <meta charset="UTF-8">
    <title>View Orders</title>
    <meta http-equiv="refresh" content="5" >
    <style>
        
        table, th, td {
        border: 1px solid black;
        }
    </style>
</head>
<body>

<?php

    $file_name = "FRFRFRFRFR.mp3";
    $ORDN =
    $sql = "SELECT * FROM orders"; 
    $result = mysqli_query($conn, $sql);

    echo '<audio autoplay="true" style="display:none;">
    <source src="'.$file_name.'">
    </audio>';
    echo 
    '<table  style="width:100%">' .
        "<tr>" .
            "<th>" . "Order Num" . "</th>" .
            "<th>" . "Name" . "</th>" .
            "<th>" . "Order" . "</th>" .
        "</tr>";

    if ($result-> num_rows > 0) {
        while ($row = $result-> fetch_assoc() ) {
            
            echo '<audio autoplay="true" style="display:none;">
            <source src="'.$file_name.'">
            </audio>';
            
            $ORDN = $row["ordernum"];
            
            echo  
                "<tr>" .
                    "<td>" . $row["ordernum"] ."</td>" .
                    "<td>" . $row["nam"]  ."</td>" .
                    "<td>" . $row["drink"] . "</td>" .
                "</tr>";

        }

    }

    echo '</table>';
?>
</table>
</body>
</html>