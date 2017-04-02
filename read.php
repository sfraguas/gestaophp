<?php

  echo "read pagina \\n";

  function getUsers()
  {   
    //create connection
    include "connect_sql.php";
  
    //create query
    $sql = "SELECT USERID FROM USERS";
    $result = mysqli_query($conn, $sql);
    
    //show results
    $return ="oi";
    echo "antes do if";
    if($result) 
    {
      echo "dentro do if; antes do while";
      while($row = mysqli_fetch_array($result))
      {
        echo "while";
        $return = $row[USERID];
        echo $row[USERID];
        echo "depois de userid";
      }
    } else { 
      echo "Não existem usuários";
    }
            
    return $return;
    
  }
    
?>
