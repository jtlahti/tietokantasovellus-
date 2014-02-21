<?php

require_once 'libs/utilities.php';
require_once 'libs/models/kilpailijantiedot.php';

$sarja = $_GET['id'];

$lista = kilpailijantiedot::getkilpailijat($sarja);

naytaNakyma("lopputulostensivu", array(
    "kirjautunut" => isset($_SESSION['kirjautunut']),
    "lista" => $lista,
    "sarja" => $sarja
));
