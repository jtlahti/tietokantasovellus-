<?php

 require_once 'libs/utilities.php';
 require_once 'libs/models/kilpailijantiedot.php';

$sarja =$_GET['id'];

 $lista = kilpailijantiedot::getkilpailijat($sarja);
 
 naytaNakyma("lopputulostensivu", array(
    
    "lista"=> $lista,
    "sarja"=>$sarja     
    ));
