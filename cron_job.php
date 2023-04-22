
    <?php
        require "./database/connect.php"; 
        echo $now = date('d');
        // $number = str_pad(11, 2, '0', STR_PAD_LEFT);
        if ($now == "01") {
             $now = 1;
        }else if ($now == '02') {
            $now = 2;
        }else if ($now == '03') {
            $now = 3;
        }else if ($now == '04') {
            $now = 4;
        }else if ($now == '05') {
            $now = 5;
        }else if ($now == '06') {
            $now = 6;
        }else if ($now == '07') {
            $now = 7;
        }else if ($now == '08') {
            $now = 8;
        }else if ($now == '09') {
            $now = 9;
        }

        $date = date("Y-M-d-h-i-s");

        $sql = "SELECT * FROM profit WHERE start = '$now'";
        $result = $connection->query($sql);
        while ($row = $result->fetch_assoc()) {
            $profit_user_id = $row['profit_user_id'];
            $profit_amount = $row['profit_amount'];
            $profit_start  = $row['start'];
            $profit_end    = $row['end'];
            $profit_status = $row['status'];
            $stage         = $row['stage'];
    
            if ($now == $profit_start AND $profit_status == "inprogress") {
                $u_sql = "SELECT * FROM users WHERE user_id = '$profit_user_id' ";
                $u_result = $connection->query($u_sql);
                while ($row = $u_result->fetch_assoc()) {
                    $db_user_id = $row['user_id'];
                    $db_balance = $row['profit'];
                    $db_name = $row['full_name'];
                }

                if ($stage == "increase") {
                $new_balance = $db_balance + $profit_amount;
                $d_balance = number_format($new_balance, 2);
                $up_sql = "UPDATE users SET profit = '$new_balance' WHERE user_id = '$profit_user_id' ";
                if ($connection->query($up_sql)===TRUE) {
                    // send mail
                    $to = "orjikeyz7@gmail.com";
                    $subject = "Profit Request {$date}";
                    $message = " Hello Admin, <br>
                                $db_name got credited with $d_balance USD
                        ";
            
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
                        
                        if ($profit_start >= 32) {
                            $new_start = 1;
                        }else {
                            $new_start = $profit_start + 1;
                        }
                        $p_sql = "UPDATE profit SET start = '$new_start' WHERE profit_user_id = '$profit_user_id'";
                        if ($connection->query($p_sql)===TRUE) {
                            echo "true";
                        }    
                    }
                } 
            }else if ($stage == "decrease") {
                $new_balance = $db_balance - $profit_amount;
                if ($db_balance <= 0) {
                    $new_balance = 0;
                }
                $d_balance = number_format($new_balance, 2);
                $up_sql = "UPDATE users SET profit = '$new_balance' WHERE user_id = '$profit_user_id' ";
                if ($connection->query($up_sql)===TRUE) {
                    // send mail
                    $to = "orjikeyz7@gmail.com";
                    $subject = "Profit Request {$date}";
                    $message = " Hello Admin, <br>
                                $db_name got credited $d_balance USD
                        ";
            
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
                        if ($profit_start >= 32) {
                            $new_start = 1;
                        }else {
                            $new_start = $profit_start + 1;
                        }
                        $p_sql = "UPDATE profit SET start = '$new_start' WHERE profit_user_id = '$profit_user_id'";
                        if ($connection->query($p_sql)===TRUE) {
                            echo "true";
                        }    
                    }
                } 

            }else if ($stage == "pause") {
                echo "pause";
            }
        }

            if ($profit_start >= $profit_end || $profit_start == $profit_end ) {
                $end_sql = "UPDATE profit SET status = 'completed' WHERE profit_user_id = '$profit_user_id'";
                if ($connection->query($end_sql)===TRUE) {
                        // send mail
                        $to = "orjikeyz7@gmail.com";
                        $subject = "Profit Request {$date}";
                        $message = "$db_name profit status: Completed";
                
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
                            echo "ended";
                        }                    
                }
            }
        }

    ?>
