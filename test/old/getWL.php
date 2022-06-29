<?php 
     session_start();
     require_once 'connect_db.php';

     $db_handle = new DBController();
     if(!empty($_POST["workline_id"])){
         $query = "SELECT * FROM workline WHERE workline_id .$_POST["workline_id"].' ORDER BY workline_name ASC ";
         $result = $db_handle->runQery($query);
         ?>
         <option value disable selected > workline </option>
        <?php
            foreach ($results as $workline)
        ?>

<option value="<? echo $workline['id'];?>" <? echo $workline['workline_name']?> > </option >
<? } ?>