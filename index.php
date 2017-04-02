<?php 
  echo "HELLO WORLD!"; 
  echo "antes do include";
  include "read.php";
  echo "depois do include";
  $user = getUsers();
  echo "depois de chamada do metodo";
  echo $user;
  echo "depois de out do retorno do metodo";
?>
