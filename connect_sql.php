<?php
  $url = parse_url(getenv("CLEARDB_DATABASE_URL"));

  $server = $url["host"];
  $username = $url["user"];
  $password = $url["pass"];
  $db = substr($url["path"], 1);

  echo $server;
  echo "\n";
  echo $username;
  echo "\n";
  echo $password;
  echo "\n";  
  echo $db;

  $conn = new mysqli($server, $username, $password, "tables");
  
  if(mysqli_connect_errno()){
    echo "connect_sql.php   - ".mysqli_connect_error();
  }

?>
