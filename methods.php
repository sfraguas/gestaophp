<?php

  //este arquivo contém os metodos usados
  //para acessar os metodos, usar include methods.php e então chamar o methodo
  //metodos aqui nao foram testados ainda!!!!

  include "connect_sql.php";

  function getPalestrasRegistradas($user, $palestra) {
    $sql = "SELECT PR.PALESTRAID, P.PALESTRA FROM PR PALESTRASREGISTRADAS, P PALESTRAS WHERE PR.USERID = '".$user."' AND P.PALESTRAID = PR.PALESTRAID";
    $result = mysqli_query($conn, $sql);
    $return ="";
    if($result)
    {
      while($row = mysqli_fetch_array($result))
      {
        $return += $row[USERID] ." - ";
        $return += $row[PALESTRA] . " ------------ ";
      }
    } else {
      echo "Usuário não esta registrado em nenhuma palestra";
    }
    return $return;
  }

  function setUser($name){
    $sql = "INSERT INTO USER VALUE('".$name.")";
    mysqli_query($conn,$sql);
  }

  function registerPalestra($codPalestra, $user){
    $sql = "INSERT INTO PALESTRASREGISTRADAS SET PALESTRAID = (SELECT PALESTRAID FROM PALESTRA WHERE PALESTRAID = '".$codPalestra."'),
                                                 USERID = (SELECT USERID FROM USER WHERE USERID = '".$user."')";
    mysqli_query($conn,$sql);
  }


  function isLogged(){
  
  }
