<? 
    session_start();
    require_once '../connect_db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form action="user_hrm_update.php" method="POST">
        <div class="form-group">
            <label> firstneme </label>
            <input type="text" name="fname_thai">
        </div>

        <div class="form-group" >
            <label> lastname </label>
            <input type="text" name="lname_thai">
        </div>

        <div class="form-group">
            <label> firstname (english)<label>
            <input type="text" name="fname_eng">
        </div>

</form>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?
    

?>



</body>
</html>