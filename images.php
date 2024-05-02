<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="css/form.css">
</head>
<body>
    <?php
    include('includefiles/dbCon.php');
    $selectImg = 'SELECT * FROM tblprofiles';
    $select = $dbCon -> query($selectImg);
        if($select -> num_rows > 0){
            echo '<div style="text-align:center">';
            while($row=$select->fetch_assoc()){
                echo '<div><img src="'. $row["image"] .'" width="150px" /></div> ';
            }
    }else{
        echo '<a class="fa-solid fa-user" href="user-details.php">';
    }
    $insertImg = 'INSERT INTO tblprofiles (image) values ("'.$_POST["image"].'")';
    if(mysqli_query ($dbCon, $insertImg)){
        echo 'Insert Successfully.';
    }else{
        echo 'Error';
    }
    ?>
    <form action="#" method="post">
        <section>
            <input type="file" name="image">
            <input type="submit" values="Save">
            <input type="reset" values="Cancel">
        </section>
    </form>
</body>
</html>