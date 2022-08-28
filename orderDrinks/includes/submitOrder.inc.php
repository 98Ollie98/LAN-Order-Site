<?php
    
    include_once 'dbh.inc.php';

    $drin = $_SESSION['drink'];
    $na = $_SESSION['name'];

    //echo($na . $drin);
    $sql = "INSERT INTO orders (nam, drink) VALUES ('$na', '$drin' );";
    
    if (isset($na)&&isset($drin)) {
       mysqli_query($conn, $sql);  //puts order into data base 
       header("location: ../successfulOrder.php");
       
    }
    else {
        header("location: ../ERROR.php");
    }

    //header("location: ../menu.php?submitOrder=success");