<?php 
session_start();
require "../database/connect.php";
$user_id = $_SESSION['user_id'];
$db_sql = "SELECT * FROM users WHERE user_id = '$user_id'";
$db_result = $connection->query($db_sql);
while ($row = $db_result->fetch_assoc()) {
    $full_name = $row['full_name'];
    $role = $row['role'];
    $balance = $row['balance'];
    $username = $row['username'];
    $email = $row['email'];
    $image = $row['image'];
    $phone_number = $row['phone_number'];
    $package = $row['package'];
    $package_status = $row['package_status'];
    $status = $row['status'];
    $currency = $row['currency'];
    $mode = $row['mode'];
    $eth_balance = $row['eth_balance'];
}
$currency = '$';

if (!isset($_SESSION['user_id'])) {
    echo "<script>window.location.href = '../public/login'</script>";
}

// if ($status == "pending") {
//     echo "<script>
//             alert('Sorry your account info has not been. Please check your mail to verify your account')
//             window.location.href = '../public/login'
//         </script>";
// }

// if ($status == 'suspend') {
//     echo "<script>
//             alert('Sorry your account has been suspended. Please contact our customer service for info')
//             window.location.href = '../dashboard/logout'
//         </script>";
// }

if ($role != 'admin') {
    echo "<script>
            window.location.href = '../dashboard/logout'
        </script>";
}

?>
