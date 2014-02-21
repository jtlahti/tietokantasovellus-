<?php

$yhteys = new PDO("pgsql:");
$yhteys->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$kysely = $yhteys->prepare("SELECT * FROM kilpailu");
$kysely->execute();


echo "<table border>";
while ($rivi = $kysely->fetch()) {
    echo "<tr>";
    echo "<td>" . $rivi["paivamaara"] . "</td>";
    echo "<td>" . $rivi["nimi"] . "</td>";
    echo "<td>" . $rivi["tunnus"] . "</td>";
    echo "<td>" . $rivi["salasana"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
