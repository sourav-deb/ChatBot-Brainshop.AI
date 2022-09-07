<?php

// BrainShop.ai
// Brain ID: 165075
// API key: CULPpeZVCc6mApKk
// API URL: http://api.brainshop.ai/get?bid=165075&key=CULPpeZVCc6mApKk&uid=[uid]&msg=[msg]
  
    $key = $_GET['bot'];
    $email = $_GET['email'];

    $newKey = str_replace(' ', '%20', $key);

    $bid = "165075";
    $apiKey = "CULPpeZVCc6mApKk";
    $url = "http://api.brainshop.ai/get?bid=165075&key=CULPpeZVCc6mApKk&uid=165075&msg=".$newKey."&format=json" ;

    $response = @file_get_contents($url);

    $json_array = json_decode($response,true);
    

    // Checks for if system is connected with Internet or not
    if(!empty($json_array)){
        // echo ($json_array['cnt']);
        $msg = $json_array['cnt'];

        include 'mail.php';

    }else{
        // echo ("<b class='no-data'>No Internet Connection!</b>");
        echo ("<div class='error'><div class='msg-pad'>Error. Check your Internet Connections.</div></div>");
    }

    


?>