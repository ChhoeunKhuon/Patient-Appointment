<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
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
    <form action="Login-Process.php" method="post">
        <table>
            <thead>
        <h2>Login</h2>
        </thead>
        <tbody>
            <tr>
                <td><label for="email">Email :</label></td>
                <td><input type="text" id="email" name="email" required></td>
            </tr>
            <tr>
                <td><label for="password">Password :</label></td>
                <td><input type="text" id="password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2"><a class="btnforgot" href="register.php" required>Forgot Password?</a></td>
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