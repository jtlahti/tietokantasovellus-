<?php



 session_start();
  if (!isset($_SESSION['ykirjautunut'])) {
    
     header('Location: loginkipailu.php');
     exit;
  }
  
  require_once 'libs/utilities.php';
  require_once 'libs/models/kilpailuntiedot.php';
  
      if (empty($_POST)) {
        naytaNakyma("kilpailunlisaaminen");
    }

    $uusikilpailu = new kilpailuntiedot();
    $uusikilpailu->paivamaara = $_POST["Päivämäärä"];
    $uusikilpailu->nimi = $_POST["nimi"];
    $uusikilpailu->tunnus = $_POST["Tunnus"];
    $uusikilpailu->salasana = $_POST["Salasana"];

    $uusikilpailu->insertkilpailu();
    
    header('Location: kilpailunmuokkaus.php');

