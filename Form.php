<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <script src="https://kit.fontawesome.com/5ce14b4205.js" crossorigin="anonymous"></script>
    <title>Patient Appointment</title>
</head>
<body>
    <header>
        <?php 
        include('head.php');
        ?>
    </header>
    <main>
    <form action="includefiles/Form-Process.php" method="post">
    <table>
        <tbody>
            <thead>
            <h2>Information Form</h2>
            </thead>
        <tr>
        <td><label for="id">ID :</label></td>
        <td><input type="number" id="id" name="id"></td>
        </tr>
        <tr>
            <td><label for="room">Room :</label></td>
            <td><input type="text" id="room" name="room"></td>
        </tr>
        <tr>
            <td><label for="patientid">Patient ID :</label></td>
            <td><input type="int" id="patientid" name="patientId"><br></td>
        </tr>
        <tr>
            <td><label for="doctorid">Doctor ID :</label></td>
            <td><input type="text" id="doctorid" name="doctorId"><br></td>
        </tr>
        <tr>
            <td><label for="datetime">DateTime :</label></td>
            <td><input type="date" id="datetime" name="date"><br></td>
        </tr>
        <tr>
            <td><label for="reason">Reason :</label></td>
            <td><input type="text" id="reason" name="reason"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="reset" Values="Reset" id="reset">
            <input type="submit" Values="Submit" id="submit"></td>
        </tr>
        </tbody>
        </table>
    </form>
    </main>
</body>
</html>