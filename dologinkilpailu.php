<?php

require_once 'libs/utilities.php';
require_once 'libs/models/ytunnukset.php';


if (empty($_POST["username"]) && empty($_POST["password"])) {

    naytaNakyma("kirjautuminenkilpailu");
    exit();
}

$tunnus = $_POST["username"];

if (empty($_POST["password"])) {
    naytaNakyma("kirjautuminenkilpailu", array(
        'kayttaja' => $tunnus,
        'virhe' => "Kirjautuminen epäonnistui! Et antanut salasanaa.",
    ));
}

$salasana = $_POST["password"];

if (kilpailu::gettunnukset($tunnus, $salasana)) {
    $_SESSION['ykirjautunut'] = $tunnus;
    header('Location: kilpailunmuokkaus.php');
} else {
    naytaNakyma("kirjautuminenkilpailu", array(
        'kayttaja' => $tunnus,
        'virhe' => "Kirjautuminen epäonnistui! Antamasi tunnus tai salasana on väärä."
    ));

    session_start();

    if (voikoKirjautua(tunnus, $_POST[salasana])) {
        
    }
}