<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Select language \n";
    $response .= "1. For Amharic \n";
    $response .= "2. For Afaan Oromoof";
    $response .= "3. For English";

} else if ($text == "3") {
    // Business logic for first level response
    $response = "CON Please select a Product \n";
    $response .= "1. Mobile Card \n";
    $response .= "2. Drinks and packed food \n";
    $response .= "3. Student accessories \n";
    $response .= "4. More \n";
    $response .= "5. Make a request \n";
    
} else if($text == "3*1") { 
    $response = "CON Please select a Product \n";
    $response .= "1. Mobile Card 15 ETB\n";
    $response .= "2. Mobile Card 25 ETB\n";
    $response .= "3. Mobile Card 50 ETB\n";
    $response .= "4. More\n";
    
} else if($text == "3*1*2"){
    $response = "CON Service Cost is 4ETB  \n";
    $response .= "1. Procced and Complete order \n";
    $response .= "1. Cancel order \n";
} else if($text == "3*1*2*1") {
    $response = "END Sorry, Service is temorarily unavailable";
} else if ($text == "3*2") {
    $response = "CON Please select a Product \n";
    $response .= "1.Drinks \n";
    $response .= "2.Packed Foods \n";
} else if ($text == "3*2*1") {
    $response = "CON Please select a Product \n";
    $response .= "1.Abo tebel \n";
    $response .= "2.Packed Water \n";
    $response .= "3.Mirinda \n";
    $response .= "4.more \n";
} else if ($text == "3*2*1*1") {
    $response = "CON Service Cost is 7ETB";
    $response .= "1. Procced and Complete order \n";
    $response .= "1. Cancel order \n";
} else if ($text == "3*2*1*1*1"){
    $response = "END Sorry, Service is temorarily unavailable";
}

// Echo the response back to the API
header('Content-type: text/plain');
echo $response;

