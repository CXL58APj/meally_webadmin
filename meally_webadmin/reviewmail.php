<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
include('dbcon.php');
date_default_timezone_set('Asia/Hong_Kong');
$datetoday =  date("F j, Y, g:i a");
if (isset($_POST['acceptstore_btn'])) {
  $storekey = $_POST['acceptstore_btn'];
  $ref_table = 'stores';
  $fetcheddata = $database->getReference($ref_table)->getChild($storekey)->getValue();
  if ($fetcheddata > 0) {
    $storeemail = $fetcheddata['storeemail'];
    $storename = $fetcheddata['storename'];
  }
  $updateData = [
    'status' => 'inactive',
    'approvedby' => $_SESSION['user'] . ' - ' . $_SESSION['userrole'],
    'dateapproved' => $datetoday,
  ];
  $ref_table = 'stores/' . $storekey;
  $updatequery_result = $database->getReference($ref_table)
    ->update($updateData);
  if ($updatequery_result) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Content
    $message = file_get_contents('message.html');
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'send email';
    $mail->Password = 'password';
    $mail->setFrom('send email', 'meally App');
    $mail->addReplyTo('send email', 'meally App');
    $mail->addAddress($storeemail, 'Joe Doe');
    $mail->Subject = 'meally App Store Review Results';
    $mail->isHTML(true);
    $reason = "Lorem Ipsum";
    $mail->Body = "<!doctype html>
<html>
  <body style='background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;'>
    <span class='preheader' style='color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;'>Store Review Result.</span>
    <table role='presentation' border='0' cellpadding='0' cellspacing='0' class='body' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f6f6f6; width: 100%;' width='100%' bgcolor='#f6f6f6'>
      <tr>
        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;' valign='top'>&nbsp;</td>
        <td class='container' style='font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;' width='580' valign='top'>
          <div class='content' style='box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;'>

            <!-- START CENTERED WHITE CONTAINER -->
            <table role='presentation' class='main' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 3px; width: 100%;' width='100%'>

              <!-- START MAIN CONTENT AREA -->
              <tr>
                <td class='wrapper' style='font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;' valign='top'>
                  <table role='presentation' border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;' width='100%'>
                    <tr>
                      <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;' valign='top'>
                        <h2>Hi there, $storename</h2>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'><img src='https://meallyadmin.online/assets/img/accepted.png' height='80%' width='80%'/> </p>
                        <table role='presentation' border='0' cellpadding='0' cellspacing='0' class='btn btn-primary' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%;' width='100%'>
                          <tbody>
                            <tr>
                              <td align='left' style='font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;' valign='top'>
                                <table role='presentation' border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;'>
                                  <tbody>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                        
                        <br/>
                        <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'>- meally, ChowRev Inc.</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

            <!-- END MAIN CONTENT AREA -->
            </table>
            <!-- END CENTERED WHITE CONTAINER -->

            <!-- START FOOTER -->
            <div class='footer' style='clear: both; margin-top: 10px; text-align: center; width: 100%;'>
              <table role='presentation' ' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;' width='100%'>
                <tr>
                  <td class='content-block' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;' valign='top' align='center'>
                    <span class='apple-link' style='color: #999999; font-size: 12px; text-align: center;'>ChowRev Inc,  Caloocan, 1421 Metro Manila, Philippines</span>
                  </td>
                </tr>
                <tr>
                  <td class='content-block powered-by' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;' valign='top' align='center'>
                    Powered by <a href='http://meallyadmin.online/' style='color: #999999; font-size: 12px; text-align: center; text-decoration: none;'>meally</a>.
                  </td>
                </tr>
              </table>
            </div>
            <!-- END FOOTER -->

          </div>
        </td>
        <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;' valign='top'>&nbsp;</td>
      </tr>
    </table>
  </body>
</html>";

    if (!$mail->send()) {
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
      header('Location: dashboard.php');
      exit();
    }
  } else {
    echo "error";
    exit();
  }
}



if (isset($_POST['declinestore_btn'])) {
  $storekey = $_POST['declinestore_btn'];
  $ref_table = 'stores';
  $fetcheddata = $database->getReference($ref_table)->getChild($storekey)->getValue();
  if ($fetcheddata > 0) {
    $storeemail = $fetcheddata['storeemail'];
    $storename = $fetcheddata['storename'];
  }
  $updateData = [
    'status' => 'declined',
    'approvedby' => $_SESSION['user'] . ' - ' . $_SESSION['userrole'],
    'dateapproved' => $datetoday,
  ];
  $ref_table = 'stores/' . $storekey;
  $updatequery_result = $database->getReference($ref_table)
    ->update($updateData);
  if ($updatequery_result) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //Content
    $message = file_get_contents('message.html');
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->SMTPDebug = 0;
    $mail->Host = 'smtp.hostinger.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'sender email';
    $mail->Password = 'password';
    $mail->setFrom('sender email', 'meally App');
    $mail->addReplyTo('sender email', 'meally App');
    $mail->addAddress($storeemail, 'Joe Doe');
    $mail->Subject = 'meally App Store Review Results';
    $mail->isHTML(true);
    $reason = "Lorem Ipsum";
    $mail->Body = "<!doctype html>
        <html>
          <body style='background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;'>
            <span class='preheader' style='color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;'>Store Review Result.</span>
            <table role='presentation' border='0' cellpadding='0' cellspacing='0' class='body' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f6f6f6; width: 100%;' width='100%' bgcolor='#f6f6f6'>
              <tr>
                <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;' valign='top'>&nbsp;</td>
                <td class='container' style='font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; max-width: 580px; padding: 10px; width: 580px; margin: 0 auto;' width='580' valign='top'>
                  <div class='content' style='box-sizing: border-box; display: block; margin: 0 auto; max-width: 580px; padding: 10px;'>
        
                    <!-- START CENTERED WHITE CONTAINER -->
                    <table role='presentation' class='main' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; background: #ffffff; border-radius: 3px; width: 100%;' width='100%'>
        
                      <!-- START MAIN CONTENT AREA -->
                      <tr>
                        <td class='wrapper' style='font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;' valign='top'>
                          <table role='presentation' border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;' width='100%'>
                            <tr>
                              <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;' valign='top'>
                                <h2>Hi there, $storename</h2>
                                <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'><img src='https://meallyadmin.online/assets/img/declined.png' height='90%' width='90%'/> </p>
                                <table role='presentation' border='0' cellpadding='0' cellspacing='0' class='btn btn-primary' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; box-sizing: border-box; width: 100%;' width='100%'>
                                  <tbody>
                                    <tr>
                                      <td align='left' style='font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;' valign='top'>
                                        <table role='presentation' border='0' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;'>
                                          <tbody>
                                          </tbody>
                                        </table>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                                <p style='font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; margin-bottom: 15px;'>- meally, ChowRev Inc.</p>
                              </td>
                            </tr>
                          </table>
                        </td>
                      </tr>
        
                    <!-- END MAIN CONTENT AREA -->
                    </table>
                    <!-- END CENTERED WHITE CONTAINER -->
        
                    <!-- START FOOTER -->
                    <div class='footer' style='clear: both; margin-top: 10px; text-align: center; width: 100%;'>
                      <table role='presentation' ' cellpadding='0' cellspacing='0' style='border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;' width='100%'>
                        <tr>
                          <td class='content-block' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;' valign='top' align='center'>
                            <span class='apple-link' style='color: #999999; font-size: 12px; text-align: center;'>ChowRev Inc,  Caloocan, 1421 Metro Manila, Philippines</span>
                          </td>
                        </tr>
                        <tr>
                          <td class='content-block powered-by' style='font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; color: #999999; font-size: 12px; text-align: center;' valign='top' align='center'>
                            Powered by <a href='http://meallyadmin.online/' style='color: #999999; font-size: 12px; text-align: center; text-decoration: none;'>meally</a>.
                          </td>
                        </tr>
                      </table>
                    </div>
                    <!-- END FOOTER -->
        
                  </div>
                </td>
                <td style='font-family: sans-serif; font-size: 14px; vertical-align: top;' valign='top'>&nbsp;</td>
              </tr>
            </table>
          </body>
        </html>";

    if (!$mail->send()) {
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
      header('Location: dashboard.php');
      exit();
    }
  } else {
    echo "error";
    exit();
  }
}
