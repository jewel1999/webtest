<? 
    require_once "../connect_db.php";

    is(isset($_GET['workgroup_id'])){
        $workline= $_GET['workgroup_id'];
        $sql = "SELECT workline.worklinw_name FROM workline
        INNER JOIN workgroup ON workline.workgroup_id=workgroup.workgroup=id
        WHERE workgroup.workgroup_name LIKE '($workline)' "; }
?>