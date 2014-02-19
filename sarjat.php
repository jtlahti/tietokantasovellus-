<?php

 require_once 'libs/utilities.php';
 require_once 'libs/models/sarjantiedot.php';
 
 $kilpailu =$_GET['id'];

    $lista = sarjantiedot::getsarjat($kilpailu);
 
 naytaNakyma("sarjojensivu", array(
    
    "kirjautunut" => isset($_SESSION['kirjautunut']),
    "lista"=> $lista,
    "kilpailu"=>$kilpailu 
   
    ));

