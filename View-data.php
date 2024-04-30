<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        $selectAll ='SELECT * FROM tblinformatin';
        $select = $dbCon -> query($selectAll);
        if($select = num_row > 0){

        }


        ?>
    </main>
</body>
</html>