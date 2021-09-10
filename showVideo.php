<?php
include "library/config.php";
?>
<!doctype html>
<html>
  <head>
    <title>Upload and Store video to MySQL Database with PHP</title>
  </head>
  <body>
    <div>
 
     <?php
     $result = mysqli_query($connection, "SELECT * FROM videos ORDER BY id DESC");
     while($row = mysqli_fetch_assoc($result)){
       $location = $row['video'];
       $name = $row['videoName'];
       echo "<div style='float: left; margin-right: 5px;'>
          <video src='".$location."' controls width='320px' height='320px' ></video>     
          <br>
          <span>".$name."</span>
       </div>";
     }
     ?>
 
    </div>

  </body>
</html>