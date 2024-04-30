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
    $queryAdd = 'Insert into tbllogin(fname, lname, email, phone, password, vpassword) 
    Values("'.$_POST["fname"].'","'.$_POST["lname"].'",
    "'.$_POST["email"].'","'.$_POST["phone"].'","'.$_POST["password"].'","'.$_POST["vpassword"].'")';
    if(mysqli_query($dbCon, $queryAdd)){
        echo "<h1>Information Insert Successfully.";
    }else{
        echo "<h1>Error: ". mysqli_error($conn) ."</h1>";
    }

    ?>
</body>
</html>