<?php 
    session_start();
       if (isset($_GET['id'])) {
        $the_id = $_GET['id'];
     $_SESSION['user_id'] = $the_id;
      $_SESSION['user_id'];
       echo "<script>window.location.href = '../dashboard/index'</script>";
    }


?>