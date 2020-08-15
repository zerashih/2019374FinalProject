<?php
   session_start(); // start session

   session_unset(); // unset session
   
   
   if(session_destroy()) { // if session is destroyed create normal logged out header
      header("Location: index.php"); // paint logged out header
   }
?>