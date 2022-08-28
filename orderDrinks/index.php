<?php
    include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width">
    <style> img { max-width: 100%; } </style>
    <meta charset="UTF-8">
    <title>log in</title>
</head>
<body>
What is your name?

<form  method="POST"> 
    <input type="text" name="name" placeholder="name">
    <br>
    <button type="submit" name="submit">submit</button>
</form>

<?php if(isset($_POST['name'])) {

    $_SESSION['name'] = $_POST['name'];
    header('location: menu.php');
} 
?>

</body>
</html>