<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Process</title>
</head>
<body>
<?php
    include('dbCon.php');
    $queryAdd = 'INSERT INTO tbllogin(fname, lname, email, phone, password, vpassword) 
    VALUES("'.$_POST["fname"].'","'.$_POST["lname"].'","'.$_POST["email"].'",
    "'.$_POST["phone"].'","'.$_POST["password"].'","'.$_POST["vpassword"].'")';
    if(mysqli_query($dbCon, $queryAdd)){
    echo '<h1>Insert Successfully.</h1>';
    } else {
    echo "<h1>Error</h1>";
    }
    ?>
</body>
</html>