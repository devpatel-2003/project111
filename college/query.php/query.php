<?php

$sname = "localhost";
$uname = "root";
$pass = "";
$dbname = "college";
$conn = mysqli_connect("$sname", "$uname", "$pass", "$dbname");
// if($conn){
//     echo "connected";
// }

if(isset($_POST['login'])){
    header("location: http://localhost/college/home/");
}

// print_r( $_POST);

switch ($_POST['login']) {
    case 'register':
        $name = $_POST['uname'];
        $enrol = $_POST['enroll'];
        $depart = $_POST['branch'];
        $num = $_POST['mobile'];
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $insert = "INSERT INTO register(`name`, `enrollment`, `department`, `phone_no`, `password`) VALUES ('$name','$enrol','$depart','$num','$pass')";
        $query = mysqli_query($conn, $insert);
        // echo "$pass";
        if($query){
            header("location: http://localhost/college/login/login.php");
        }
        break;
    
    // case 'login':
    //     $enroll = $_POST['enroll'];
    //     $pass = $_POST['pass'];

    //     $select = "SELECT * FROM user WHERE enroll = '$enroll'";
    //     $result = mysqli_query($conn, $query);
    //     if(mysqli_num_rows($result)>0){
    //         while($row = mysqli_fetch_assoc($result)>0){
    //             if(password_verify('$pass', $row['pass'])){
    //                 $enroll = $row['enroll'];
    //                 header("location: http://localhost/college/home/");
    //             }
    //         }
    //     }
}
?>