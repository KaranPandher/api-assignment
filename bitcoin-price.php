<?php
    $url = "https://bitpay.com/api/rates";
    $json = json_decode((file_get_contents($url)));
    $dollar = $btc = 0;

    foreach($json as $obj){
        if($obj->code=='CAD') $btc = $obj->rate;

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitcoin Exchange Rates</title>
    <!-- Stylesheet --> 
    <link href = "main.css" rel = "stylesheet" type = "text/css">

</head>
<body>
<div id = Btcprice> 
    <h1> Bitcoin Exchange Rates </h1> 
    <?php 
    echo '1 bitcoin = $' . $btc . 'CAD<br>';
    echo '10 dollars = ' . round($dollar*10,8) . ' BTC <br>';
    echo '1 bitcoin = $' . $btc . 'USD<br>';
    ?>
</div>
</body>
</html>