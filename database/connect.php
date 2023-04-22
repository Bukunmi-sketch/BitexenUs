<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'bitexenus_db'); 
  //  $connection = mysqli_connect('bitexenus.com', 'bitexenu_admin', 'Aquafina2002!',  'bitexenu_db'); 
  
    // $connection = mysqli_connect('server110', 'firsxmje_elite_root', 'Support5997733', 'firsxmje_elite_db');       
    // $connection = mysqli_connect('wgh11.wghservers.com', 'brandste_capi-root', 'Orji5997733', 'brandste_capi-db');
    if (!$connection) {
        die('error connecting to database');
    }else {
        // echo "we are connected";
    }
  //  error_reporting(0);
    $settings_sql = "SELECT * FROM settings";
    $settings_result = $connection->query($settings_sql);
    while ($row = $settings_result -> fetch_assoc()) {
        $website_name = $row['website_name'];
        $website_url = $row['website_url'];
        $website_email = $row['website_email'];
        $admin_mail = $row['admin_mail'];
        $tidio_link = $row['tidio_link'];
        $bitcoin_address = $row['bitcoin_address'];
        $eth_address = $row['eth_address'];
        $usdt_address = $row['usdt_address'];
        $withdrawal_code = $row['withdrawal_pin'];
        $bitcoin_img = $row['bitcoin_img'];
        $eth_img = $row['eth_img'];
        $usdt_img = $row['usdt_img'];
        $logo_img = $row['logo_img'];
    }
?>