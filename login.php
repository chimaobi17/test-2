<?php
global $dbConn;
include "config.php";
if(isset($_SESSION['loginMsg'])){ echo $_SESSION['loginMsg']; unset($_SESSION['loginMsg']);}

if(isset($_POST['loginBtn'])){
    $user = $_POST['user'];
    //$pwd = $_POST['pwd'];
    $pwd = md5($_POST['pwd']);
    
    $query = "SELECT * FROM customers WHERE username='$user' AND pwd='$pwd'";
    $dbFetch = mysqli_query($dbConn, $query);
    $rows = mysqli_num_rows($dbFetch);
    if($rows > 0){
        $uData = mysqli_fetch_assoc($dbFetch);
        $_SESSION['pa_app_customer'] = $uData['id'];
        $user = strtoupper($user);
        echo "welcome  '{$user}', you will be signed in shortly";
        header("Refresh: 5, url=index.php");
    }
    else{
        echo "could not login".mysqli_error($dbConn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>log-in</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Mono&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css">
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
            <section>
                <div class="container mt-5">
                    <div class="row justify-content-center">
                        <div class="col-md-7">
                            <div class="card card-image rounded-4">
                                <div class="card-body p-5">
                                    <div class="card-title text-center text-white">
                                        <h2 class="fw-bolder">LOG-IN</h2>
                                    </div>
                                    <form action="" method="post">
                                        <label for="" class="text-white">Username <i class="bi bi-person-fill"></i></label>
                                        <input type="text" class="form-control mb-4" name="user">
                                        <label for="" class="text-white">Password <i class="bi bi-lock-fill text-white"></i></label>
                                        <input type="password" class="form-control mb-4" name="pwd">
                                        <div class="text-end mb-4">
                                            <button class="btn-dark-success rounded-2 text-white" name="loginBtn">Login</button>
                                        </div>
                                        <div class="text-end">
                                            <a href="signin.php" class="text-white">Dont have an account?<br>Create account</a>
                                        </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
