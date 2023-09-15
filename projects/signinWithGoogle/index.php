<?php

//index.php

//Include Configuration File
include('config.php');

$login_button = '';


if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

  
  $data = $google_service->userinfo->get();


 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}


if(!isset($_SESSION['access_token']))
{

 $login_button = '<a href="'.$google_client->createAuthUrl().'">Login With Google</a>';
}

?>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PHP Login using Google Account</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <style>
        *{
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
        }
        body{
            min-width: 100vw;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;

        }
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        button {
            display: inline-block;
            font-size: 16px; /* Adjust font size as needed */
            text-align: center;
            text-decoration: none;
            padding: 10px 20px; /* Adjust padding as needed */
            border: none;
            border-radius: 5px; /* Adjust border radius for rounded corners */
            cursor: pointer;
            background-color: #007BFF; /* Button background color */
            color: #fff; /* Button text color */
            transition: background-color 0.3s ease; /* Smooth hover effect */
            /* outline: 0px; */
            border: none;
        }
        button a,button a:hover{
            color: #fff;
            text-decoration: none;
        }
        /* Hover effect */
        button:hover {
            background-color: #0056b3; /* Change the background color on hover */
        }
    </style>
</head>

<body>
    <div class="container">
    <?php
        if($login_button == ''){
                echo '<div class="panel-body">';
                echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
                echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
                echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
              
                echo '<h3><a href="logout.php">Logout</h3></div>';
              
        }
        else{
                echo '<button align="center">'.$login_button . '</button>';
        }
    ?>
    </div>
</body>

</html>