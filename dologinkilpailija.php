<?php
  
    require_once 'libs/utilities.php';
    require_once 'libs/models/tunnukset.php';
    

    if (empty($_POST["username"]) && empty($_POST["password"]) ) {

    naytaNakyma("kirjautuminenkilpailija");
    exit(); 
  }

  $tunnus = $_POST["username"];
  
    if (empty($_POST["password"])) {
    
      naytaNakyma("kirjautuminenkilpailija", array(
          
      'kayttaja' => $tunnus,
      'virhe' => "Kirjautuminen epäonnistui! Et antanut salasanaa.",
    ));
  }

  
  $salasana = $_POST["password"];
  
  
  if (sarja::gettunnukset($tunnus, $salasana)) {
    $_SESSION['kirjautunut'] = $tunnus;
   
    header("Location: kilpailijanmuokkaus.php");
  } else {
    
     naytaNakyma("kirjautuminenkilpailija", array(
      
      'kayttaja' => $tunnus,
      'virhe' => "Kirjautuminen epäonnistui! Antamasi tunnus tai salasana on väärä."
    ));
     
     session_start();

  if (voikoKirjautua(tunnus, $_POST[salasana])) {
    
  }
  
  }

