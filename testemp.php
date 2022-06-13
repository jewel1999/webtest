<?php 
   /*  require_once 'config/connect.php' */
   session_start();
   require_once 'connect_db.php';
   
   if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $deletestmt = $conn->query("DELETE FROM repair_notices WHERE id = $delete_id");
    $deletestmt->execute();

    if($deletestmt){
        echo"<script> alert('data has been delete successfully ');  </script>";
        $_SESSION['success']="data has been deleted successfully";
        header("refresh:1; url=testemp.php");
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard:test</title>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light  p-3">
        <div class="d-flex col-12 col-md-3 col-lg-2 mb-2 mb-lg-0 flex-wrap flex-md-nowrap justify-content-between">
            <a href="#" class="navbar-brand"> Admin dashboard </a>

            <!-- button for sm-wallpaper -->
            <button class="navbar-toggle d-md-none border-collapse mb-3" type="button" data-toggle="collapse"
            data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle Navigavition"> 
            <span class="navbar-toggle-icon"> </span>
            </button>
        </div>

        <div class="col-12 col-md-4 col-lg-2">
        <input type="text" class="form-contro form-control-dark" placeholder="search" aria-label="serach"> </input>        
    </div>
        <div class="col-12 col-md-5 col-lg-8 d-flex align-items-center justify-content-md-end mt-3 mt-md-0"> 
            <div class="mr-3 mt-1"> 
                <!-- Place this tag where you want the button to render. -->
                    <a class="github-button " href="https://github.com/themesberg/simple-bootstrap-5-dashboard" data-icon="octicon-star" 
                    data-size="large" data-show-count="true" aria-label="Star themesberg/simple-bootstrap-5-dashboard on GitHub">Star</a>
            </div>
            <div class="dropdown">
            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                Hello , jewel
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <hr>
                <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
            </div>

        </div >

    </nav>

    <div class="container-fluid"> 
        <div class="row">
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-black bg-light"> </nav>

        </div>
    </div>






<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>