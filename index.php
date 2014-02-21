<?php

require_once 'libs/utilities.php';
require_once 'libs/models/kilpailuntiedot.php';

$lista = kilpailuntiedot::getkilpailut();

naytaNakyma("etusivu", array(
    "lista" => $lista
));

