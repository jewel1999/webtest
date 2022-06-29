<?php
$servername = "localhost";
$username = "root";
$password = "";


try {
  $conn = new PDO("mysql:host=$servername;dbname=display", $username, $password);
  // set the PDO error mode to exception

  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";

  $conn->exec("set names utf8");

  
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

/* for dropdown dynamic selected */
 
  function runQuery($query){
    $result = mysqli_query($this->conn,$query);
    while ($row=mysqli_fetch_assoc($result)){
      $resultset[]=$row;
    }
    if(!empty($resultset)){
      return $resultset;
    }
    function numRow($query){
      $result = mysqli_query($this->conn,$query);
      while ($row=mysqli_fetch_assoc($result)){
        $resultset[] =$row;
      }
      if(!empty($resultset)){
        return $resultset;
      }

      function numRows ($query){
        $result = mysqli_query($this->conn,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
      }
    }
  }
/* for dropdown dynamic selected ended */


?>





