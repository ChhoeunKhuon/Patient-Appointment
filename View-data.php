<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
    <link rel="stylesheet" href="css/form.css">
    <script src="https://kit.fontawesome.com/5ce14b4205.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <?php 
        include('head.php');
        ?>
    </header>
    <main>
        <?php
        include('includefiles/dbCon.php');
        $selectAll ='SELECT * FROM tblinformatin';
        $select = $dbCon -> query($selectAll);
        if($select -> num_rows > 0){
            echo '<table style="width:80%; border:1px solid blue;margin:2rem auto; border-collapse:collapse;">
            <tr style="border:1px solid blue;">
            <th style="border:1px solid blue; padding:10px"> Id </th>
            <th style="border:1px solid blue"> Room </th>
            <th style="border:1px solid blue"> Patient Id </th>
            <th style="border:1px solid blue"> Doctor Id </th>
            <th style="border:1px solid blue"> Date </th>
            <th style="border:1px solid blue"> Reason </th>
            </tr><hr>';
        while($row=$select->fetch_assoc()){
            echo '<tr style="text-align:center; border:1px solid blue">
            <td style="padding:10px">'.$row["id"].'</td>
            <td>'.$row["room"].'</td>
            <td>'.$row["patientId"].'</td>
            <td>'.$row["doctorId"].'</td>
            <td>'.$row["date"].'</td>
            <td>'.$row["reason"].'</td></tr>
            ';
            
        }
        echo '</table>';
  }
  else 
      echo '0 results';

  $dbCon->close(); 

        ?>
    </main>
</body>
</html>