<?php session_start();
    require "connect.php";
    if (isset($_SESSION['user_id'])) {
        echo "<script>window.location.href = '../dashboard/index'</script>";
    }
    $username = $password = $error = $db_username = $db_password = $db_id = "";
    if (isset($_POST['submit'])) {
        htmlspecialchars(trim($username = $_POST['username']));
        htmlspecialchars(trim($password = $_POST['password']));

        $username = mysqli_real_escape_string($connection, $username);
        $password = mysqli_real_escape_string($connection, $password);

        $st_username = strtolower($username);
        $st_password = strtolower($password);

        $sql = "SELECT * FROM users WHERE username = '$st_username' AND password  = '$st_password'";
        $result = $connection->query($sql);
        while ($row = $result->fetch_assoc()) {
            $db_username = $row['username'];
            $db_password = $row['password'];
            $db_id = $row['user_id'];
        }

        if (empty($st_username) || empty($st_password)) {
            $error = "empty";
        }else if ($db_username == $st_username || $db_password == $st_password) {
            $_SESSION['user_id'] = $db_id;
            // $error = 'success';
        echo "<script>window.location.href = '../public/session.php?id=$db_id'</script>";
        }else {
            $error = "error";
        }
    }
?>