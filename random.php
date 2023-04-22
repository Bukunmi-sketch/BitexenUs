<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require "./database/connect.php";

                    $curl = curl_init();

            curl_setopt_array($curl, [
                CURLOPT_URL => "https://random-user-by-api-ninjas.p.rapidapi.com/v1/randomuser",
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_HTTPHEADER => [
                    "X-RapidAPI-Host: random-user-by-api-ninjas.p.rapidapi.com",
                    "X-RapidAPI-Key: d0fde9724dmsh195c3089b5eefdcp1cb84ajsnace6cd141b77"
                ],
            ]);

            $response = curl_exec($curl);
            $err = curl_error($curl);

            curl_close($curl);

            if ($err) {
                echo "cURL Error #:" . $err;
            } else {
                $response;
                $x = json_decode($response);
                $y = ucfirst($x->username);
            }
        $sql = "SELECT * FROM random ORDER BY RAND() LIMIT 1 ";
        $result = $connection->query($sql);
        while ($row = $result->fetch_assoc()) {
            $country = $row['country'];
            $amount = $row['amount'];
            $type = $row['type'];
            $us = $row['name'];
            $text = $row['text'];
        }
    ?>

    <!-- <p style="background: #f0eeee; padding: 10px; width: 300px; border-radius: 5px; border: 1px solid dodgerblue; font-family: Trebuchet MS; display: flex"><img src="../images/bitcoin_icon.png" width="50px"><span id='demo'><?php echo $y?></span><?php echo $text?></b></p> -->

    <p style="background: #f0eeee; padding: 10px; width: 300px; border-radius: 5px; border: 1px solid dodgerblue; font-family: Trebuchet MS; display: flex"><img src="../images/bitcoin_icon.png" width="50px"><?php echo $y.' '.$text?></p>

    

<script>
    var demo = document.getElementById('demo');
    // var xhr = new XMLHttpRequest();
    // xhr.onreadystatechange = function () {
    //    demo.textContent = xhr.responseText(); 
    //    console.log(xhr.responseText)
    // }
    // xhr.open("GET", "test3.php", true)
    // xhr.send()

    var name = "https://localhost/capitalxch/test3.php"
        fetch(name)
    .then(response => response.json())
    .then(data => console.log(demo.textContent = data.username));

</script>


</body>
</html>