<?php
class sarja {
  
  private $tunnus;
  private $salasana;
  
  
  public static function gettunnukset($tunnus, $salasana) {
    $sql = "SELECT nimi,tunnus, salasana from kilpailu where tunnus = ? and salasana = ?";
    $kysely = getTietokantayhteys()->prepare($sql);
    $kysely->execute(array($tunnus, $salasana));

    $tulos = $kysely->fetchObject();
    if ($tulos == null) {
      return null;
    } else {
      $tunnus = new sarja(); 
      $tunnus->tunnus = $tulos->tunnus;
      $tunnus->salasana = $tulos->salasana;

      return $tunnus;
    }
  }
}

