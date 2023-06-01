<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="view.css">
	<title>Image Map Example</title>
</head>
<body>
  <h1>College Social Network</h1>
  
  <a href="http://localhost/college/images/index.php">Add Post</a>
  <a href="http://localhost/college/home/">Home</a>
  <?php

use function PHPSTORM_META\type;

$db = mysqli_connect("localhost", "root", "", "photos");
$sql = "SELECT * FROM images";
$result = mysqli_query($db, $sql);
while($row = mysqli_fetch_array($result)){
  echo "<div id='img_div'>";
  // echo "<img src = ' img/ ".$row['image']." '>";
  echo "<img src = 'img/".$row['image']."' width=500; height=300; border=2px solid black;>";
  echo "<p>" .$row['text'] . "</p>";
  echo '<form method="post" action="submit_comment.php">
  
  <textarea name="comment" id="comment" placeholder="Comment....."  required></textarea>
  
  <button type="delete" name="delete">Delete</button>
  <input type="submit" name="submit" value="submit">
  
  </form>
  </div>';
  
  if(isset($_POST['delete'])){
      $post = $_POST['delete'];

      $query = "DELETE FROM `images` WHERE id='$post' LIMIT 1";
      $query_run = mysqli_query($conn, $query);
      
      $check = "SELECT * FROM images WHERE id='$post' LIMIT 1";
      $img_res = mysqli_query($conn, $check);
      $res_data = mysqli_fetch_all($img_res);

      $image = $res_data['image'];

      if($query_run){
        if(file_exists('img/.$image')){
          echo "post deleted";
        }
        $_SESSION['message'] = "post deleted successfully";
        header("location: http://localhost/college/images/view.php");
      }
    }
    // <button type="submit" name="submit">Submit</button>
//   if(isset($_POST['submit'])){
//     echo "submitted";
  
//     $comment = $_POST['comment'];
  
//     $old = fopen("comment.txt", "r+t");
//     $old_comments = fread($old, 1024);
  
//     $write = fopen("comment.txt", "w+");
  
//     $string = "<div class='comment'><span>".date('Y/m/d')." | ".date("h:i A")."</span><br />
//     <span>".$comment."</span></div>\n".$old_comments;
  
//     fwrite($write, $string);
//     fclose($write);
//     fclose($old);

//     $read = fopen("comment.txt", "r+t");
//     echo "<h1>Comments : </h1>".fread($read, 1024);
//     fclose($read);
//   }
}
?>

</body>
</html>





<!-- // $image_url = 'img/*';
// $width = 300;
// $height = 200;



// Set the path to your image file
// $image_path = "img";

// // Set the coordinates of the area you want to display
// $area_coords = "x2,y2,x3,y3"; // Replace with your own coordinates

// // Output the HTML map, area, and img tags with the image path and area coordinates
// echo " -->
<!-- //     <map name='image-map'>
//         <area shape='rect' coords='$area_coords' href='#'>
//     </map>
//     <img src='$image_path' usemap='#image-map'>
// "; -->
