<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <script src="https://kit.fontawesome.com/5ce14b4205.js" crossorigin="anonymous"></script>
    <title>User Details</title>
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
        $querySelect = 'SELECT * FROM tbllogin where id = 1';
        $queryFrom = $dbCon ->query($querySelect);
        if($queryFrom->num_rows>0){
            echo '<table style="width:500px;margin:2rem auto; box-shadow:0 0 15px rgba(0,0,0,0.25);padding:10px;font-size:20px;border-radius:20px">
            <tr>
            <th colspan="2" style="color:black;font-size:50px"><i class="fas fa-user-circle"></i></th>
            </tr>
            ';
            while($row=$queryFrom->fetch_assoc()){
                echo '<tbody>
                <tr>
                <td>FullName :</td>
                <td>'.$row["fname"].'<span>&nbsp;'.$row["lname"].'</td>
                </tr>
                <tr>
                <td>Email : </td>
                <td>'.$row["email"].'</td>
                </tr>
                <tr style="text-align:start">
                <td>Phone Number : </td>
                <td>'.$row["phone"].'</td>
                </tr>
                <tr><td></td></tr>
                <tr colspan="2" >
                <td><a href="login.php" style="background-color:blue;color:white;text-decoration:none;padding:5px;border:none;border-radius:6px">Switch</a></td>
                <td><a href="login.php" style="background-color:red;color:white;text-decoration:none;padding:5px;border:none;border-radius:6px">LogOut</a></td>
                </tr>
                </tbody>
                ';
            }
            echo '</table>';
    }
        ?>
    </main>
</body>
</html>