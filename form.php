<?php
include "library/config.php";
if(isset($_POST['upload'])){
    $subject = $_POST['subject'];
    $chapterNo = $_POST['chapterNo'];
    $chapterName = $_POST['chapterName'];
    $topicNo = $_POST['topicNo'];
    $topicName = $_POST['topicName'];   
    $video = $_FILES['topicVideo']['name'];
    $target_dir = "videos/";
    $target_file = $target_dir . $_FILES["topicVideo"]["name"];
    if(move_uploaded_file($_FILES['topicVideo']['tmp_name'],$target_file)){
        // Insert record
        $query="insert into videos (`subject`, `chapterNo`, `chapterName`, `topicNo`, `topicName`, `video`, `videoName`)";
        $query.="values ('$subject', '$chapterNo', '$chapterName', '$topicNo', '$topicName', '$target_file', '$video')"; 
        

        $result=mysqli_query($connection,$query);
        if(!$result)
        {
            die('query failed'.mysqli_error($connection));
        }
        else
        {    
            echo '<script> alert("Video Uploaded"); window.location = "showVideo.php"; </script>';
            
        }
      }
}
?>