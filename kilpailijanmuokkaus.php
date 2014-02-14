<?php
 session_start();

  if (!isset($_SESSION['kirjautunut'])) {
    
     header('Location: loginkilpailija.php');
     exit;
  }

 require_once 'libs/utilities.php';
 require_once 'libs/models/kilpailijantiedot.php';

 $sarja =$_GET['id'];
 
 $lista = kilpailijantiedot::getkilpailijat($sarja);
 
 naytaNakyma("kilpailijalistanmuokkaussivu", array(
    
    "lista"=> $lista
   
    ));
