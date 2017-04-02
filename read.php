<?php
  
  echo "asdf teste";

  function getUsers()
  {  
    echo "asdf"; 
    //create connection
    include "connect_sql.php";
  
    //create query
    $sql = "SELECT USERID FROM USERS";
    $result = mysqli_query($conn, $sql);
    
    //show results
    $userid ="";
    if($result) 
    {
      while($row = mysqli_fetch_array($result))
      {
        $return = $row['userid'];
      }
    } else { 
      echo "asdf read.php";
    }
            
    return $return;
    
  }
    
?>
