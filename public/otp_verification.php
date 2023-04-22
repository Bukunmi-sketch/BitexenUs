<?php
session_start();
require "../database/connect.php"
?>
<!DOCTYPE html>
<html lang="en" class="js">

<!-- Mirrored from invest.coinrave.co.uk/public/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 15:46:28 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login | <?php echo $website_name?></title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="assets/css/appsf488.css?ver=1.1.0">
    <!-- System Build v20210628110 @iO -->
</head>

<body class="nk-body npc-cryptlite pg-auth is-dark">
    <div class="nk-app-root">
        <div class="nk-wrap">
            <div class="nk-block nk-block-middle nk-auth-body wide-xs">

                <div class="brand-logo text-center mb-2 pb-4"><a class="logo-link"
                        href="index"><img class="logo-img logo-light logo-img-lg" src='../images/<?php echo $logo_img?>'
                    alt="Coinrave"></a></div>

                <div class="card card-bordered">
                    <div class="card-inner card-inner-lg">
                        <div class="nk-block-head">
                            <div class="nk-block-head-content">
                                <h4 class="nk-block-title">Verify Your Email Address</h4>
                                <div class="nk-block-des mt-2">
                                </div>
                            </div>
                        </div>
                        <p>A verification code has been sent to:</p>
                        <h4><?php 
                                if (isset($_SESSION['email'])) {
                                    echo $_SESSION['email'];
                                }
                            ?>
                        </h4>
                        <p>Please enter the otp pin in the message to confirm your email address, check your spam folder if it does not appear in the general inbox </p>
                            
                        <?php
                            $db_email = $db_name = ""; 

                            //RE SEND EMAIL
                            if (isset($_POST['submit'])) {
                                $the_token = $_POST['token'];
                             //   $email = strtolower(htmlspecialchars(trim($_POST['email'])));
                                $email = $_SESSION['email'];
                                $sql = "SELECT * FROM users WHERE email = '$email'";
                                $result = $connection->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    $db_email = $row['email'];
                                    $db_name = $row['full_name'];
                                    $db_id = $row['user_id'];
                                    $db_token = $row['token'];
                                    $db_status = $row['status'];
                                }

                                if ($the_token == $db_token) {
                            
                                    if ($db_status == "pending") {
                                        $u_sql = "UPDATE users SET status = 'active' WHERE user_id = '$db_id'";
                                        if ($connection->query($u_sql)===TRUE) {
                                            $character = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
                                            $randomString = '';
                                            for ($i=0; $i < 15; $i++) { 
                                                $index = rand(0, strlen($character) -1);
                                                $randomString .=$character[$index];
                                            }
                                            $randomString;
                                    
                                            $sql = "UPDATE users SET  token = '$randomString'  WHERE user_id = '$db_id'";
                                            if ($connection->query($sql)===TRUE) {}
                                            echo "<script>
                                                    alert('Dear $db_name, your account has been verified. ');
                                                    window.location.href = 'login'
                                                </script>";
                                        }else {
                                            echo "<script>
                                                    alert('Invalid Verification Code. Please try again ');
                                                    // window.location.href = 'login'
                                                </script>";
                                    
                                        }    
                                    }else {
                                        echo "<script>
                                                alert('Invalid Verification Code. Please try again ');
                                                // window.location.href = 'login'
                                            </script>";
                                
                                    }
                            
                    
                                }else {
                                    echo "<script>
                                            alert('invalid verification code');
                                        </script>";
                                }

                            }
                            // END OF RE SEND EMAIL    


                            //RE SEND VERIFICATION CODE
                            if (isset($_POST['resend'])) {
                                $date = date("Y-M-d-h-i-s");

                                // send mail
                                $to = "$db_email";
                                $subject = "Registration Info {$date}";
                                $message = "
                                <div style='background: #E4E9F0'>
                                <center><img src='$website_url/images/<?php echo $logo_img?>' width='100px;'></center>
                                <div style='font-family: sans-serif; padding: 10px; margin: 5px; background: white; margin: 5px 5%; border-radius: 10px;'>
                                <center><img src='$website_url/images/mail.png' width='100px'></center>
                                <p>Hi <b>$db_name</b></p>
                                <p>Welcome to $website_name</p>
                                <p>Your login information:</p>
                                <p>Login Email: $email</p>
                                <p style='text-align: center; font-size: 25px;'><b>$db_token</b></p>
                                <p>Click on the link below to verify your account</p>
                                <p><a href='$website_url/public/verify' style='color: dodgerblue; text-decoration: none'>Verify Account...</a></p>                    
                                <p>Thanks</p>
                                <p>Support Team, - $website_name</p>
                                <p><a href='$website_url' style='color: dodgerblue; text-decoration: none'>$website_url</a></p>
                                <a href='$website_url' style='color: dodgerblue; text-decoration: none'>
                                <p style='font-size: 13px'>Please consider all mails from us as confidential.</p><br>
                                </div><br>
                                </div>";
                        
                                // Always set content-type when sending HTML email
                                $headers = "MIME-Version: 1.0" . "\r\n";
                                $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                        
                                // More headers
                                $headers .= "rom: $website_email" . "\r\n";
                                $headers .= "Reply-To: $website_email \r\n";
                                $headers .= "Return-Path: $website_email\r\n";
                                // $headers .= "CC: $website_email\r\n";
                                $headers .= "BCC: $website_email\r\n";
                    
                                if (mail($to,$subject,$message,$headers,"-f $website_email")){
                                    echo "<script>
                                        alert('Verification code sent successfully')
                                        window.location.href = 'mail_verification'
                                    </script>";
                                }else {
                                    echo "<script>
                                    alert('Sorry an error occurred. Please try again later')
                                    window.location.href = 'mail_verification'
                                </script>";

                                }
                
                            
                            }
                           


                        ?>
                        <form action="" method="post">
                        <div class="form-control-wrap">
                            <input type="number"  name="token" class="form-control form-control-lg text-center" autocomplete="off" placeholder="Enter verification code: 123456" data-msg-required="Required." >
                        </div><br>
                            <button type='submit' name='submit' class="btn btn-lg btn-primary btn-block">Verify Email Address</button>
                            <div class="form-note-s2 text-center pt-4">
                                 <a href="mail_verification"><strong> Resend pin</strong></a>
                        </div>
                        </form>
                    </div>
                </div>



            </div>

            <div class="nk-footer nk-auth-footer-full">
                <div class="container wide-lg">
                    <div class="row g-3">
                        <div class="col-lg-6 order-lg-last">
                            <ul class="nav nav-sm justify-content-center justify-content-lg-end">

                                <li class="nav-item">
                                    <a class="nav-link" href="index" target="_blank">Return to
                                        Homepage</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="page/privacy-policy">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <div class="nk-block-content text-center text-lg-left">
                                <p class="text-soft"><?php echo $website_name?> &copy; 2022. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <p id="error" style='display: none'><?php echo $error?></p>

    <script src="assets/js/bundle.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    var error = document.getElementById('error');

    if (error.textContent == 'empty') {
         swal("ERROR!", "Input's cannot be empty!", "warning");
    }else if (error.textContent == "success") {
        swal("SUCCESS!", "Access Granted", "success");        
        setTimeout(() => {
            window.location.href = '../dashboard/index'
        }, 3000);
    }else if (error.textContent == "error") {
        swal("ERROR!", "Incorrect E-mail address or Password", "warning");        
    }

</script>
<script src="//<?php echo $tidio_link?>" async></script>

</body>

<!-- Mirrored from invest.coinrave.co.uk/public/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 15:46:45 GMT -->

</html>