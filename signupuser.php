<?php
    include "library/config.php";
    if(isset($_GET['refer']) != ''){
    $reffer = $_GET['refer'];
    }
    else{
    $reffer = "";
    }
?>

<section class="career_registration">
    <div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1>Signup</h1>
        <form action="signup.php" method="post">
            <input type="text" name="name" placeholder="Enter Name" class="form-control form-group" required>
            <input type="email" name="email" placeholder="Email" class="form-control form-group" required>
            <input type="password" name="password" placeholder="password" class="form-control" required>
            <input type="text" name="refferal" placeholder="Enter Refferal" class="form-control form-group" value="<?php echo $reffer; ?>">
            <div class="form-group">
            <button type="submit" name="signup">Signup</button> </div>
        </form>
    </div>
    </div>
    </div>
    </section>     