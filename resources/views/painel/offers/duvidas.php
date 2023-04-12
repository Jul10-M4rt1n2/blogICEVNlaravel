<?php



require_once "wp-config.php";
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

function sanitizeString($string)
{

    // matriz de entrada
    $what = array('+');

    // matriz de saída
    $by   = array(' ');

    // devolver a string
    return (str_replace($what, $by, $string));
}

$response = array();
if (isset($_POST)) {




    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";
    $email_destiny = "sites.fiergs@gmail.com";
    $mail->SMTPDebug  = false;
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = $email_destiny; //servidor
    $mail->Password   = "icvneqjgrgorcpxf";

    $phone = sanitizeString(isset($_POST['phone']) ? utf8_decode(sanitizeString($_POST['phone'])) : '');
    $email = sanitizeString(isset($_POST['email']) ? utf8_decode($_POST['email']) : '');
    $yourname = sanitizeString(isset($_POST['yourname']) ? utf8_decode(sanitizeString($_POST['yourname'])) : '');
    $cpf = sanitizeString(isset($_POST['cpf']) ? utf8_decode($_POST['cpf']) : '');
    $city = sanitizeString(isset($_POST['city']) ? utf8_decode(sanitizeString($_POST['city'])) : '');
    $contacted = sanitizeString(isset($_POST['contacted']) ? utf8_decode(sanitizeString($_POST['contacted'])) : '');
    $howtoknow = sanitizeString(isset($_POST['howtoknow']) ? utf8_decode(sanitizeString($_POST['howtoknow'])) : '');
    $message = sanitizeString(isset($_POST['message']) ? utf8_decode(sanitizeString($_POST['message'])) : '');
    $subject = sanitizeString(isset($_POST['subject']) ? utf8_decode(sanitizeString($_POST['subject'])) : '');


    $conn = mysqli_connect('localhost', constant('DB_USER'), constant('DB_PASSWORD'), constant('DB_NAME'));
    $sql_mail_sender = "SELECT * FROM wp_cemail WHERE description = '" . $contacted . "'";
    $mail_sender = mysqli_query($conn, $sql_mail_sender);
    while ($mail_resender = mysqli_fetch_object($mail_sender)) {
        $email_contact =  $mail_resender->email;
    }
    $insert = "INSERT INTO wp_contacts (phone, yourname,email,contacted,date,cpf,message,subject,form) VALUES ";
    $insert .= "('{$phone}','{$yourname}','{$email}','{$contacted}',NOW(),'{$cpf}','{$message}','{$subject}','" . utf8_decode('Tire suas dúvidas') . "')";

    $resultForm = mysqli_query($conn, $insert);
    if ($resultForm) {

        $response['status'] = 200;
        $response['general_message'] = 'Registro Salvo com sucesso';

        $mail->IsHTML(true);
        // $mail->AddAddress('fmmh18@gmail.com', "Teste");
        $mail->AddAddress($email_destiny, ($subject));
        // $mail->addBCC($ocut, utf8_decode($subject));
        $mail->addBCC($email, ($subject));
        $mail->addBCC($email_contact, ($subject));
        /* $mail->addBCC('fhayashida@afdsolution.tec.br', ($subject)); */
         $mail->addBCC('senai@senairs.org.br', ($subject));
        $mail->addReplyTo($email, ($subject));
        $mail->setfrom('naoresponda@senairs.org.br', ($subject));
        $mail->Subject = ($subject);
        $content = '<!DOCTYPE html>
        <html lang="pt-BR" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:v="urn:schemas-microsoft-com:vml">
            <head>
            <title></title>
            <meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
            <meta content="width=device-width, initial-scale=1.0" name="viewport"/><!--[if mso]><xml><o:OfficeDocumentSettings><o:PixelsPerInch>96</o:PixelsPerInch><o:AllowPNG/></o:OfficeDocumentSettings></xml><![endif]-->
            <style>
                    * {
                        box-sizing: border-box;
                    }
            
                    body {
                        margin: 0;
                        padding: 0;
                    }
            
                    a[x-apple-data-detectors] {
                        color: inherit !important;
                        text-decoration: inherit !important;
                    }
            
                    #MessageViewBody a {
                        color: inherit;
                        text-decoration: none;
                    }
            
                    p {
                        line-height: inherit
                    }
                    .link-head-mail a{
                        text-decoration:none!important;
                        color:#666666!important;
                    }
                    .desktop_hide,
                    .desktop_hide table {
                        mso-hide: all;
                        display: none;
                        max-height: 0px;
                        overflow: hidden;
                    }
            
                    .image_block img+div {
                        display: none;
                    }
            
                    @media (max-width:620px) {
                        .desktop_hide table.icons-inner {
                            display: inline-block !important;
                        }
            
                        .icons-inner {
                            text-align: center;
                        }
            
                        .icons-inner td {
                            margin: 0 auto;
                        }
            
                        .row-content {
                            width: 100% !important;
                        }
            
                        .mobile_hide {
                            display: none;
                        }
            
                        .stack .column {
                            width: 100%;
                            display: block;
                        }
            
                        .mobile_hide {
                            min-height: 0;
                            max-height: 0;
                            max-width: 0;
                            overflow: hidden;
                            font-size: 0px;
                        }
            
                        .desktop_hide,
                        .desktop_hide table {
                            display: table !important;
                            max-height: none !important;
                        }
                    }
                </style>
            </head>
            <body style="background-color: #f5f5f5; margin: 0; padding: 0; -webkit-text-size-adjust: none; text-size-adjust: none;">
            <table border="0" cellpadding="0" cellspacing="0" class="nl-container" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #f5f5f5;" width="100%">
            <tbody>
            <tr>
            <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
            <tbody>
            <tr>
            <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; border-bottom: 1px solid #666666; width: 600px;" width="600">
            <tbody>
            <tr>
            <td class="column column-1" style="font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="33.333333333333336%">
            <table border="0" cellpadding="25" cellspacing="0" width="100%">
            <tr>
            <td class="pad">
            <div align="center" class="alignment" style="line-height:10px"><a href="www.senairs.org.br" style="outline:none; color:#666666; text-decoration:none;" tabindex="-1" target="_blank"><img alt="" src="'.get_template_directory_uri() .'/assets/img/imgs-email/logo.png" style="display: block; height: auto; border: 0; width: 118px; max-width: 100%;" title="" width="118"/></a></div>
            </td>
            </tr>
            </table>
            </td>
            <td class="column column-2" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="66.66666666666667%">
            <table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
            <tr>
            <td class="pad">
                    <table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
                        <tr>
                            <td class="pad">
                                <div style="font-family: "Trebuchet MS", Tahoma, sans-serif">
                                    <div class="" style="font-size: 12px; font-family: "Trebuchet MS", "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif; mso-line-height-alt: 24px; color: #666666; line-height: 2;">
                                        <p class="link-head-mail" style="margin: 0; font-size: 16px; text-align: right; mso-line-height-alt: 32px; color:#666666; text-decoration:none;">www.senairs.org.br</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
            <tbody>
            <tr>
            <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" width="600">
            <tbody>
            <tr>
            <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
            <table border="0" cellpadding="0" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
            <tr>
            <td class="pad" style="width:100%;padding-right:0px;padding-left:0px;">
            <div align="center" class="alignment" style="line-height:10px"><img alt="" src="'.get_template_directory_uri() .'/assets/img/imgs-email/correio.png" style="display: block; height: auto; border: 0; width: 118px; max-width: 100%;" title="" width="118"/></div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
            <tbody>
            <tr>
            <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" width="600">
            <tbody>
            <tr>
            <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
            <table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
            <tr>
            <td class="pad">
            <div style="font-family: Trebuchet MS, Tahoma, sans-serif">
            <div class="" style="font-size: 12px; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #eb6625; line-height: 1.2;">
            <p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 19.2px;"><span style="font-size:38px;"><strong>'.utf8_encode($subject).' </strong></span></p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border="0" cellpadding="10" cellspacing="0" class="text_block block-2" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
            <tr>
            <td class="pad">
            <div style="font-family: Trebuchet MS, Tahoma, sans-serif">
            <div class="" style="font-size: 12px; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #666666; line-height: 1.2;">
            <p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 19.2px;"><strong><span style="font-size:24px;">Olá, '.utf8_encode($yourname).'</span></strong></p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border="0" cellpadding="10" cellspacing="0" class="text_block block-3" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
            <tr>
            <td class="pad">
            <div style="font-family: Trebuchet MS, Tahoma, sans-serif">
            <div class="" style="font-size: 12px; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
            <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;">A sua dúvida sobre o curso</p>
            <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;"><strong> '.utf8_encode($course).' </strong></p>
            <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;">foi registrada com sucesso.</p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border="0" cellpadding="10" cellspacing="0" class="text_block block-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
            <tr>
            <td class="pad">
            <div style="font-family: Trebuchet MS, Tahoma, sans-serif">
            <div class="" style="font-size: 12px; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
            <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;">Em breve, você receberá o contato de</p>
            <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;">um de nossos atendentes.</p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border="0" cellpadding="10" cellspacing="0" class="text_block block-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
            <tr>
            <td class="pad">
            <div style="font-family: Trebuchet MS, Tahoma, sans-serif">
            <div class="" style="font-size: 12px; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
            <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;">Dúvidas? Contate nossa Central de Relacionamento</p>
            <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;">0800 051 8555</p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            <table border="0" cellpadding="10" cellspacing="0" class="text_block block-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
            <tr>
            <td class="pad">
            <div style="font-family: Trebuchet MS, Tahoma, sans-serif">
            <div class="" style="font-size: 12px; font-family: Trebuchet MS, Lucida Grande, Lucida Sans Unicode, Lucida Sans, Tahoma, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #555555; line-height: 1.2;">
            <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;">Obrigado por escolher o SENAI!</p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-4" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
            <tbody>
            <tr>
            <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #efefef; color: #000000; width: 600px;" width="600">
            <tbody>
            <tr>
            <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
            <table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
            <tr>
            <td class="pad">
            <div style="font-family: Arial, sans-serif">
            <div class="" style="font-size: 12px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #bcbcbc; line-height: 1.2;">
            <p style="margin: 0; font-size: 16px; text-align: center; mso-line-height-alt: 19.2px;">ESTA MENSAGEM É AUTOMÁTICA, FAVOR NÃO RESPONDÊ-LA</p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-5" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
            <tbody>
            <tr>
            <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" width="600">
            <tbody>
            <tr>
            <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
            <table border="0" cellpadding="25" cellspacing="0" class="image_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
            <tr>
            <td class="pad">
            <div align="center" class="alignment" style="line-height:10px"><a href="www.senairs.org.br" style="outline:none" tabindex="-1" target="_blank"><img alt="" src="'.get_template_directory_uri() .'/assets/img/imgs-email/logo.png" style="display: block; height: auto; border: 0; width: 118px; max-width: 100%;" title="" width="118"/></a></div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-6" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
                <tbody>
                    <tr>
                        <td>
                            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" width="600">
                                <tbody>
                                    <tr>
                                        <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; vertical-align: middle; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="25%">
                                            <table width="100%" border="0" cellpadding="10" cellspacing="0" role="presentation">
                                                <tr>
                                                    <td class="pad">
                                                        <div class="alignment" align="center">
                                                            <table class="social-table" width="168px" border="0" cellpadding="0" cellspacing="0" role="presentation" >
                                                                <tr>
                                                                    <td style="padding:0 5px 0 5px;"><a href="https://www.instagram.com/sesirsoficial/" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-default-gray/instagram@2x.png" width="32" height="32" alt="Instagram" title="instagram" style="display: block; height: auto; border: 0;"></a></td>
                                                                    <td style="padding:0 5px 0 5px;"><a href="https://www.facebook.com/sesirsoficial/" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-default-gray/facebook@2x.png" width="32" height="32" alt="Facebook" title="facebook" style="display: block; height: auto; border: 0;"></a></td>
                                                                    <td style="padding:0 5px 0 5px;"><a href="https://www.linkedin.com/company/sesirs" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-default-gray/linkedin@2x.png" width="32" height="32" alt="Linkedin" title="linkedin" style="display: block; height: auto; border: 0;"></a></td>
                                                                    <td style="padding:0 5px 0 5px;"><a href="https://www.twitter.com/senai_rs/" target="_blank"><img src="https://app-rsrc.getbee.io/public/resources/social-networks-icon-sets/t-only-logo-default-gray/twitter@2x.png" width="32" height="32" alt="Twitter" title="twitter" style="display: block; height: auto; border: 0;"></a></td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-7" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
            <tbody>
            <tr>
            <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" width="600">
            <tbody>
            <tr>
            <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
            <table border="0" cellpadding="10" cellspacing="0" class="text_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; word-break: break-word;" width="100%">
            <tr>
            <td class="pad">
            <div style="font-family: Arial, sans-serif">
            <div class="" style="font-size: 12px; font-family: Arial, Helvetica Neue, Helvetica, sans-serif; mso-line-height-alt: 14.399999999999999px; color: #bcbcbc; line-height: 1.2;">
            <p style="margin: 0; font-size: 14px; text-align: center; mso-line-height-alt: 16.8px;">Se você não deseja mais receber este e-mail, <strong><a href="#" style="text-decoration:none; color:#666666">cancele o recebimento</a></strong></p>
            </div>
            </div>
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row row-8" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
            <tbody>
            <tr>
            <td>
            <table align="center" border="0" cellpadding="0" cellspacing="0" class="row-content stack" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; background-color: #ffffff; color: #000000; width: 600px;" width="600">
            <tbody>
            <tr>
            <td class="column column-1" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt; font-weight: 400; text-align: left; padding-bottom: 5px; padding-top: 5px; vertical-align: top; border-top: 0px; border-right: 0px; border-bottom: 0px; border-left: 0px;" width="100%">
            <table border="0" cellpadding="0" cellspacing="0" class="icons_block block-1" role="presentation" style="mso-table-lspace: 0pt; mso-table-rspace: 0pt;" width="100%">
            <tr>
            <td class="pad" style="vertical-align: middle; color: #9d9d9d; font-family: inherit; font-size: 15px; padding-bottom: 5px; padding-top: 5px; text-align: center;">
            </td>
            </tr>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table>
            </td>
            </tr>
            </tbody>
            </table><!-- End -->
            </body>
        </html>';

        $mail->MsgHTML($content);
        if (!$mail->Send()) {
            echo
            '<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">Erro!</h4>
        <p>Erro no envio do email, por favor tente mais tarde!</p>
        <hr>
        <p class="mb-0">Obrigado!</p>
        </div>';
        }
        echo json_encode($response);
    } else {
        $response['status'] = 500;
        $response['general_message'] = 'não pode salvar ';
        echo json_encode($response);
    }
} else {
    $response['status'] = 500;
    $response['general_message'] = 'POST Vázio';

    echo json_encode($response);
}
