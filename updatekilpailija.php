<?php

  session_start();
  if (!isset($_SESSION['kirjautunut'])) {
    
     header('Location: loginkilpailija.php');
     exit;
  }

   require_once 'libs/utilities.php';
   require_once 'libs/models/kilpailijantiedot.php';

  $id =$_GET['id'];
  $kilpailija = kilpailijantiedot::etsi($id);
  if ($kilpailija != null) {
    naytaNakyma("kilpailijanmuokkaaminen", array(
      'kilpailijanmuokkaaminen' => $kilpailija,
    ));
    
  } 

$uudettiedot = new kilpailijantiedot();
$uudettiedot->id = $_POST["id"];
$uudettiedot->sarja = $_POST["sarja"];
$uudettiedot->nimi = $_POST["nimi"];
$uudettiedot->seura = $_POST["seura"];
$uudettiedot->emit = $_POST["emit"];
$uudettiedot->loppuaika = $_POST["tulos"];
  
$uudettiedot->updatekilpailija();

header('Location: kilpailijanmuokkaus.php');

