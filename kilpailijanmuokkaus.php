<?php
 session_start();

  if (!isset($_SESSION['kirjautunut'])) {
    
     header('Location: loginkilpailija.php');
     exit;
  }

require 'järjestäkilpailijat.php';