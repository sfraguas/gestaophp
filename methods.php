<?php

  include "connect_sql.php";

  function getUsers() {
    //create connection
    //include "connect_sql.php";
    //create query
    $sql = "SELECT USERID FROM USERS";
    $result = mysqli_query($conn, $sql);
    //show results
    $return ="";
    if($result)
    {
      while($row = mysqli_fetch_array($result))
      {
        $return = $row[USERID];
      }
    } else {
      echo "Não existem usuários";
    }
    return $return;
  }

  function getPalestrasRegistradas() {
    //create connection
    //include "connect_sql.php";
    //create query
    $sql = "SELECT * FROM PALESTRASREGISTRADAS";
    $result = mysqli_query($conn, $sql);
    //show results
    $return ="";
    if($result)
    {
      while($row = mysqli_fetch_array($result))
      {
        $return += $row[USERID] ." - ";
        $return += $row[PALESTRA] . " ------------ ";
      }
    } else {
      echo "Não existem usuários registrados em palestras";
    }
    return $return;
  }

  function getUser(){
    $sql = "SELECT USERID FROM USER WHERE USERID = 'sfraguas'";
    $result = mysqli_query($conn, $sql);
    
    return $row[USERID];
  }

  function setUser($name){
    $sql = "INSERT INTO USERS VALUE('".$name.")";
    mysqli_query($conn,$sql);
  }

  function registerPalestra($codPalestra, $user){
    $sql = "INSERT INTO PALESTRASREGISTRADAS VALUE ('".$codPalestra.",".$user.")";
    mysqli_query($conn,$sql);
  }


  function isLogged(){
    return false;
  }

  function getEvents() {
    //create connection
    include "connect_sql.php";
    //create query
    $sql = "SELECT EVENT_ID FROM EVENTS"; // VERIFICAR A TABELA CORRETAMENTE
    $result = mysqli_query($conn, $sql);
    //show results
    $return ="";
    if($result)
    {
      while($row = mysqli_fetch_array($result))
      {
        $return = $row[USERID];
      }
    } else {
      echo "Não existem usuários";
    }
    return $return;
  }

  function getCombinacoes() {
    //create connection
    include "connect_sql.php";
    //create query
    $sql = "SELECT COMBINACAO_NAME FROM COMBINACAOES"; // VERIFICAR A TABELA CORRETAMENTE
    $result = mysqli_query($conn, $sql);
    //show results
    $return ="";
    if($result)
    {
      while($row = mysqli_fetch_array($result))
      {
        $return = $row[USERID];
      }
    } else {
      echo "Não existem usuários";
    }
    return $return;
  }

?>
