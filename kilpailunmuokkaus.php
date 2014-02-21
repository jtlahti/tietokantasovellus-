<?php

session_start();

if (!isset($_SESSION['ykirjautunut'])) {

    header('Location: loginkilpailu.php');
    exit;
}

require_once 'libs/utilities.php';
require_once 'libs/models/kilpailuntiedot.php';

$lista = kilpailuntiedot::getkilpailut();

naytaNakyma("kilpailulistanmuokkaussivu", array(
    "lista" => $lista
));
