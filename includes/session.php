<?php session_start();
require "../database/connect.php";
$user_id = $_SESSION['user_id'];
$db_sql = "SELECT * FROM users WHERE user_id = '$user_id'";
$db_result = $connection->query($db_sql);
while ($row = $db_result->fetch_assoc()) {
    $full_name = $row['full_name'];
    $role = $row['role'];
    $balance = $row['balance'];
    $b_profit = $row['profit'];
    $b_bonus = $row['bonus'];
    $username = $row['username'];
    $email = $row['email'];
    $image = $row['image'];
    $phone_number = $row['phone_number'];
    $package = $row['package'];
    $package_status = $row['package_status'];
    $status = $row['status'];
    $currency = $row['currency'];
    $country = $row['country'];
    $password = $row['password'];
    $mode = $row['mode'];
    $eth_balance = $row['eth_balance'];
    $won = $row['won'];
    $loss = $row['loss'];
    $account_number = $row['account_number'];
    $account_name = $row['account_name'];
    $bank = $row['bank'];
    $swift_code = $row['swift_code'];
    $bitcoin_wallet = $row['bitcoin_wallet'];
    $eth_wallet = $row['eth_wallet'];
    $cash_app = $row['cash_app'];
    $paypal = $row['paypal'];
    $acct_status = $row['acct_status'];
}


/*
$dbsettings_sql = "SELECT * FROM settings";
$db_settings = $connection->query($dbsettings_sql);
while ($row_result = $db_settings->fetch_assoc()) {
    $bitcoin_address = $row_result['bitcoin_address'];
    $eth_address = $row_result['eth_address'];
    $usdt_address = $row_result['usdt_address'];
    $withdrawal_pin = $row_result['withdrawal_pin'];
    $bitcoin_img = $row_result['bitcoin_img'];
    $eth_img = $row_result['eth_img'];
    $usdt_img = $row_result['usdt_img'];
    $logo_img = $row_result['logo_img'];
}


*/



$currency = '$';
if ($b_profit <= 0 ) {
    $b_profit = 0;
}
if ($b_bonus <= 0 ) {
    $b_bonus = 0;
}
if ($balance <= 0 ) {
    $balance = 0;
}
$t_profit = $balance + $b_profit + $b_bonus;
if (!isset($_SESSION['user_id'])) {
    echo "<script>window.location.href = '../dashboard/logout'</script>";
}

if ($status == "pending") {
    echo "<script>
            alert('Sorry your account info has not been approved. Please check your mail to verify your account')
            window.location.href = '../dashboard/logout'
        </script>";
}
if ($status == 'suspend') {
    echo "<script>
            alert('Sorry your account has been suspended. Please contact our customer service for more info')
            window.location.href = '../dashboard/logout'
        </script>";
}
if ($status == 'inactive') {
    echo "<script>
            alert('Sorry your account is inactive at the moment. Please contact our customer service for more info about this error. Thank you')
            window.location.href = '../dashboard/logout'
        </script>";
}
?>