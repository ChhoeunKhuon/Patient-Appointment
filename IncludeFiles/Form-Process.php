<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Process</title>
</head>
<body>
<?php
    include('dbCon.php');
    $queryAdd = 'Insert into tblinformatin(id, room, patientid, doctorid, date, reason) 
    Values("'.$_POST["id"].'","'.$_POST["room"].'","'.$_POST["patientId"].'",
    "'.$_POST["doctorId"].'","'.$_POST["date"].'","'.$_POST["reason"].'")';
    if(mysqli_query($dbCon, $queryAdd)){
        echo "<h1>Information Insert Successfully.";
    }else{
        echo "<h1>Error: ". mysqli_error($conn) ."</h1>";
    }

    ?>
</body>
</html>