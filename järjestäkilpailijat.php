<?php 

 require_once 'libs/utilities.php';
 require_once 'libs/models/kilpailijantiedot.php';

    $lista = kilpailijantiedot::getkilpailijat();
 
 naytaNakyma("kilpailijalistanmuokkaussivu", array(
    
    "lista"=> $lista
   
    ));

