<?php
  
    require_once 'libs/utilities.php';
    require_once 'libs/models/tunnukset.php';
    
    $sarja =$_GET['id'];

    if (empty($_POST["username"]) && empty($_POST["password"]) ) {

    naytaNakyma("kirjautuminensarja", array(
     "sarja"=>$sarja         
    ));    
    exit();     
  }

  $tunnus = $_POST["username"];
  
    if (empty($_POST["password"])) {
    naytaNakyma("kirjautuminensarja", array(
      "sarja"=>$sarja  ,
      'kayttaja' => $tunnus,
      'virhe' => "Kirjautuminen epäonnistui! Et antanut salasanaa.",
    ));
  }

  
  $salasana = $_POST["password"];
  
  
  if (sarja::gettunnukset($tunnus, $salasana)) {
    $_SESSION['kirjautunut'] = $tunnus;
   
    header('Location: sarjanmuokkaus.php?id='.$sarja);
  } else {
    
     naytaNakyma("kirjautuminensarja", array(
      "sarja"=>$sarja  ,
      'kayttaja' => $tunnus,
      'virhe' => "Kirjautuminen epäonnistui! Antamasi tunnus tai salasana on väärä."
    ));
     
     session_start();

  if (voikoKirjautua(tunnus, $_POST[salasana])) {
    
  }
  
  }
