<?php 
     session_start();
     require_once 'connect_db.php';

     $db_handle = new DBController();
     if(!empty($_POST["department_id"])){
         $query = "SELECT * FROM department WHERE department_id .$_POST["department_id"].' ORDER BY department_name ASC ";
         $result = $db_handle->runQery($query);
         ?>
         <option value disable selected > department </option>
        <?php
            foreach ($results as $department)
        ?>

<option value="<? echo $department['id'];?>" <? echo $department['department_name']?> > </option >
<? } ?>