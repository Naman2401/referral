<?php
    include "library/config.php";
    if(isset($_POST['submit']))
    {
        $password=$_POST['password'];
        $email=$_POST['email'];
        $query=("select * from users where email='$email'"); 
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_assoc($result);
        if ($row['password'] == $password)
        {
            session_start();
                                
            $_SESSION['id'] = $row['id'];  
            echo '<script> window.location = "home.php"; </script>';
        }
    }
?>