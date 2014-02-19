<?php
 session_start();

 $sarja =$_GET['id']; 
 
 if (!isset($_SESSION['kirjautunut'])) {
    
     header('Location: loginkilpailija.php');
     exit;
  }

 require_once 'libs/utilities.php';
 require_once 'libs/models/kilpailijantiedot.php';

 $lista = kilpailijantiedot::getkilpailijat($sarja);
 
 naytaNakyma("kilpailijalistanmuokkaussivu", array(
    "kilpailu"=>$sarja, 
    "lista"=> $lista
   
    ));
