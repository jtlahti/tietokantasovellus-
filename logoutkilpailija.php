<?php

session_start();
  
  unset($_SESSION["kirjautunut"]);

  header('Location: loginkilpailija.php');
