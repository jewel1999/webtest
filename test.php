<?php
        session_start();
        require_once 'connect_db.php';

        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Multiple Dropdown </title>
 
    <link href="assets/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<<<<<<< HEAD
    


=======
<div class="container my-5">
    <div class="card">
        <div class="card-body">
            <h3>การทำ Multiple Dropdown ด้วย Ajax </h3>
            <form>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="department">Department</label>
                        <select name="department_id" id="department" class="form-control">
                            <option value="">select department</option>
                            <?php while($result = mysqli_fetch_assoc($query)): ?>
                                <option value="<?=$result['id']?>"><?=$result['department']?></option>
                            <?php endwhile; ?>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="workgroup">Workgroup</label>
                        <select name="workgroup_id" id="workgroup" class="form-control">
                            <option value="">select workgroup</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="workline">Workline</label>
                        <select name="workline_id" id="workline" class="form-control">
                            <option value="">select workline</option>
                        </select>
                    </div>
                </div>                
            </form>
        </div>
    </div>
</div>
 
<script src="assets/jquery.min.js"></script>
<script src="assets/script.js"></script>
>>>>>>> e316fe89715b1e02e60792212f45ff29a4b0de6a
</body>
</html>
<?php
