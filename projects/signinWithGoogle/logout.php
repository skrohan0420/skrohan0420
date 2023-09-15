<?php

//logout.php

include('config.php');

// echo "<pre>";
// print_r($_SESSION);

// Reset OAuth access token
$google_client->revokeToken($_SESSION['access_token']);

//Destroy entire session data.
session_destroy();

//redirect page to index.php
header('location:index.php');

?>