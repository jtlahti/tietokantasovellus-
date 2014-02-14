<?php
 session_start();

  if (!isset($_SESSION['kirjautunut'])) {
    
     header('Location: loginsarja.php');
     exit;
  }

 require_once 'libs/utilities.php';
 require_once 'libs/models/sarjantiedot.php';

    $lista = sarjantiedot::getsarjat();
 
 naytaNakyma("sarjalistanmuokkaussivu", array(
    
    "lista"=> $lista   
    ));




