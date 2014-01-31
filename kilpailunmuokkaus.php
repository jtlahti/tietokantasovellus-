<?php
 session_start();

  if (!isset($_SESSION['ykirjautunut'])) {
    
     header('Location: loginkilpailu.php');
     exit;
  }

require 'views/kilpailulistanmuokkaussivu.php';
