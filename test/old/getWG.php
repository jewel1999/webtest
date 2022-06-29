<?php 
     session_start();
     require_once 'connect_db.php';

     $db_handle = new DBController();
     if(!empty($_POST["workgroup_id"])){
         $query = "SELECT * FROM workgroup WHERE workgroup_id .$_POST["workgroup_id"].' ORDER BY workgroup_name ASC ";
         $result = $db_handle->runQery($query);
         ?>
         <option value disable selected > workgroup </option>
        <?php
            foreach ($results as $workgroup)
        ?>

<option value="<? echo $workgroup['id'];?>" <? echo $workgroup['workgroup_name']?> > </option >
<? } ?>