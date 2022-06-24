<?php  
    session_start();
    require_once '../connect_db.php'
    $jql = 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>multiple dropdown</title>

    <script type="text/javascript" src="<? echo $jql; ?>"> </script>
    <script type="text/javascript"></script>

    <script>    
        ($function(){
            var defaultOption = '<option value=""> --------select---------</option>';
            var loadingImage =  '<img src="image/loading4.gif" alt="loading">'

            $('#selworkgroup').change(function()){
            $("#selworkline").html(defaultOption);
            $("#seldepartment").html(defaultOption);
            $ajax({
                url: "jsonAction.php",
                data:({ nextlist : 'workline' ,
                datatype: "json",
                beforeSend:function(){
                    $waitworkline.html(loading);
                },
                success: function(json){
                    $("#waitworkline").html("");
                    $.each(json,function(index,value){
                        $("#selworkline").append('<option value="'+value.workline_id +value.workline_id'></option>'>)
                    });
                }
            });
            });
        }
        });
        

                $('#selworkline ').change (function){
                    $.ajax({
                        url : "jsonActionn.php";
                        data : ({ nextList : 'department',department_id :$('#department').val()}),
                        datatype : "json",
                        beforeSend : function(){
                            $("#waitdepartment").html(loadingImage);
                        },
                        success:function(json){
                            $("#waitdepartment").html("");
                            $.each (json,function(index,value){
                                $("#seldepartment").append('<option value="' +value.department_id "'>' + value.department_id +' </option>');
                            
                            });
                        }
                    });
                });
            });

</script>
</head>
<body>
                <label> workgroup : </label>
                <select id="selworkgroup">
                <option value=""> ---- select ---- </option>
                <?php   $result = mysqli_query(" SELECT workgroup_id , workgroup_name 
                                            FROM workgroup ORDER BY convert(workgroup_name using utf8) asc;");
                                            
                                            while ($row = mysqli_fetch_assoc($result)){
                                                echo '<option value="',$row['workgroup_id'], '">',
                                                $row['wokgroup_name'], '</option>';
                                            }
                ?>
                </select>

                <lebel> workline </label>
                <select id="selworkgroup">
                    <option value=""> ----- select ----- </option>
                    <?php 
                        $result = mysqli_query("SELECT workline_id,workline_name FROM workline ORDER BY convert(workline_id using utf8)ASC;
                        ");

                        while ($row = mysqli_fetch_assoc($result)){
                            echo '<option value=" ',$row['workline_id'],'"> '$row['workline_name'],' </option>';
                        }
                    
                    
                    ?>
                    </select>

                    <label>workline</label>
                    <select id="selworklie"> </select>
                    <option value=""> ----- select ----- </option>
                    </select><span id="waitworkline"></span>

                    <labal>department </label>
                    <select id="seldepartment"> </select>
                    <option value=""> -----select ------</option>
                    </select> <span id="waitdepartment"></span>
</body>
</html>