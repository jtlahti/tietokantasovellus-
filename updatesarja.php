<?php

  session_start();
  if (!isset($_SESSION['kirjautunut'])) {
    
     header('Location: loginkilpailija.php');
     exit;
  }

   require_once 'libs/utilities.php';
   require_once 'libs/models/sarjantiedot.php';

  $id =$_GET['id'];
  $sarja = sarjantiedot::etsi($id);
  if ($sarja != null) {
    naytaNakyma("sarjanmuokkaaminen", array(
      'sarjanmuokkaaminen' => $sarja,
    ));
    
  } 

$uudettiedot = new sarjantiedot();
$uudettiedot->id = $_POST["id"];
$uudettiedot->kilpailu = $_POST["kilpailu"];
$uudettiedot->nimi = $_POST["nimi"];

  
if ($_POST["tallenna"]) {
$uudettiedot->updatesarja();
header('Location: sarjanmuokkaus.php?id='.$uudettiedot->kilpailu);
}

if ($_POST['poista']) {
$uudettiedot->deletesarja();
header('Location: sarjanmuokkaus.php?id='.$uudettiedot->kilpailu);
}


