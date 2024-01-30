<?php
     // pass valid/invalid emails
     $email = "mail@example.com";
     if (filter_var($email, FILTER_VALIDATE_EMAIL)){
          echo '"' . $email . '" = Valid'."<br>";
     }
     else{
          echo '"' . $email . '" = Invalid'."<br>";
     }
?>