<?php
if(isset($_POST['submit'])){

	$websiteCompany = 'lift';

	$name = $_POST['name'];
	$number = $_POST['number'];
	$email = $_POST['email'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$message = $_POST['message'];

	/* send welcome mail */
	$to = 'info@gmail.com';

	$txt = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>'.$websiteCompany.'</title>
</head>

<body>

<div bgcolor="#F5F5F4" style="background:#f5f5f4;margin:0;padding:0">



<table width="100%" cellspacing="0" cellpadding="0" bgcolor="#f5f5f4" style="width:100%">
	<tbody><tr>
    	<td align="center">


<table width="600px" cellspacing="28" cellpadding="0" bgcolor="#FFFFFF">
	<tbody><tr>
    	<td>


        <table width="544" cellspacing="0" cellpadding="0">


            <tbody><tr>
                <td style="text-align:center; padding-bottom: 14px;">
					<p style="padding: 0px; margin: 0px; font-size: 30px;">Lift company</p>
                </td>
            </tr>
            <tr>
            	<td style="color:white;background-color:'.$themeColor.';font-family:Arial;font-size:24px;font-weight:bold;line-height:1.2em;text-align:center;padding:15px 30px"></td>
            </tr>


          	<tr>
            	<td height="20">
          			<table width="544" cellspacing="0" cellpadding="0">
            			<tbody><tr>
                			<td>
<h1 align="center" style="color:#676767;display:block;font-family:Inlove-Light,Arial,sans-serif;font-size:40px;font-style:normal;font-weight:normal;margin:20px 0 0;padding:0;text-align:center">Contact Us</h1>
<p style="width:100%;color:#676767;display:block;float:left;font-family:ProximaNova-Regular,Arial,sans-serif;font-size:16px;font-style:normal;font-weight:normal;margin:20px 0 0;padding:0;">


	Hi Lift company<br/><br/>

	A user leave a message to you,<br/><br/>

	<p style="display: inline-block; float: left; margin: 0px; padding: 0px; line-height: 38px; width: 100%; font-weight: 600; color: rgb(68, 68, 68); font-size: 16px; text-transform: capitalize; border-bottom: 1px dashed rgb(238, 238, 238);">Name - '.$name.' </p><br/>

	<p style="display: inline-block; float: left; margin: 0px; padding: 0px; line-height: 38px; width: 100%; font-weight: 600; color: rgb(68, 68, 68); font-size: 16px; text-transform: capitalize; border-bottom: 1px dashed rgb(238, 238, 238);">Contact - '.$number.' </p><br/>


	<p style="display: inline-block; float: left; margin: 0px; padding: 0px; line-height: 38px; width: 100%; font-weight: 600; color: rgb(68, 68, 68); font-size: 16px; text-transform: capitalize; border-bottom: 1px dashed rgb(238, 238, 238);">Email Address - <a style="text-decoration:none;color:#F08396; ">'.$email.' </a></p><br/>

	<p style="display: inline-block; float: left; margin: 0px; padding: 0px; line-height: 38px; width: 100%; font-weight: 600; color: rgb(68, 68, 68); font-size: 16px; text-transform: capitalize; border-bottom: 1px dashed rgb(238, 238, 238);">City - '.$city.' </p><br/>

	<p style="display: inline-block; float: left; margin: 0px; padding: 0px; line-height: 38px; width: 100%; font-weight: 600; color: rgb(68, 68, 68); font-size: 16px; text-transform: capitalize; border-bottom: 1px dashed rgb(238, 238, 238);">State - '.$state.' </p><br/>

	<p style="display: inline-block; float: left; margin: 0px; padding: 0px; line-height: 38px; width: 100%; font-weight: 600; color: rgb(68, 68, 68); font-size: 16px; text-transform: capitalize; border-bottom: 1px dashed rgb(238, 238, 238);">Message - '.$message.' </p><br/>

<br>
Cheers,<br>lift</p>
              				</td>
                      	</tr>
                  	</tbody></table>
              	</td>
          	</tr>

        </tbody></table>


        </td>
    </tr>
</tbody></table>



<table width="600" cellspacing="28" cellpadding="0" bgcolor="#404040">
	<tbody><tr>
    	<td>


        <table width="544" cellspacing="0" cellpadding="0">
        	<tbody><tr>
            	<td width="302" valign="top" align="left">
                	<p style="color:#808080;display:block;float:left;font-family:ProximaNova-Regular,Arial,sans-serif;font-size:12px;font-style:normal;font-weight:normal;margin:0;padding:0">'.$websiteCompany.'</p>
                </td>
                <td width="20">&nbsp;</td>

            </tr>
            <tr>
              <td valign="bottom" style="color:#808080;text-decoration:none" colspan="3">
                	<p style="color:#808080;display:block;float:left;font-family:ProximaNova-Regular,Arial,sans-serif;font-size:12px;font-style:normal;font-weight:normal;margin:0;padding:0">
                      &copy; <a href="#" style="text-decoration:none;color:#808080; ">'.$websiteCompany.'</a>, All rights reserved.<br></p>
                </td>
            </tr>
        </tbody></table>

        </td>
    </tr>
</tbody></table>


        </td>
    </tr>
</tbody></table>
</body>
</html>';


	$headers .= "From: info@gmail.com" . "\r\n";

	$mail = mail($to, $subject, $txt, $headers);
	/* ----------------- */
	header("Location: thankyou.html");
	die;
}
?>