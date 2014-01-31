<?php
  session_start();
  
  function naytaNakyma($sivu, $data = array()) {
    $data = (object)$data;
    require "views/$sivu.php";
    exit();
  }

function getTietokantayhteys() {
  static $yhteys = null; 

  if ($yhteys === null) { 
    $yhteys = new PDO('pgsql:');
    $yhteys->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  }

  return $yhteys;
}