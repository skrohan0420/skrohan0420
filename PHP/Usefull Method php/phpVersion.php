<?php
  echo 'Current PHP version : ' . phpversion().'<br>';
  // prints e.g. '2.0' or nothing if the extension isn't enabled
  echo phpversion('tidy');
?>