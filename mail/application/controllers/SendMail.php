<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");   
class SendMail extends CI_Controller {

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
	public function index(){
		// echo " hi";
        // echo $this->sentMailCustomer();
	}
    public function sentMailCustomer(){
        $data = $_POST['data'];
        $data = json_decode($data);
        $baseUrl = rtrim($data->base_url, '/index');
        $itenarary = json_decode($data->itenarary);

        $mail_config = $this->convertStdClassToArray($data->mail_config);

        $event_name =  !empty($data->event_details) ? '<p><b>Event name : </b> '.$data->event_details->name.' </p>' : '';
        $html = '
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                                                        <img class="fix" src="'.$baseUrl.'/img/logo.jpg" width="150" height="auto" border="0" alt="" />
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
                                                                    Booking ID: '. $data->booking_no .'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="padding-bottom: 10px;">
                                                                    Invoice No: '. $data->booking_details->invoice_no .'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="">
                                                                    GST No: '. $data->gst_no . '
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
            
                                                        Booking Confirmed
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="h4" style="padding-bottom: 5px; font-size: 16px;
                                                        line-height: 22px;
                                                        font-weight: bold;">
            
                                                        Dear  '. $data->customer_details->name .'<br>
                                                        <b>Thank you for choosing Exoticamp</b>
                                                        
                                                        
                                                    </td>
                                                </tr>
                                                        
                                                        
                                                <tr>
                                                    <td>
                                                        <p> 
                                                            Your Camp booking is confirmed. No need to call us to reconfirm this
                                                            booking. 
                                                        </p>
                                                        <p>
                                                            You will be auto added to a whatsapp group 1 day before the event for
                                                            better coordination. If the number given is not on whatsapp please call us
                                                            at the below number and notify your whatsapp number.
                                                        </p>
                                                            <p>For any other support /transport related queries contact Exoticamp at <b>9790000401</b>
                                                            or email to us at <b><a href="mailto:info@exoticamp.com" rel="noreferrer" target="_blank">info@exoticamp.com</a></b>
                                                        </p>
                                                

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        '. $event_name .'
                                                        <p>
                                                            <b>Camp name : </b> '.$data->camp_details->name.'
                                                        </p>
                                                        <p>
                                                            <b>Camp Host Contact Number :</b> '.$data->vendor_data->mobile.'
                                                        </p>
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
                                                       '. $data->customer_details->name .'
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
                                                        <div style="">'. $data->customer_details->email .'</div>
            
                                                    </td>
                                                    <td style="color: #333; width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">Guest Phone Number:</div>
                                                        <div style="">+91-'. $data->customer_details->username .'</div>
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
                                                        <div style="">'. $data->booking_details->from_date.'</div>
                                                    </td>
                                                    <td style="color: #333;  width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">Check Out:</div>
                                                        <div style="">'.  $data->booking_details->to_date .'</div>
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
                                                        <div style="">'. $data->booking_details->no_adult.'</div>
            
                                                    </td>
                                                    <td style="color: #333;  width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">No.of Child (3 - 10 Yrs):</div>
                                                        <div style="">'. $data->booking_details->no_children .'</div>
                                                    </td>
                                                </tr>
            
                                            </table>
            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="innerpadding borderbottom" style="border-bottom: 1px solid #f2eeed; padding:20px;">
                                            <h4>
                                                Sub total : ₹'. $data->booking_details->actual_price.'<br>
                                                GST & Platform fee( 8% ) : ₹'. $data->booking_details->tax_amount.'
                                            <h4>
                                            <h2>
                                                <b>Paid Amount : </b>₹'.$data->booking_details->total_price .'
                                            </h2>
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
                                                        <a target="_blank" href="https://www.facebook.com/camadvs/"><img class="fix" src="'.$baseUrl.'/img/facebook.png" width="30" height="auto" border="0" alt="" /></a>
            
                                                    </td>
                                                    <td style="width: 10%;" class="normal__font">
                                                        <a target="_blank" href="https://www.instagram.com/exoticampadventures/"><img class="fix" src="'.$baseUrl.'/img/instagram.png" width="30" height="auto" border="0" alt="" /></a>
            
                                                    </td>
                                                    <td style="width: 10%;" class="normal__font">
                                                        <a target="_blank" href="https://www.youtube.com/c/exoticamp" ><img class="fix" src="'.$baseUrl.'/img/youtube.png" width="30" height="auto" border="0" alt="" /></a>
            
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
            
            </html>
        ';
        $this->load->library('email');
        $mail_config;
        $this->email->initialize($mail_config);
        $this->email->from($mail_config['smtp_user'], 'exoticamp');
        $this->email->to($data->customer_details->email);
        $this->email->subject('camp booking');
        $this->email->message($html);
        $this->email->set_mailtype('html');
        // $error = $this->email->print_debugger();
        // echo $error;
        $this->email->send();
        $this->sent_mail($html,$data->admin_data->email,$mail_config);
    }

    public function sentMailVendor(){
      
        $data = $_POST['data'];
        $data = json_decode($data);
        $baseUrl = rtrim($data->base_url, '/index');
        $itenarary = json_decode($data->itenarary);
        $mail_config = $this->convertStdClassToArray($data->mail_config);

        $event_name =  !empty($data->event_details) ? '<p><b>Event name : </b> '.$data->event_details->name.' </p>' : '';

        $html = '
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                                                        <img class="fix" src="'.$baseUrl.'/img/logo.jpg" width="150" height="auto" border="0" alt="" />
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
                                                                    Booking ID: '. $data->booking_no .'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="padding-bottom: 10px;">
                                                                    Invoice No: '. $data->booking_details->invoice_no .'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="">
                                                                    GST No: '. $data->gst_no . '
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
            
                                                        Dear  '. $data->vendor_data->name .'<br>
                                                        <b>You have received a booking.</b>
                                                        
                                                        
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
                                                        '. $data->customer_details->name .'
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
                                                        <div style="">'. $data->customer_details->email .'</div>
            
                                                    </td>
                                                    <td style="color: #333; width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">Guest Phone Number:</div>
                                                        <div style="">+91-'. $data->customer_details->username .'</div>
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
                                                        <div style="">'. $data->booking_details->from_date.'</div>
                                                    </td>
                                                    <td style="color: #333;  width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">Check Out:</div>
                                                        <div style="">'.  $data->booking_details->to_date .'</div>
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
                                                        <div style="">'. $data->booking_details->no_adult.'</div>
            
                                                    </td>
                                                    <td style="color: #333;  width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">No.of Child (3 - 10 Yrs):</div>
                                                        <div style="">'. $data->booking_details->no_children .'</div>
                                                    </td>
                                                </tr>
                                                
                                            </table>
            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="padding: 15px">
                                            <p>
                                                Please go ahead, establish first contact & make guests comfortable.
                                            </p>

                                            <p>
                                                For any other support contact Exoticamp at 9790000401 or email to us at info@exoticamp.com
                                            </p>
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
                                                        <a target="_blank" href="https://www.facebook.com/camadvs/"><img class="fix" src="'.$baseUrl.'/img/facebook.png" width="30" height="auto" border="0" alt="" /></a>
            
                                                    </td>
                                                    <td style="width: 10%;" class="normal__font">
                                                        <a target="_blank" href="https://www.instagram.com/exoticampadventures/"><img class="fix" src="'.$baseUrl.'/img/instagram.png" width="30" height="auto" border="0" alt="" /></a>
                                                    </td>
                                                    <td style="width: 10%;" class="normal__font">
                                                        <a target="_blank" href="https://www.youtube.com/c/exoticamp" ><img class="fix" src="'.$baseUrl.'/img/youtube.png" width="30" height="auto" border="0" alt="" /></a>
            
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
            
            </html>
        ';

        $this->load->library('email');
        $this->email->initialize($mail_config);
        $this->email->from($mail_config['smtp_user'], 'exoticamp');
        $this->email->to($data->vendor_data->email);
        // $this->email->to('skrohan0420@gmail.com');
        $this->email->subject('booking receved');
        $this->email->message($html);
        $this->email->set_mailtype('html');
        // $error = $this->email->print_debugger();
        // echo $error;
        $this->email->send();
        
        $this->sent_mail($html,$data->admin_data->email,$mail_config);

    }

    public function sentMailAdmin(){

        $data = $_POST['data'];
        $data = json_decode($data);
        $baseUrl = rtrim($data->base_url, '/index');
        $itenarary = json_decode($data->itenarary);
        $mail_config = $this->convertStdClassToArray($data->mail_config);

        $event_name =  !empty($data->event_details) ? '<p><b>Event name : </b> '.$data->event_details->name.' </p>' : '';

        $html = '
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                                                        <img class="fix" src="'.$baseUrl.'/img/logo.jpg" width="150" height="auto" border="0" alt="" />
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
                                                                    Booking ID: '. $data->booking_no .'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="padding-bottom: 10px;">
                                                                    Invoice No: '. $data->booking_details->invoice_no .'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="">
                                                                    GST No: '. $data->gst_no . '
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
                                                    <td class="h4" style="padding-bottom: 5px; font-size: 16px;
                                                        line-height: 22px;
                                                        font-weight: bold;">
            
                                                        Dear  Admin<br>
                                                        <b>'. $data->vendor_data->name .' have received a booking.</b>
                                                        
                                                        
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        '. $event_name .'
                                                        <p>
                                                            <b>Camp name : </b> '.$data->camp_details->name.'
                                                        </p>
                                                        <p>
                                                            <b>Camp Host Contact Number :</b> '.$data->vendor_data->mobile.'
                                                        </p>
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
                                                        '. $data->customer_details->name .'
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
                                                        <div style="">'. $data->customer_details->email .'</div>
            
                                                    </td>
                                                    <td style="color: #333; width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">Guest Phone Number:</div>
                                                        <div style="">+91-'. $data->customer_details->username .'</div>
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
                                                        <div style="">'. $data->booking_details->from_date.'</div>
                                                    </td>
                                                    <td style="color: #333;  width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">Check Out:</div>
                                                        <div style="">'.  $data->booking_details->to_date .'</div>
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
                                                        <div style="">'. $data->booking_details->no_adult.'</div>
            
                                                    </td>
                                                    <td style="color: #333;  width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">No.of Child (3 - 10 Yrs):</div>
                                                        <div style="">'. $data->booking_details->no_children .'</div>
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
                                                        <a target="_blank" href="https://www.facebook.com/camadvs/"><img class="fix" src="'.$baseUrl.'/img/facebook.png" width="30" height="auto" border="0" alt="" /></a>
            
                                                    </td>
                                                    <td style="width: 10%;" class="normal__font">
                                                        <a target="_blank" href="https://www.instagram.com/exoticampadventures/"><img class="fix" src="'.$baseUrl.'/img/instagram.png" width="30" height="auto" border="0" alt="" /></a>
                                                    </td>
                                                    <td style="width: 10%;" class="normal__font">
                                                        <a target="_blank" href="https://www.youtube.com/c/exoticamp" ><img class="fix" src="'.$baseUrl.'/img/youtube.png" width="30" height="auto" border="0" alt="" /></a>
            
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
            
            </html>
        ';


        
        $this->load->library('email');
        $this->email->initialize($mail_config);
        $this->email->from($mail_config['smtp_user'], 'exoticamp');
        $this->email->to($data->admin_data->email);
        // $this->email->to('skrohan0420@gmail.com');
        $this->email->subject('camp booking receved');
        $this->email->message($html);
        $this->email->set_mailtype('html');
        // $error = $this->email->print_debugger();
        // echo $error;
        $this->email->send();


    }

    public function cancelBooking_vendor(){
        $data = $_POST['data'];
        $data = json_decode($data);
        $baseUrl = rtrim($data->base_url, '/index');
        $itenarary = json_decode($data->itenarary);
        $mail_config = $this->convertStdClassToArray($data->mail_config);


        $event_name =  !empty($data->event_details) ? '<p><b>Event name : </b> '.$data->event_details->name.' </p>' : '';

        $html = '
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                                                        <img class="fix" src="'.$baseUrl.'/img/logo.jpg" width="150" height="auto" border="0" alt="" />
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
                                                                    Booking ID: '. $data->booking_no .'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="padding-bottom: 10px;">
                                                                    Invoice No: '. $data->booking_details->invoice_no .'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="">
                                                                    GST No: '. $data->gst_no . '
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
                                                    <td class="h4" style="padding-bottom: 5px; font-size: 16px;
                                                        line-height: 22px;
                                                        font-weight: bold;">
                                                        <b>'. $data->customer_details->name .' canceled a booking.</b>
                                                        
                                                        
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        '. $event_name .'
                                                        <p>
                                                            <b>Camp name : </b> '.$data->camp_details->name.'
                                                        </p>
                                                        <p>
                                                            <b>Camp Host Contact Number :</b> '.$data->vendor_data->mobile.'
                                                        </p>
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
                                                        '. $data->customer_details->name .'
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
                                                        <div style="">'. $data->customer_details->email .'</div>
            
                                                    </td>
                                                    <td style="color: #333; width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">Guest Phone Number:</div>
                                                        <div style="">+91-'. $data->customer_details->username .'</div>
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
                                                        <div style="">'. $data->booking_details->from_date.'</div>
                                                    </td>
                                                    <td style="color: #333;  width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">Check Out:</div>
                                                        <div style="">'.  $data->booking_details->to_date .'</div>
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
                                                        <div style="">'. $data->booking_details->no_adult.'</div>
            
                                                    </td>
                                                    <td style="color: #333;  width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">No.of Child (3 - 10 Yrs):</div>
                                                        <div style="">'. $data->booking_details->no_children .'</div>
                                                    </td>
                                                </tr>
                                                
                                            </table>
            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="innerpadding borderbottom" style="border-bottom: 1px solid #f2eeed; padding:20px;">
                                            <h4>
                                               
                                                For any other support contact Exoticamp at 9790000401 or email to us at info@exoticamp.com
                                            <h4>
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
                                                        <a target="_blank" href="https://www.facebook.com/camadvs/"><img class="fix" src="'.$baseUrl.'/img/facebook.png" width="30" height="auto" border="0" alt="" /></a>
            
                                                    </td>
                                                    <td style="width: 10%;" class="normal__font">
                                                        <a target="_blank" href="https://www.instagram.com/exoticampadventures/"><img class="fix" src="'.$baseUrl.'/img/instagram.png" width="30" height="auto" border="0" alt="" /></a>
                                                    </td>
                                                    <td style="width: 10%;" class="normal__font">
                                                        <a target="_blank" href="https://www.youtube.com/c/exoticamp" ><img class="fix" src="'.$baseUrl.'/img/youtube.png" width="30" height="auto" border="0" alt="" /></a>
            
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
            
            </html>
        ';
        // $this->sent_mail($html,'skrohan0420@gmail.com');
        $this->sent_mail($html,$data->vendor_data->email,$mail_config);
        $this->sent_mail($html,$data->admin_data->email,$mail_config);
    }

    public function cancelBooking_customer(){
        $data = $_POST['data'];
        $data = json_decode($data);
        $baseUrl = rtrim($data->base_url, '/index');
        $itenarary = json_decode($data->itenarary);
        $mail_config = $this->convertStdClassToArray($data->mail_config);

        $event_name =  !empty($data->event_details) ? '<p><b>Event name : </b> '.$data->event_details->name.' </p>' : '';

        $html = '
            <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                                                        <img class="fix" src="'.$baseUrl.'/img/logo.jpg" width="150" height="auto" border="0" alt="" />
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
                                                                    Booking ID: '. $data->booking_no .'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="padding-bottom: 10px;">
                                                                    Invoice No: '. $data->booking_details->invoice_no .'
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="" style="">
                                                                    GST No: '. $data->gst_no . '
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
                                                    <td class="h4" style="padding-bottom: 5px; font-size: 16px;
                                                        line-height: 22px;
                                                        font-weight: bold;">
                                                        <b>Booking Cancelled</b>
                                                        
                                                        
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="h4" style="padding-bottom: 5px; font-size: 16px;
                                                        line-height: 22px;
                                                        font-weight: bold;">
                                                        <b> Dear'.  $data->customer_details->name .'<br> Your booking has been cancelled.</b>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>
                                                        '. $event_name .'
                                                        <p>
                                                            <b>Camp name : </b> '.$data->camp_details->name.'
                                                        </p>
                                                        <p>
                                                            <b>Camp Host Contact Number :</b> '.$data->vendor_data->mobile.'
                                                        </p>
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
                                                        '. $data->customer_details->name .'
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
                                                        <div style="">'. $data->customer_details->email .'</div>
            
                                                    </td>
                                                    <td style="color: #333; width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">Guest Phone Number:</div>
                                                        <div style="">+91-'. $data->customer_details->username .'</div>
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
                                                        <div style="">'. $data->booking_details->from_date.'</div>
                                                    </td>
                                                    <td style="color: #333;  width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">Check Out:</div>
                                                        <div style="">'.  $data->booking_details->to_date .'</div>
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
                                                        <div style="">'. $data->booking_details->no_adult.'</div>
            
                                                    </td>
                                                    <td style="color: #333;  width: 50%;" class="normal__font">
                                                        <div style="padding-bottom: 5px; color: #9a9898;">No.of Child (3 - 10 Yrs):</div>
                                                        <div style="">'. $data->booking_details->no_children .'</div>
                                                    </td>
                                                </tr>
                                                
                                            </table>
            
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="innerpadding borderbottom" style="border-bottom: 1px solid #f2eeed; padding:20px;">
                                            <h2>
                                                <b>Sub total: </b> ₹'. $data->actual_price.'<br>
                                            <h2>
                                            <h2>
                                                <b>Tax( '. $data->tax .'% ): </b> ₹'. $data->tax_amount.'<br>
                                            <h2>
                                            <h2>
                                                <b>Paid Amount: </b> ₹'. $data->total_price.'<br>
                                            <h2>
                                            <h2>
                                                <b>Cancellation Charge: </b> 25%<br>
                                            <h2>
                                            <h2>
                                                <b>Refundable Amount: </b> ₹'. $data->refundable_amount.'<br>
                                            <h2>
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
                                                        <a target="_blank" href="https://www.facebook.com/camadvs/"><img class="fix" src="'.$baseUrl.'/img/facebook.png" width="30" height="auto" border="0" alt="" /></a>
            
                                                    </td>
                                                    <td style="width: 10%;" class="normal__font">
                                                        <a target="_blank" href="https://www.instagram.com/exoticampadventures/"><img class="fix" src="'.$baseUrl.'/img/instagram.png" width="30" height="auto" border="0" alt="" /></a>
                                                    </td>
                                                    <td style="width: 10%;" class="normal__font">
                                                        <a target="_blank" href="https://www.youtube.com/c/exoticamp" ><img class="fix" src="'.$baseUrl.'/img/youtube.png" width="30" height="auto" border="0" alt="" /></a>
            
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
            
            </html>
        ';
        $this->sent_mail($html,$data->customer_details->email,$mail_config);
        $this->sent_mail($html,$data->admin_data->email,$mail_config);
    }

    public function sent_mail($html, $email,$mail_config){
        $this->load->library('email');
        $this->email->initialize($mail_config);
        $this->email->from($mail_config['smtp_user'], 'exoticamp');
        $this->email->to($email);
        $this->email->subject('exoticamp');
        $this->email->message($html);
        $this->email->set_mailtype('html');
        // $error = $this->email->print_debugger();
        // echo $error;
        $this->email->send();
    }

    public function convertStdClassToArray($stdClassObject) {
        // Initialize an empty associative array
        $resultArray = [];
    
        // Loop through each property of the stdClass object
        foreach ($stdClassObject as $key => $value) {
            // Convert the property to a key in the associative array
            // and assign its value
            $resultArray[$key] = $value;
        }
    
        return $resultArray;
    }

}