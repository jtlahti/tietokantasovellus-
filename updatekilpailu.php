<?php

session_start();
if (!isset($_SESSION['ykirjautunut'])) {

    header('Location: loginkilpailu.php');
    exit;
}

require_once 'libs/utilities.php';
require_once 'libs/models/kilpailuntiedot.php';

$id = $_GET['id'];
$kilpailu = kilpailuntiedot::etsi($id);
if ($kilpailu != null) {
    naytaNakyma("kilpailunmuokkaaminen", array(
        'kilpailunmuokkaaminen' => $kilpailu,
    ));
}

$uudettiedot = new kilpailuntiedot();
$uudettiedot->id = $_POST["id"];
$uudettiedot->paivamaara = $_POST["Päivämäärä"];
$uudettiedot->nimi = $_POST["nimi"];
$uudettiedot->tunnus = $_POST["Tunnus"];
$uudettiedot->salasana = $_POST["Salasana"];



if ($_POST["Tallenna"]) {
    $uudettiedot->updatekilpailu();
    $_SESSION['ilmoitus'] = "Kilpailun tietoja muokattu onnistuneesti!";
    header('Location: kilpailunmuokkaus.php');
}

if ($_POST['Poista']) {
    $uudettiedot->deletekilpailu();
    $_SESSION['ilmoitus'] = "Kilpailun tiedot on poistettu onnistuneesti!";
    header('Location: kilpailunmuokkaus.php');
}

