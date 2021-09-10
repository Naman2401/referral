<?php
    echo hello;
    include "library/config.php";
    if(isset($_POST['signup']))
    {   
        $name=$_POST['name'];
        $password=$_POST['password'];
        $email=$_POST['email'];
        $reffer=$_POST['refferal'];
        
        $query="insert into users (`name`, `email`, `password`, `reffer`)";
        $query.="values ('$name', '$email', '$password', '$reffer')"; 
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_assoc($result);
        if(!$result)
        {
            die('query failed'.mysqli_error($connection));
        }
        else
        {    
            echo '<script> alert("record created"); window.location = "index.php"; </script>';
            
        }
    }
?>