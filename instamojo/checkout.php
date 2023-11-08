<?php
    
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    require 'insta.php';
    
    $api = new Instamojo\Instamojo('api_key', 'auth_token','https://www.instamojo.com/api/1.1/');
    //$api = new Instamojo\Instamojo('test_api_key', 'test_auth_token','https://test.instamojo.com/api/1.1/');
    try {
        $response = $api->paymentRequestCreate(array(
            "purpose" => $_POST['purpose'],
            "buyer_name" => $_POST['name'],
            "amount" => $_POST['amount'],
            "send_email" => false,
            "email" => $_POST['email'],
            "redirect_url" => "your_site_url/status.php"
            ));
        header('Location:'. $response['longurl']);
    }
    catch (Exception $e) {
        print('Error: ' . $e->getMessage());
    }
?>