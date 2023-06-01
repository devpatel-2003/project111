<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<form action="http://localhost/college/query.php/query.php" method="post">
    <input type="hidden" name="login" value="login">
    
    <div class="main">
        <h1>College Social Networking</h1>
        <!-- <h3>En.Roll No:</h3> -->
        <input type="text" name="enroll" placeholder="Enter En.Roll" minlength="12" maxlength="12" required><br>
        <!-- <h3>Password:</h3> -->
        <input type="password" name="pass" placeholder="Password" minlength="8" maxlength="12" required><br>
        <button type="submit" name="login"> Login</button>
        <p>--------------------OR--------------------</p>
        <a href="http://localhost/college/register/register.php">New User Register?</a>
    </div>
</form>
</body>
</html>

 <?php
 $sname = "localhost";
 $uname = "root";
 $pass = "";
 $dbname = "college";
 $conn = mysqli_connect("$sname", "$uname", "$pass", "$dbname");

// switch ($_POST['login']) {
//     case 'login':
//         $enroll = $_POST['enroll'];
//         $pass = $_POST['pass'];

//         $query = "INSERT INTO login(`enrollment`, `password`) VALUES ('$enroll', '$pass')";
//         $result = mysqli_query($conn, $query);
//         if(mysqli_num_rows($result)>0){
//             while($row = mysqli_fetch_assoc($result)){
//                 if(password_verify('$pass', $row['pass'])){
//                     $enroll = $row['enroll'];
//                     session_start();
//                     header("location: http://localhost/college/home/");
//                 }
//             }
//         }
//         break;
    
//     default:
//         # code...
//         break;
// }
?> 