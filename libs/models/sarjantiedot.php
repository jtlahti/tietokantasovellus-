<?php

class sarjantiedot {
    
    public $id;   
    public $kilpailu;
    public $nimi;
    
    public function putsarja() {
    $sql = "INSERT INTO sarja (kilpailu,nimi) VALUES (?,?) RETURNING id";
    
    $kysely = getTietokantayhteys()->prepare($sql);
    $ok=$kysely->execute(array($this->kilpailu, $this->nimi));
    
     if ($ok) {     
      $this->id = $kysely->fetchColumn();
    }
    return $ok;
}
    
    
    
    public static function getsarjat($kilpailu) {
        $sql = "SELECT * from sarja where kilpailu = ?";
        $kysely = getTietokantayhteys()->prepare($sql);
        $kysely->execute(array($kilpailu));
        
        $tulokset = array();
    
        foreach($kysely->fetchAll(PDO::FETCH_OBJ) as $tulos) {
        
            $kayttaja = new sarjantiedot($tulos->id, $tulos->kilpailu, $tulos->nimi);
        
            $tulokset[] = $kayttaja;
    }
    
    return $tulokset;
        
    }
    
    public function updatesarja() {
    $sql = "UPDATE sarja set kilpailu= ?, nimi= ? where id = ? " ;
    
    $kysely = getTietokantayhteys()->prepare($sql);
    $ok=$kysely->execute(array($this->kilpailu, $this->nimi,$this->id));
     
    return $ok;
}
 
    public function deletesarja() {
    $sql = "DELETE from sarja where id=?" ;
   
    $kysely = getTietokantayhteys()->prepare($sql);
    $ok=$kysely->execute(array($this->id));
    
    return $ok;
}

    
    public function etsi($id) {
    $sql = "SELECT id, kilpailu,nimi from sarja where id = ?";
    $kysely = getTietokantayhteys()->prepare($sql);
    $kysely->execute(array($id));
    
    $tulos = $kysely->fetchObject();
    if ($tulos == null) {
      return null;
    } else {
      $sarja = new sarjantiedot(); 
      $sarja->id = $tulos->id;
      $sarja->kilpailu =$tulos->kilpailu;
      $sarja->nimi =$tulos->nimi;
      
      return $sarja;
    }
}
    
    
    public function __construct($id,$kilpailu,$nimi) {
    $this->id = $id;
    $this->kilpailu = $kilpailu;
    $this->nimi = $nimi;
}
    
    
    
    
    
    
}
