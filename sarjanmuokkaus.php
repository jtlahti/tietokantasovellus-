<?php
 session_start();

   $kilpailu =$_GET['id']; 
 
  if (!isset($_SESSION['kirjautunut'])) {
    
     header('Location: loginsarja.php?id='.$kilpailu);
     exit;
  }

 require_once 'libs/utilities.php';
 require_once 'libs/models/sarjantiedot.php';
 
 $lista = sarjantiedot::getsarjat($kilpailu);
 
 naytaNakyma("sarjalistanmuokkaussivu", array(
    "kilpailu"=>$kilpailu, 
    "lista"=> $lista   
    ));




