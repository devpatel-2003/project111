<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="register.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <form action="http://localhost/college/query.php/query.php" method="post">
        <input type="hidden" name="action" value="register">
    <div class="container">
        <h1>College Social Network Register</h1>
        <input type="text" name="uname" placeholder="Name" required><br>
        <input type="text" name="enroll" placeholder="Enrollment No." maxlength="12" minlength="12" required><br>
        <select name="branch" id="depart"><br>
            <option value="None">Select</option>
            <option value="Computer">Computer</option>
            <option value="Civil">Civil</option>
            <option value="Mechanical">Mechanical</option>
            <option value="Electrical">Electrical</option>
            <option value="Auto Mobile">Auto Mobile</option>
        </select><br>
        <input type="text" name="mobile" placeholder="Mobile No." maxlength="10" minlength="10" required><br>
        <input type="password" name="pass" placeholder="Create Password" maxlength="12" minlength="8" required><br>
        <button type="submit">Register</button>
        <p>--------------------OR--------------------</p>
        <a href="http://localhost/college/login/login.php">Already Logged In?</a>
    </div>
</form>
</body>
</html>
    
