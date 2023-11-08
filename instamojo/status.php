<!DOCTYPE html>
<html>
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<title>Payment Status</title>
</head>
<body style="font-family: 'Poppins', sans-serif;">
    <div style="display: flex;align-items: center;flex-direction: column;">
        <img src="logo.png" style="width:100px;height:auto;">
        <br>
        <h1 style="color:#0091ff;">your_company_name</h1>
        <?php
        
            $payment_id = $_GET['payment_id'];
            $payment_status = $_GET['payment_status'];
            
            if($payment_status==='Credit'){ ?>
                <img src="success.png">
                <h1 style="color:#009420">Payment Successful</h1>
            <?php }
            
            if($payment_status==='Failed'){ ?>
                <img src="fail.png">
                <h1 style="color:#e35f5f">Payment Failed</h1>
            <?php }
            
        ?>
        <h2>Payment ID: <?=$payment_id?></h2>
    </div>



</body>
</html>
