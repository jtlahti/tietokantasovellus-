<?php

session_start();
if (!isset($_SESSION['kirjautunut'])) {

    header('Location: loginsarja.php');
    exit;
}

require_once 'libs/utilities.php';
require_once 'libs/models/sarjantiedot.php';

$kilpailu = $_GET['id'];

if (empty($_POST)) {
    naytaNakyma("sarjanlisaaminen", array(
        "kilpailu" => $kilpailu
    ));
}

$uusisarja = new sarjantiedot();
$uusisarja->kilpailu = $_POST["kilpailu"];
$uusisarja->nimi = $_POST["nimi"];

$uusisarja->insertsarja();
$_SESSION['ilmoitus'] = "Sarja lisätty onnistuneesti!";
header('Location: sarjanmuokkaus.php?id=' . $uusisarja->kilpailu);
