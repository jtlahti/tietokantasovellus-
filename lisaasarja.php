<?php

 session_start();
  if (!isset($_SESSION['kirjautunut'])) {
    
     header('Location: loginsarja.php');
     exit;
  }
  
  require_once 'libs/utilities.php';
  require_once 'libs/models/sarjantiedot.php';
  
      if (empty($_POST)) {
        naytaNakyma("sarjanlisaaminen");
    }

    $uusisarja = new sarjantiedot();
    $uusisarja->kilpailu = $_POST["kilpailu"];
    $uusisarja->nimi = $_POST["nimi"];

    $uusisarja->putsarja();
    
    header('Location: sarjanmuokkaus.php');