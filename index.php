<?php
include "config.php";

if(!isset($_SESSION['pa_app_customer'])){
    $_SESSION['loginMsg'] = "you have to login first";
    header("Location: login.php");
}

else{
    $user = $_SESSION['pa_app_customer'];
    $query = "SELECT * FROM customers WHERE id=$user";
    $dbFetch = mysqli_query($dbConn, $query);
    $userData = mysqli_fetch_assoc($dbFetch);
    
    $userName = $userData['username'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.13.1/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nova+Mono&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
  <!-- Sticky Navbar -->
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark px-4 rounded-bottom-2 sticky-top mb-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
      <img src="https://th.bing.com/th/id/OIP.LE96UejtxIeDhRUbfaPKIAHaGP?w=214&h=180&c=7&r=0&o=7&pid=1.7&rm=3" 
           alt="logo" width="30" class="rounded-circle">
      <span class="text-black fw-bolder">
        <span class="text-warning">T</span>rade
      </span>
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <div class="d-flex w-100 align-items-center">

        <!-- Left nav links -->
        <ul class="navbar-nav d-flex ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Shopping</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>

          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Breakdown</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item text-primary" href="#"><i class="bi bi-person-badge me-2"></i>Settings</a></li>
              <li><a class="dropdown-item text-secondary" href="#"><i class="bi bi-people-fill me-2"></i>Community</a></li>
              <li><a class="dropdown-item text-success" href="#"><i class="bi bi-lock-fill me-2"></i>Security</a></li>
            </ul>
          </li>

          <!-- Offcanvas trigger -->
          <li class="nav-item">
            <a class="nav-link fw-bolder text-white" href="#" type="button" data-bs-toggle="offcanvas" data-bs-target="#right">
              <i class="bi bi-list text-white-50"></i>
            </a>
          </li>
        </ul>

        <!-- Middle welcome message -->
        <div class="ms-auto">
          <ul class="nav">
            <li class="nav-item">
              <a href="#" class="nav-link text-white">
                Welcome <span class="text-success">to Express</span>
                <span class="text-warning fw-bolder"><?= strtoupper($userName) ?></span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Right logout -->
        <ul class="navbar-nav d-flex flex-end">
          <li class="nav-item">
            <a href="logout.php" class="nav-link">Logout</a>
          </li>
        </ul>

      </div>
    </div>
    </div>
  </nav>

    <header>
  <!-- Hero Section -->
  <div class="container-fluid px-0">
    <div class="hero  text-white">
      <div class="container-fluid">
        <div class="row g-4 px-4">
          <div class="col-md-6">
            <h1 class="fw-bolder display-4">BEST SOLUTION FOR</h1>
            <h1 class="fw-bolder display-4">YOUR BUSINESS</h1>
            <div class="pt-2">
              <p class="py-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, optio?</p>
              <button class="btn btn-outline-dark btn-warning text-black rounded-pill">Welcome</button>
              <button class="btn btn-outline-dark bg-white text-black rounded-pill"><i class="bi bi-play-fill"></i>Play</button>
            </div>

            <div class="input-group mt-5 mb-5">
              <input type="text" class="form-control" placeholder="Search">
              <button class="btn btn-success" type="submit">Go</button>
            </div>

            <div class="pt-4">
              <a href="mailto:" class="nav-link">
                <h6 class="mt-2">+234 816 288 9574</h6>
              </a>
              <div class="d-flex">
                <a href="" class="nav-link"><i class="bi bi-facebook"></i><span class="fw-bolder ms-1">Facebook</span></a>
                <a href="" class="nav-link"><i class="bi bi-youtube ms-3"></i><span class="fw-bolder ms-1">Youtube</span></a>
                <a href="" class="nav-link"><i class="bi bi-twitter ms-3"></i><span class="fw-bolder ms-1">Twitter</span></a>
              </div>
            </div>
          </div>

          <!-- Right side with images + carousel -->
          <div class="col-md-6">
            <div class="row g-2">
              <div class="col-md-6">
                <div class="position-relative">
                  <img src="https://wallpaperaccess.com/full/449895.jpg" alt="" class="img-fluid rounded-2" style="height:200px; width:100%;">
                  <h6 class="position-absolute top-0 text-black fw-bolder fs-3 p-5">
                    4.9 <i class="bi bi-star-fill text-warning"></i>
                    <p class="fs-6 fw-light">Lorem ipsum dolor sit amet.</p>
                  </h6>
                </div>
              </div>
              <div class="col-md-6">
                <div class="position-relative">
                  <img src="https://img.freepik.com/premium-vector/green-background-modern-style-green-soft-light-color-blend-vector-illustration_213497-2236.jpg" alt="" class="img-fluid rounded-2" style="height:200px; width:100%;">
                  <h6 class="position-absolute top-0 text-warning fw-bolder fs-3 px-5">80K</h6>
                  <p class="position-absolute p-2 fw-light text-white">Lorem ipsum dolor sit amet.</p>
                </div>
              </div>
              <div class="col-md-12">
                <div id="demo" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                  </div>
                  <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img src="https://i.pinimg.com/736x/a7/86/7c/a7867c98152ea46859168cbb2743ae64.jpg" alt="Los Angeles" class="d-block w-100 img-fluid rounded-2" style="height:300px; object-fit:cover;">
                    </div>
                    <div class="carousel-item">
                      <img src="https://img.fantaskycdn.com/27ab9c01b554460e4b4e39120b0d5aa9_1024x.png" alt="Chicago" class="d-block w-100 img-fluid rounded-2" style="height:300px; object-fit:cover;">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end right side -->
        </div>
      </div>
    </div>
  </div>
</header>

    <main>
        <section class="mb-2">
            <div class="container mt-4">
                <div class="row g-5 ">
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center mb-2">
                            <div class="btn btn-outline-dark bg-dark-success px-4 rounded-pill text-white"><i class="bi bi-credit-card"></i></div>
                        </div>
                        <div class="text-center text-white">
                            <h6>Credit card</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ab accusamus provident et.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center mb-2">
                            <div class="btn btn-outline-dark bg-dark-success px-4 rounded-pill text-white"><i class="bi bi-credit-card"></i></div>
                        </div>
                        <div class="text-center text-white">
                            <h6>Management</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ab accusamus provident et.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="d-flex justify-content-center mb-2">
                            <div class="btn btn-outline-dark bg-dark-success px-4 rounded-pill text-white"><i class="bi bi-credit-card"></i></div>
                        </div>
                        <div class="text-center text-white">
                            <h6>Applicant</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet ab accusamus provident et.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="py-4 my-4"></div>
        
            <section class="mb-3">
  <div class="container-fluid px-4">
    <div class="card shadow-lg border-0 rounded-5 border-0 border-top border-bottom border-5 border-black rounded-start-5 card-image-2 ">
      <div class="card-body">
        <div class="row g-4 py-1 px-2">
          
          <div class="col-12">
            <div class="py-4 text-center">
              <h1 class="font text-white">PROTECT YOUR INVESTMENTS WITH</h1>
              <h1 class="font text-white">EXACTING PRECISION</h1>
              <p class="mb-5 text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam repudiandae atque similique suscipit?</p>
            </div>
          </div>

          <!-- Card 1 -->
          <div class="col-sm-12 col-md-4">
            <div class="card shadow-lg h-100 border-0">
              <img class="card-img-top rounded-top" src="https://i.pinimg.com/1200x/c8/1c/f8/c81cf8bca5c20e72a0829eb749c90ea1.jpg" alt="Card image" style="height: 220px; object-fit: cover;">
              <div class="card-body text-center">
                <h4 class="card-title text-warning">Defend your property</h4>
                <p class="card-text">Accurately protect your investments.</p>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-sm-12 col-md-4">
            <div class="card shadow-lg h-100 border-0">
              <div class="card-body text-center">
                <h4 class="card-title fw-bolder">Secure your assets</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <img src="https://th.bing.com/th/id/OIP.m5ly8EKP4fSpyHnKbM1DBAHaF-?w=227&h=183&c=7&r=0&o=5&pid=1.7" alt="" class="img-fluid rounded" style="max-height: 150px; object-fit: cover;">
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-sm-12 col-md-4">
            <div class="card shadow-lg h-100 border-0">
              <div class="card-body text-center">
                <h4 class="fw-bolder">Your savings precisely</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                <div class="card shadow border-0 rounded-4 mx-auto" style="width: 150px;">
                  <div class="card-body">
                    <h4>$234.97K</h4>
                    <h6><i class="bi bi-star-fill text-warning me-1"></i><small>Cheap price</small></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div><!-- row -->
      </div><!-- card-body -->
    </div><!-- card wrapper -->
  </div>
</section>
        <div class="py-5 my-5"></div>
        <section>
            <div class="container">
                <div class="card shadow-lg border-0 rounded-5 ">
                    <div class="row  g-0">
                        <div class="col-md-6 p-5 border-topper">
                            <div class="">
                                <h1 class="fw-bolder">LET'S START SENDING</h1>
                                <h1 class="fw-bolder">YOUR MONEY</h1>
                                <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi distinctio dignissimos animi adipisci optio, sit fuga ipsa earum fugit error.</p>
                                <i class="bi bi-repeat text-dark bg-light me-2"></i><span class="fw-bolder">Lorem ipsum dolor sit amet.</span><span>
                                    <p class="ms-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor maiores ratione adipisci dolorum.</p>
                                </span><i class="bi bi-repeat text-dark bg-light me-2"></i><span class="fw-bolder">Lorem ipsum dolor sit amet.</span><span>
                                    <p class="ms-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor maiores ratione adipisci dolorum.</p>
                                </span>
                            </div>
                        </div>
                        <div class="col-md-6  right-image p-5 ">
                            <div class="card-image-overlay">
                                <h1 class="text-white-50 fw-bolder">Lorem ipsum dolor sit.</h1>
                                <h1 class="fw-bolder text-white-50">Lorem, ipsum.</h1>
                                <p class=" text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi distinctio dignissimos animi adipisci optio, sit fuga ipsa earum fugit error.</p>
                                <i class="bi bi-repeat text-dark me-2"></i><span class="fw-bolder text-white-50">Lorem ipsum dolor sit amet.</span><span>
                                    <p class="ms-4 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor maiores ratione adipisci dolorum.</p>
                                </span><i class="bi bi-repeat text-dark  me-2"></i><span class="fw-bolder text-white-50">Lorem ipsum dolor sit amet.</span><span>
                                    <p class="ms-4 text-white-50">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor maiores ratione adipisci dolorum.</p>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <div class="circle"></div>
        <div class="py-4 my-4"></div>
    </main>
    <footer></footer>
    <script src="assets/bs-5/bootstrap-5.3.7-dist/js/bootstrap.bundle.min.js"></script>

    <div class="offcanvas offcanvas-end text-bg-dark" id="right">
        <div class="offcanvas-header">
            <h1 class="offcanvas-title">Layout</h1>
        </div>
        <div class="offcanvas-body">
        </div>
    </div>
</body>

</html>
