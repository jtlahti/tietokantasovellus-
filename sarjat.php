<?php

 require_once 'libs/utilities.php';
 require_once 'libs/models/sarjantiedot.php';
 
 $kilpailu =$_GET['id'];

    $lista = sarjantiedot::getsarjat($kilpailu);
 
 naytaNakyma("sarjojensivu", array(
    
    "lista"=> $lista,
    "kilpailu"=>$kilpailu 
   
    ));

