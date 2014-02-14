<?php

  session_start();
  if (!isset($_SESSION['kirjautunut'])) {
    
     header('Location: loginkilpailija.php');
     exit;
  }

require_once 'libs/utilities.php';
require_once 'libs/models/kilpailijantiedot.php';
  
    if (empty($_POST)) {
        naytaNakyma("kilpailijanlisaaminen");
    }


$uusikilpailija = new kilpailijantiedot();
$uusikilpailija->sarja = $_POST["sarja"];
$uusikilpailija->nimi = $_POST["nimi"];
$uusikilpailija->seura = $_POST["seura"];
$uusikilpailija->emit = $_POST["emit"];
$uusikilpailija->loppuaika = $_POST["loppuaika"];


$uusikilpailija->putkilpailija();

header('Location: kilpailijanmuokkaus.php?id="$data->sarja"');
  
  
