<?php

session_start();

    $_SESSION ['username']           = null;
    $_SESSION ['user_password']      = null;
    $_SESSION ['id']                 = null;
  
    
    header("Location: ../../index.php");

?>