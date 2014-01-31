<?php
 session_start();

  if (!isset($_SESSION['kirjautunut'])) {
    
     header('Location: loginsarja.php');
     exit;
  }

require 'views/sarjalistanmuokkaussivu.php';



