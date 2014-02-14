<?php

 require_once 'libs/utilities.php';
 require_once 'libs/models/sarjantiedot.php';

    $lista = sarjantiedot::getsarjat();
 
 naytaNakyma("sarjojensivu", array(
    
    "lista"=> $lista
   
    ));

