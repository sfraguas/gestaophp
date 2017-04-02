<?php

  function getUsers()
  {   
    //create connection
    include "connect_sql.php";
  
    //create query
    $sql = "SELECT USERID FROM USERS";
    $result = mysqli_query($conn, $sql);
    
    //show results
    $return ="";
    echo $result;
    if($result) 
    {
      while($row = mysqli_fetch_array($result))
      {
        $return = $row['userid'];
      }
    } else { 
      echo "| asdf read.php |";
    }
            
    return $return;
    
  }
    
?>
