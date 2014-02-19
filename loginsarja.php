<?php

      require_once 'libs/utilities.php';
    require_once 'libs/models/tunnukset.php';
    
    $sarja =$_GET['id'];

    naytaNakyma("kirjautuminensarja", array(
     "sarja"=>$sarja         
    ));    
    exit();     
  
