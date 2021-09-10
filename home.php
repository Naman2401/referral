<?php 
    session_start();
    $id=$_SESSION['id'];
    {
    include "library/config.php";
    $query="select * from users where id='$id'";
    $result=mysqli_query($connection,$query);
    $row=mysqli_fetch_assoc($result);
    $id=$row['id'];
    // $query1="select * from students_personals where student_id='$id'";
    // $result1=mysqli_query($connection,$query1);
    // $row1=mysqli_fetch_assoc($result1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
<br><br>                                  
<h1 style="text-align: center;">Hello <?php echo $row['name'] ?></h1>
<table class="table table-striped">
        <tbody>
            <tr>
                <td><b>Name</b></td>
                <td><?php echo "<td>".$row['name']."</td>"; ?></td>
            </tr>
            <tr>
                <td><b>Your Refferal Link </b></td>
                <td>http://localhost/refferal/signupuser.php?refer=<?php echo "<td>".$row['name']."</td>"; ?></td>
            </tr>
            <tr>
                <td><b> <a href="logout.php">Logout</a></b></td>
                <!-- <a href="logout.php"> -->
                <!-- <td><?php //echo "<td>".$row['name']."</td>"; ?></td> -->
            </tr>
        </tbody>
</table>
<div class="pricing-column col-lg-4 col-md-6">
      <div class="card">
        <div class="card-header">
          <h3>Product</h3>
        </div>
         <div class="card-body">
          <h2 class="pricing-text">Rs.500</h2>
          <button type="button" onclick="myFunction()" class="btn btn-dark btn-lg btn-block buybtn">Buy</button>
          <h3 id="buy"></h3>
        </div>
      </div>
     </div>

</body>
</html>

<script>
    
    function myFunction(){
        var reffer = "<?= $row['reffer']; ?>";
        if (reffer === ""){
            // alert("You Are Not Applicable For 10% Discount");
            document.getElementById('buy').innerHTML = "You Are Not Applicable For 10% Discount";
        }
        else{
            // alert("You Are Applicable For 10% Discount");
            document.getElementById('buy').innerHTML = "You Are Applicable For 10% Discount";
        }
    
    }
   
</script>
<?php } ?>