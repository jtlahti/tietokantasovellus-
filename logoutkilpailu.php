<?php

session_start();
  
  unset($_SESSION["ykirjautunut"]);

  header('Location: loginkilpailu.php');

