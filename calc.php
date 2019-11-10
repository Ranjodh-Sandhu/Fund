<?php
    $credit_score = $_POST['creditscore'];
    if($credit_score > 760) 
        $apr = 3.2 + mt_rand(0, 100) * .01;
    else if($credit_score > 700)
        $apr = 3.4+ mt_rand(0, 100) * .01;
    else if($credit_score > 680)
        $apr = 3.6+ mt_rand(0, 100) * .01;
    else if($credit_score > 660)
        $apr = 3.8+ mt_rand(0, 100) * .01;
    else if($credit_score > 640)
        $apr = 4.2+ mt_rand(0, 100) * .01;
    else if ($credit_score > 620)
        $apr = 4.8+ mt_rand(0, 100) * .01;

    echo $apr;
?>