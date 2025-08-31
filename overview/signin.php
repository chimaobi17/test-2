<?php
global $dbConn, $randomNum, $now;
include "config.php";


if(isset($_POST['registerBtn'])){
    $username = trim(mysqli_real_escape_string($dbConn, $_POST['user']));
    $email = $_POST['email'];
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $pwd = $_POST['pwd'];
    $pwd2 = $_POST['pwd2'];
    
    if(empty($username)){ $errors[] = $usernameError = "required"; }
    if(empty($email)){ $errors[] = $emailError = "required"; }
    if(empty($fName)){ $errors[] = $fNameError = "required"; }
    if(empty($lName)){ $errors[] = $lNameError = "required"; }
    if(empty($pwd)){ $errors[] = $pwdError = "required"; }
    if(empty($pwd2)){ $errors[] = $pwd2Error = "required"; }
    
    $userID = "TA-".$randomNum;
    $cryptpwd = md5($pwd2);
    
    if(count($errors)==0){
        $query = "INSERT INTO customers(userID, username, email, firstname, lastname, pwd, dc)
    VALUES('$userID', '$username', '$email', '$fName', '$lName', '$cryptpwd', '$now' )";
    
    $dbStore = mysqli_query($dbConn, $query);
    if($dbStore){
        echo "record of user '$username' stored successfully with ID '$userID";
        header("Refresh: 5; url=login.php");
    } 
    else{
        echo "record could not be stored".mysqli_error($dbConn);
    }
    } 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>log-in</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Mono&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body class="login-page">
    <div class="overlay-dark">

        <header>
            <div class="container-fluid header-dark-success">
                <a class="navbar-brand" href="index.php">
                    <img src="https://th.bing.com/th/id/OIP.LE96UejtxIeDhRUbfaPKIAHaGP?w=214&h=180&c=7&r=0&o=7&pid=1.7&rm=3" alt="" width="30" class="rounded-circle"><span class="text-black fw-bolder"><span class="text-warning">T</span>rade</span>
                </a>
            </div>
        </header>
        <main>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <div class="card card-image">
                            <div class="card-body p-5">
                                <div class="card-title fw-bolder text-center mb-3">
                                    <h2 class="text-white fw-bolder">SIGN-IN</h2>
                                </div>
                                <form action="" method="post">
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="" class="text-white">Username</label>
                                                <input type="text" class="form-control" name="user" value="<?= $username ?? ''?>">
                                            </div>
                                            <span class="text-danger"><?= $usernameError ?? ''?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="" class="text-white">Email</label>
                                                <input type="email" class="form-control" name="email" value="<?= $email ?? ''?>">
                                            </div>
                                            <span class="text-danger"><?= $emailError ?? ''?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="" class="text-white">First Name</label>
                                                <input type="text" class="form-control" name="fName" value="<?= $fName ?? ''?>">
                                            </div>
                                            <span class="text-danger"><?= $fNameError ?? ''?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="" class="text-white">Last Name</label>
                                                <input type="text" class="form-control" name="lName" value="<?= $lName ?? ''?>">
                                            </div>
                                            <span class="text-danger"><?= $lNameError ?? ''?></span>
                                        </div>
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="" class="text-white">Password</label>
                                                <input type="password" class="form-control" name="pwd" value="<?= $pwd ?? ''?>">
                                            </div>
                                            <span class="text-danger"><?= $pwdError ?? ''?></span>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-4">
                                                <label for="" class="text-white">Confirm Password</label>
                                                <input type="password" class="form-control" name="pwd2" value="<?= $pwd2 ?? ''?>">
                                            </div>
                                            <span class="text-danger"><?= $pwd2Error ?? ''?></span>
                                        </div>
                                    </div>
                                    <div class="text-end mb-4">
                                        <button type="submit" class="btn-dark-success rounded-2 text-white" name="registerBtn">Sign Up</button>
                                    </div>
                                    <div class="text-end">
                                        <a href="login.php" class="text-white">Already have an account?</a>
                                    </div>
                                </form>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </main>
    </div>
    <div class="py-5"></div>
</body>

</html>
