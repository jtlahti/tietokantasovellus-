<?php
class kilpailu {
  
  private $tunnus;
  private $salasana;
  
  
  public static function gettunnukset($tunnus, $salasana) {
    $sql = "SELECT tunnus, salasana from yllapidontunnukset where tunnus = ? and salasana = ?";
    $kysely = getTietokantayhteys()->prepare($sql);
    $kysely->execute(array($tunnus, $salasana));

    $tulos = $kysely->fetchObject();
    if ($tulos == null) {
      return null;
    } else {
      $ytunnus = new kilpailu(); 
      $ytunnus->tunnus = $tulos->tunnus;
      $ytunnus->salasana = $tulos->salasana;

      return $ytunnus;
    }
  }
}
