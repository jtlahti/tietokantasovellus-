<?php

class kilpailuntiedot {
    
    public $id;   
    public $paivamaara;
    public $nimi;
    public $tunnus;
    public $salasana;
    
    public function insertkilpailu() {
    $sql = "INSERT INTO kilpailu (paivamaara,nimi,tunnus,salasana) VALUES (?,?,?,?) RETURNING id";
    
    $kysely = getTietokantayhteys()->prepare($sql);
    $ok=$kysely->execute(array($this->paivamaara, $this->nimi, $this->tunnus, $this->salasana));
    
     if ($ok) {     
      $this->id = $kysely->fetchColumn();
    }
    return $ok;
}


    public static function getkilpailut() {
        $sql = "SELECT * from kilpailu";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute();
        
        $tulokset = array();
    
        foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
        
            $kayttaja = new kilpailuntiedot($tulos->id, $tulos->paivamaara, $tulos->nimi, $tulos->tunnus, $tulos->salasana);
        
            $tulokset[] = $kayttaja;
    }   
        return $tulokset;        
    }
    
    public function updatekilpailu() {
    $sql = "UPDATE kilpailu set paivamaara= ?, nimi= ?, tunnus= ?, salasana= ?  where id = ?" ;
    
    $kysely = getTietokantayhteys()->prepare($sql);
    $ok=$kysely->execute(array($this->id,$this->paivamaara, $this->nimi,$this->tunnus,$this->salasana));
     
    return $ok;
}

    public function deletekilpailu() {
    $sql = "DELETE from kilpailu where id=?" ;
   
    $kysely = getTietokantayhteys()->prepare($sql);
    $ok=$kysely->execute(array($this->id));
    
    return $ok;
}

    public function etsi($id) {
    $sql = "SELECT id, paivamaara, nimi, tunnus, salasana from kilpailu where id = ?";
    $kysely = getTietokantayhteys()->prepare($sql);
    $kysely->execute(array($id));
    
    $tulos = $kysely->fetchObject();
    if ($tulos == null) {
      return null;
    } else {
      $kilpailu = new kilpailuntiedot(); 
      $kilpailu->id = $tulos->id;
      $kilpailu->paivamaara =$tulos->paivamaara;
      $kilpailu->nimi =$tulos->nimi;
      $kilpailu->tunnus =$tulos->tunnus;
      $kilpailu->salasana =$tulos->salasana;
            
      return $kilpailu;
    }
}

    public function __construct($id,$paivamaara,$nimi,$tunnus, $salasana) {
    $this->id = $id;
    $this->paivamaara = $paivamaara;
    $this->nimi = $nimi;
    $this->tunnus = $tunnus;
    $this->salasana = $salasana;
}

}
