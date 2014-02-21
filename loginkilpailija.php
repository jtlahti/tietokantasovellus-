<?php

require_once 'libs/utilities.php';
require_once 'libs/models/tunnukset.php';

$kilpailija = $_GET['id'];

naytaNakyma("kirjautuminenkilpailija", array(
    "kilpailija" => $kilpailija
));
exit();


