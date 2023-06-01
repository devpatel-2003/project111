<?php
$msg = "";

if(isset($_POST['upload'])){
    // $target = "image/" . basename($_FILES['image']['name']);
    header("location: http://localhost/college/images/view.php");

    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $dbname = "photos";
    $db = mysqli_connect("$sname", "$uname", "$pass", "$dbname");
    // if($db){
    //     echo "done";
    // }
    $image = $_FILES['image'] ['name'];
    $tmpName = $_FILES['image']['tmp_name'];
    $text = $_POST['text'];

    // $sql = "INSERT INTO images('image', 'text')VALUES ('$image', '$text')";
    $sql = "INSERT INTO images(`image`, `text`) VALUES ('$image','$text')";
    $result = mysqli_query($db, $sql);
    move_uploaded_file($tmpName, 'img/'.$image);
    // if (move_uploaded_file($_FILES['name']['tmp_name'], $target)){
    //     $msg = "image uploaded successfully";
    // }
    // else{
    //     $msg = "there was a probelm uploading image";
    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="content">
    <form action="index.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="size" value="1000000">
        <div>
            <input type="file" name="image" id="image1" required>
        </div>
        <div>
            <textarea name="text" cols="30" rows="10" placeholder="Comment......" required></textarea>
        </div>
        <div>
            <!-- <input type="submit" class="btn" name="upload"> -->
            <button type="submit" class="btn" name="upload">Post</button>
        </div>
        <!-- <canvas id="image"></canvas> -->
    </form>
</div>
</body>
<!-- <script src="view.js"></script> -->
</html>

<?php
// Retrieve comments from database
// $db = new mysqli('localhost', 'username', 'password', 'database_name');
// $result = $db->query("SELECT * FROM comments ORDER BY created_at DESC");

// // Display comments
// while ($row = $result->fetch_assoc()) {
//   echo '<div class="comment">';
//   echo '<h3>' . $row['name'] . '</h3>';
//   echo '<p>' . $row['comment'] . '</p>';
//   echo '<span class="timestamp">' . $row['created_at'] . '</span>';
//   echo '</div>';
// }
?>

<!-- // $db = mysqli_connect("localhost", "root", "", "photos");
// $sql = "SELECT * FROM images";
// $result = mysqli_query($db, $sql);
// while($row = mysqli_fetch_array($result)){
//     echo "<div id='img_div'>";
//     // echo "<img src = ' img/ ".$row['image']." '>";
//     echo "<img src = 'img/".$row['image']."'>";
//     echo "comment : <p>" .$row['text'] . "</p>";
    
//     echo "</div>";
// } -->