<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");   
class SendOtp extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->helper('url');
        $this->load->library('user_agent');
        //session_start();
    }
	public function index()
	{
		// echo " hi";
        echo $this->sentOtp();
	}



    public function sentOtp(){
     
        $html = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml">
        
            <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <style type="text/css">
                    body {
                        margin: 0;
                        padding: 0;
                        min-width: 100%!important;
                    }
        
                    img {
                        height: auto;
                    }
        
                    .content {
                        width: 100%;
                        max-width: 600px;
                    }
        
                    .header {
                        padding: 20px 30px 20px 30px;
                        border-bottom: 1px solid #cacaca;
                    }
        
                    .innerpadding {
                        padding: 30px 30px 30px 30px;
                    }
        
                    .borderbottom {
                        border-bottom: 1px solid #f2eeed;
                    }
        
                    .subhead {
                        font-size: 15px;
                        color: #ffffff;
                        font-family: sans-serif;
                        letter-spacing: 10px;
                    }
        
                    .h1,
                    .h4,
                    .h2,
                    .bodycopy {
                        color: #153643;
                        font-family: sans-serif;
                    }
        
                    .normal__font {
                        font-family: sans-serif;
                    }
        
                    .h1 {
                        font-size: 33px;
                        line-height: 38px;
                        font-weight: bold;
                    }
        
                    .h2 {
                        padding: 0 0 15px 0;
                        font-size: 24px;
                        line-height: 28px;
                        font-weight: bold;
                    }
        
                    .h4 {
                        font-size: 16px;
                        line-height: 22px;
                        font-weight: bold;
                    }
        
                    .bodycopy {
                        font-size: 16px;
                        line-height: 22px;
                    }
        
                    .button {
                        text-align: center;
                        font-size: 18px;
                        font-family: sans-serif;
                        font-weight: bold;
                        padding: 0 30px 0 30px;
                    }
        
                    .button a {
                        color: #ffffff;
                        text-decoration: none;
                    }
        
                    .footer {
                        padding: 20px 30px 15px 30px;
                    }
        
                    .footercopy {
                        font-family: sans-serif;
                        font-size: 14px;
                        color: #ffffff;
                    }
        
                    .footercopy a {
                        color: #ffffff;
                        text-decoration: underline;
                    }
        
                    @media only screen and (max-width: 550px),
                    screen and (max-device-width: 550px) {
                        body[yahoo] .hide {
                            display: none!important;
                        }
                        body[yahoo] .buttonwrapper {
                            background-color: transparent!important;
                        }
                        body[yahoo] .button {
                            padding: 0px!important;
                        }
                        body[yahoo] .button a {
                            background-color: #e05443;
                            padding: 15px 15px 13px!important;
                        }
                        body[yahoo] .unsubscribe {
                            display: block;
                            margin-top: 20px;
                            padding: 10px 50px;
                            background: #2f3942;
                            border-radius: 5px;
                            text-decoration: none!important;
                            font-weight: bold;
                        }
                    }
                    /*@media only screen and (min-device-width: 601px) {
                .content {width: 600px !important;}
                .col425 {width: 425px!important;}
                .col380 {width: 380px!important;}
                }*/
                </style>
            </head>
        
            <body yahoo bgcolor="#f6f8f1">
                <table width="100%" bgcolor="#f6f8f1" border="0" cellpadding="0" cellspacing="0" style="padding:30px 0">
                    <tr>
                        <td>
                            <!--[if (gte mso 9)|(IE)]>
                  <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                      <td>
                <![endif]-->
                            <table bgcolor="#ffffff" class="content" style="width: 100%; max-width: 600px;" align="center" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td bgcolor="#fff" class="header" style="padding:20px 30px; border-bottom: 1px solid #cacaca;">
                                        <table width="300" align="left" border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td height="70" style="padding-right:30px;">
                                                    <img class="fix" src="" width="150" height="auto" border="0" alt="" />
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if (gte mso 9)|(IE)]>
                        <table width="425" align="left" cellpadding="0" cellspacing="0" border="0">
                          <tr>
                            <td>
                      <![endif]-->
                                        <table class="col425" align="left" border="0" cellpadding="0" cellspacing="0" style="width:200px">
                                            <tr>
                                                <td height="70">
                                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                        <tr>
                                                            <td class="" style="padding-bottom: 10px;">
                                                                Booking ID:<?= $model->booking_no ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="" style="padding-bottom: 10px;">
                                                                Invoice No:<?= $model->invoice_no ?>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="" style="">
                                                                GST No:<?= $gstNo ?>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <!--[if (gte mso 9)|(IE)]>
                            </td>
                          </tr>
                      </table>
                      <![endif]-->
                                    </td>
                                </tr>
                                <tr>
                                    <td class="innerpadding borderbottom" style="border-bottom: 1px solid #f2eeed; padding: 20px">
                                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td class="h2" style="padding: 0 0 15px 0;
                                                    font-size: 24px;
                                                    line-height: 28px;
                                                    font-weight: bold;">
        
                                                    You have received a booking
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="h4" style="padding-bottom: 5px; font-size: 16px;
                                                    line-height: 22px;
                                                    font-weight: bold;">
        
                                                    Dear
                                                    <?php
                                                    if ($model->event_id) {
                                                        echo $model->event->camps->vendor->profile->first_name;
                                                    } else {
                                                        echo $model->camp->vendor->profile->first_name;
                                                    }
                                                    ?>
        
        
                                                </td>
                                            </tr>
        
        
                                            <tr>
                                                <td class="bodycopy">
        
                                                    You have received a booking.
        
        
        
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="innerpadding borderbottom" style="border-bottom: 1px solid #f2eeed; padding:20px;">
        
                                        <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; max-width: 220px;">
                                            <tr>
                                                <td style="color: #9a9898; padding-bottom: 5px;" class="normal__font">
                                                    Guest Name
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="normal__font">
                                                    <?= $model->customer->name ?>
                                                </td>
                                            </tr>
                                        </table>
        
                                    </td>
                                </tr>
        
        
                                <tr>
                                    <td class="innerpadding borderbottom" style="border-bottom: 1px solid #f2eeed; padding: 20px;">
        
                                        <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                            <tr>
                                                <td style="color: #333;  width: 50%;" class="normal__font">
                                                    <div style="padding-bottom: 5px; color: #9a9898;">Guest Email:</div>
                                                    <div style=""><?= $model->customer->email ?></div>
        
                                                </td>
                                                <td style="color: #333; width: 50%;" class="normal__font">
                                                    <div style="padding-bottom: 5px; color: #9a9898;">Guest Phone Number:</div>
                                                    <div style="">+91 <?= $model->customer->username ?></div>
                                                </td>
                                            </tr>
        
                                        </table>
        
                                    </td>
                                </tr>
        
        
                                <tr>
                                    <td class="innerpadding borderbottom" style="border-bottom: 1px solid #f2eeed; padding: 20px;">
        
                                        <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                            <tr>
                                                <td style="color: #333;  width: 50%;" class="normal__font">
                                                    <div style="padding-bottom: 5px; color: #9a9898;">Check In:</div>
                                                    
                                                    <div style=""> </div>
        
                                                </td>
                                                <td style="color: #333;  width: 50%;" class="normal__font">
                                                    <div style="padding-bottom: 5px; color: #9a9898;">Check Out:</div>
                                                    <div style=""></div>
                                                </td>
                                            </tr>
        
                                        </table>
        
                                    </td>
                                </tr>
        
                                <tr>
                                    <td class="innerpadding borderbottom" style="border-bottom: 1px solid #f2eeed; padding: 20px;">
        
                                        <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                            <tr>
                                                <td style="color: #333;  width: 50%;" class="normal__font">
                                                    <div style="padding-bottom: 5px; color: #9a9898; ">No.of Adults:</div>
                                                    <div style=""> <?= $model->no_adult ?></div>
        
                                                </td>
                                                <td style="color: #333;  width: 50%;" class="normal__font">
                                                    <div style="padding-bottom: 5px; color: #9a9898;">No.of Child (3 - 10 Yrs):</div>
                                                    <div style=""> <?= $model->no_children ?> </div>
                                                </td>
                                            </tr>
        
                                        </table>
        
                                    </td>
                                </tr>
                                <tr>
                                <td class="innerpadding borderbottom" style="border-bottom: 1px solid #f2eeed; padding: 20px;">
                                    <table  style="border: 1px solid black;border-collapse: collapse;">
                                        <thead  style="border: 1px solid black;border-collapse: collapse;">
                                            <th  style="border: 1px solid black;border-collapse: collapse;">Day</th>
                                            <th>Time/Activity</th>
        
                                        </thead>
                                        <tbody>
        
                                           
                                        </tbody>
                                    </table>
                                </td>
        
                                </tr>
        
        
                                <tr>
                                    <td class="innerpadding borderbottom" style="border-bottom: 1px solid #f2eeed; padding:20px;">
        
                                        <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
                                            <tr>
                                                <td style="color: #333; padding-bottom: 5px; font-weight: bold;" class="normal__font">
                                                    <p>Please go ahead, establish first contact & make guests comfortable. </p>
        
                                                    <p>For any other support contact Exoticamp at 9790000401 or email to us at info@exoticamp.com
                                                    </p>
        
                                                </td>
        
                                            </tr>
        
                                        </table>
        
                                    </td>
                                </tr>
        
        
                                <tr>
                                    <td class="innerpadding borderbottom" style="border-bottom: 1px solid #f2eeed; padding: 30px 30px 30px 30px; background-color: #ea6a13;">
        
                                        <table class="col380" align="left" border="0" cellpadding="0" cellspacing="0" style="width: 100%; ">
                                            <tr>
                                                <td style="width: 70%;" class="normal__font">
                                                    <a href="www.exoticamp.com " target="_blank">www.exoticamp.com </a>
        
                                                </td>
                                                <td style=" width: 10%;" class="normal__font">
                                                    <a target="_blank" href="https://www.facebook.com/camadvs/"><img class="fix" src="" width="30" height="auto" border="0" alt="" /></a>
        
                                                </td>
                                                <td style="width: 10%;" class="normal__font">
                                                    <a target="_blank" href="https://www.instagram.com/exoticampadventures/"><img class="fix" src="" width="30" height="auto" border="0" alt="" /></a>
        
                                                </td>
                                                <td style="width: 10%;" class="normal__font">
                                                    <a target="_blank" href="https://www.youtube.com/c/exoticamp" ><img class="fix" src="" width="30" height="auto" border="0" alt="" /></a>
        
                                                </td>
        
                                            </tr>
        
                                        </table>
        
                                    </td>
                                </tr>
        
        
                            </table>
                            <!--[if (gte mso 9)|(IE)]>
                      </td>
                    </tr>
                </table>
                <![endif]-->
                        </td>
                    </tr>
                </table>
            </body>
        
        </html>';

        $this->load->library('email');
        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.gmail.com', 
            'smtp_port' => '465',
            'smtp_user' => 'jaduride@gmail.com',
            'smtp_pass' => 'ktawzreipqphpmed',
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        );
        $this->email->initialize($config);
        $this->email->from('jaduride@gmail.com', 'rohan');
        $this->email->to('skrohan0420@gmail.com');
        $this->email->subject('OTP');
        $this->email->message($html);
        $this->email->set_mailtype('html');
        $this->email->send();
        $error = $this->email->print_debugger();
        echo $error;


        if ($this->email->send()) {
            return "true";
        } else {
            return "false";
        }          
    }

}
