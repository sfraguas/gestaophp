<?php

  function getUsers()
    //create connection
    include "connect_sql.php";
  
    //create query
    $sql = "SELECT USERID FROM USERS";
    $result = mysqli_query($conn, $sql);
    
    //show results
    $userid ="";
    if($result) {
      while($row = mysqli_fetch_array($result){
        echo $row['userid'];
      }
    } else { 
      echo "read.php";
    }
    
?>
