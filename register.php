<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <script src="https://kit.fontawesome.com/5ce14b4205.js" crossorigin="anonymous"></script>
    <title>Register Form</title>
</head>
<body>
<header>
        <?php 
        include('head.php');
        ?>
    </header>
    <main>
    <form action="includefiles/register-process.php" method="post" class="form">
        <table>
            <thead>
        <h2>Register</h2>
        </thead>
        <tbody>
            <tr>
                <td><label for="fname">First Name :</label></td>
                <td><input type="text" id="fname" name="fname" required></td>
            </tr>
            <tr>
                <td><label for="lname">Last Name :</label></td>
                <td><input type="text" id="lname" name="lname" required></td>
            </tr>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="email" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="phone">Phone Number :</label></td>
                <td><input type="number" id="phone" name="phone" required></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="password" id="password" name="password" required></td>
            </tr>
            <tr>
                <td><label for="verify-password">Verify Password :</label></td>
                <td><input type="password" id="verify-password" name="vpassword" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="reset" vlaues="Reset" id="reset">
                    <input type="submit" values="Login" id="submit">
                </td>
            </tr>
        </tbody>
        <tfoot></tfoot>
        </table>
    </form>
    </main>
</body>
</html>