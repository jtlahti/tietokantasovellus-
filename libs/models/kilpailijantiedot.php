<?php

class kilpailijantiedot {

public $id;   
public $sarja;
public $nimi;
public $seura;
public $emit;
public $loppuaika;

public function putkilpailija() {
    $sql = "INSERT INTO tulos (sarja,nimi,seura,emit,loppuaika) VALUES (?,?,?,?,?) RETURNING id";
    
    $kysely = getTietokantayhteys()->prepare($sql);
    $ok=$kysely->execute(array($this->sarja, $this->nimi, $this->seura,$this->emit,$this->loppuaika));
    
     if ($ok) {     
      $this->id = $kysely->fetchColumn();
    }
    return $ok;
}

public static function getkilpailijat($sarja) {
    $sql = "SELECT * from tulos where sarja = ? ORDER BY loppuaika";
    $kysely = getTietokantayhteys()->prepare($sql);
    $kysely->execute(array($sarja));
    
    $tulokset = array();
    
    foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
        
        $kayttaja = new kilpailijantiedot($tulos->id, $tulos->sarja, $tulos->nimi,$tulos->seura,$tulos->emit,$tulos->loppuaika);
        
        $tulokset[] = $kayttaja;
    }
    return $tulokset;
}

public function updatekilpailija() {
    $sql = "UPDATE tulos set sarja= ?, nimi= ?, seura= ?, emit=?, loppuaika=? where id = ? " ;
    
    $kysely = getTietokantayhteys()->prepare($sql);
    $ok=$kysely->execute(array($this->sarja, $this->nimi, $this->seura,$this->emit,$this->loppuaika,$this->id));
     
    return $ok;
}

public function deletekilpailija() {
    $sql = "DELETE from tulos where id=?" ;
   
    $kysely = getTietokantayhteys()->prepare($sql);
    $ok=$kysely->execute(array($this->id));
    
    return $ok;
}


public function etsi($id) {
    $sql = "SELECT id, sarja,nimi,seura,emit,loppuaika from tulos where id = ?";
    $kysely = getTietokantayhteys()->prepare($sql);
    $kysely->execute(array($id));
    
    $tulos = $kysely->fetchObject();
    if ($tulos == null) {
      return null;
    } else {
      $kilpailija = new kilpailijantiedot(); 
      $kilpailija->id = $tulos->id;
      $kilpailija->sarja =$tulos->sarja;
      $kilpailija->nimi =$tulos->nimi;
      $kilpailija->seura =$tulos->seura;
      $kilpailija->emit =$tulos->emit;
      $kilpailija->loppuaika =$tulos->loppuaika;
      
      return $kilpailija;
    }
}


public function __construct($id,$sarja,$nimi,$seura,$emit,$loppuaika) {
    $this->id = $id;
    $this->sarja = $sarja;
    $this->nimi = $nimi;
    $this->seura = $seura;
    $this->emit =  $emit; 
    $this->loppuaika = $loppuaika;
}
}

