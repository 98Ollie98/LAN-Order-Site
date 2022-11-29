<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
<head> 
    
    <title>Order a drink</title>
    <link rel="stylesheet" type="text/css" href="styles/index.css" >
</head>
<body>
    <div class="headerParent">
        <h1 class="Header">Who are you?<h1>
    </div>
    <div class="nameFormParent">
        <form method="POST">
            <div class="nameInputFeildDIV"><input type="text" class="nameInputFeild" placeholder="Name" name="name"></div>
            <div class="nameSubmitButtonDIV"><input type="submit" class="submitButton"></div>
        </form>
    </div>

<?php if(isset($_POST['name'])) {
    if ($_POST['name'] != "") {
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['drink'] = "";
        header('location: menu.php');
    }
    else {
        echo"<h6 class='errorMessage'>You can not leave the name box blank</h6>";
    }
} 
?>
</body>
</html>