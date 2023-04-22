<?php
   include 'connect.php';


   $sql="UPDATE users SET role='default' WHERE username='WillJackk28' ";
   if ($connection->query($sql)===TRUE) {
       echo "<script>
                alert('Transaction Status: Pending')
                window.location.href = 'deposit'
             </script>";
   }
  


?>