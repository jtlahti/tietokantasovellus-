<?php

session_start();
if (!isset($_SESSION['kirjautunut'])) {

    header('Location: loginkilpailija.php');
    exit;
}

require_once 'libs/utilities.php';
require_once 'libs/models/kilpailijantiedot.php';

$sarja = $_GET['id'];

if (empty($_POST)) {
    naytaNakyma("kilpailijanlisaaminen", array(
        "sarja" => $sarja
    ));
}


$uusikilpailija = new kilpailijantiedot();
$uusikilpailija->sarja = $_POST["sarja"];
$uusikilpailija->nimi = $_POST["nimi"];
$uusikilpailija->seura = $_POST["seura"];
$uusikilpailija->emit = $_POST["emit"];
$uusikilpailija->loppuaika = $_POST["loppuaika"];


$uusikilpailija->insertkilpailija();
$_SESSION['ilmoitus'] = "Kilpailija lisätty onnistuneesti!";
header('Location: kilpailijanmuokkaus.php?id=' . $uusikilpailija->sarja);


