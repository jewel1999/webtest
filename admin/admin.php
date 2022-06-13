<?php  
        session_start();
        require_once '../connect_db.php';

        /*if(!isset($_SESSION['admin_login'])){      - Check for login have a problem -
            $_SESSION['error']= 'กรุณาเข้าสู่ระบบ !' ;
            header('location:index.php');
        }else{
            header('location:admin.php');
        }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php 


        if(isset($_SESSION['admin_login'])){
            $admin_id = $_SESSION['admin_login'];
            $stmt = $conn->query("SELECT * FROM users_login WHERE id = $admin_id");
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        }
    ?>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><h3> Welcome Admin : </h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                
                
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Home
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="admin_com.php">Computer information</a></li>
                    <li><a class="dropdown-item" href="admin_printer.php">Printer  information</a></li>
                    <li><a class="dropdown-item" href="admin_emp.php">Employee information</a></li>
                    <li><a class="dropdown-item" href="admin_rn.php">Repair Notics</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="admin_other.php">Other</a></li>
                </ul>
                
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form> <br>
            <a href="../logout.php" class="btn btn-danger">logout</a> </div>
            </div>
        </div>
    </nav>



    <div class="contianer bg-info mt-6">    </div>
      
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>