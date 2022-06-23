<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

 

    <script>  
    
    function getDep(val){
        $.ajax({
            type:"POST",
            url:"getDep.php"
            data:'department_id'+val,
            success:fuction(data){
                $("#department-list").html(data);
                getWG();
            }
        });
    }

    function getWG(val){
        $.ajax({
            type: "POST",
            url:"getWG.php",
            data:'workgroup_id'+val,
            success:function(data){
                $('#workgroup-list').html(data);
            }
        })
    }
    
    
    
    
    </script>

    <!-- department input -->
    <div class="container " >
    <form class="position-absolute top-50 start-50 translate-middle">
    <div class="mb-3 ">
        <div class="input-group mb-3">  
        <label class="input-group-text" >option</label>
        <select name="department" id="department-list" class="form-select" onchange="getWG(this.value)";>
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>

        <!-- workgroup input -->
        <div class="input-group mb-3">
     
        <label class="input-group-text" for="inputGroupSelect01">option</label>
        <select name="workgroup" class="form-select" id="workgroup-list" onchange="getWL(this.value)";>
            <option selected id="selectDep">Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>

        <!-- workline input -->
        <div class="input-group mb-3">
        
        <label class="input-group-text" for="inputGroupSelect01">option</label>
        <select name="workline" class="form-select" id="workline-list">
            <option selected>Choose...</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
        </div>


        </div>

        <script src= "https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>