<?php 
    $nextList = isset(_$GET['nextList'])? $_GET['nextList']: '';

    switch($nextList){
        case 'workline':
            $workgroup_id = isset($_GET['workgroup_id']) ? $_GET['workgroup']:'';
            $result = mysqli_query("SELECT workline_id,worklins_name  FROM workline
            WHERE workgroup_id ='{$workgroup_id}' ORDER BY convert(workline_name using utf8)ASC;");
        break;

        case 'department':
            $department_id = isset($_GET['department_id']) ? $_GET ['department_id']:'';
            $result = mysqli_query("SELECT department_id,department_name FROM department
            WHERE department_id = '{$department_id}' ORDER BY convert(department_name using utf8)ASC;");
    }
        $data = array();
        while ($row = mysqli_fetch_assoc($result)){
            $data[] = $row;           
        }
        //print the json representation of a value
        echo json_encode($data);

?>