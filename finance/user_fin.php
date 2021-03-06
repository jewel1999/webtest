<?php  
        session_start();
        require_once '../connect_db.php';

        /*if(!isset($_SESSION['user_login'])){    --ถ้าหากเปิดคอมเม้น จะเข้าใช้งานไม่ได้
            $_SESSION['error']= 'กรุณาเข้าสู่ระบบ !' ;
            header('location:index.php');
        }*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT-Support</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    
<!-- header section starts      -->

<header>

        <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">IT-Support</a>
                    <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item px-4">
                        <a class="nav-link" href="#">computer</a>
                        </li>
                        <li class="nav-item px-2">
                        <a class="nav-link" href="#">printer</a>
                        </li>
                        <li class="nav-item px-2 ">
                        <a class="nav-link" href="#">hardware</a>
                        </li>
                        <li class="nav-item px-2">
                        <a class="nav-link" href="#">repair-notics</a>
                        </li>

                        <li class="nav-item px-2">
                        <a class="nav-link" href="#">deviceself system</a>
                        </li>
                </div>
                <a href="../logout.php" class="btn ">Logout</a>
                </nav>
               

</header>
</div>

<!-- header section ends-->


<!-- home slide section start-->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <!-- #1 -->
            <div class="swiper-slide slide">
                <div class="content">
                    <span>details about computers</span>
                    <h3></h3>
                    <p>Show details of the printers which will consist of number work status ,the owner of he machine etc.</p>
                   
                    
                </div>
                <div class="image">
                    <img src="../pic/comservice.jpg" alt="">
                </div>
            </div>
            </div>
            
           

            
        </div>
        <div class="swiper-pagination"></div>

    </div>

</section>



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="../user.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- home section ends -->
</body>
</html>