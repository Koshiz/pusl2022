<?php

//http://localhost/files/arduino/?f2=56


//   GET https://api.thingspeak.com/update?api_key=HSEVD4U8HXYTWV4I&field1=15&field2=90
$f2 = $_GET['f2'];

$url = 'https://api.thingspeak.com/update';
$data = array('api_key' => 'HSEVD4U8HXYTWV4I', 'field2' => $f2 );

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);

//$json = json_decode(file_get_contents($url, false, $context));
//print_r($json);

if ($result === FALSE) { /* Handle error */ }

//var_dump($result);
//echo "<pre style='word-wrap: break-word; white-space: pre-wrap;'>$result</pre>";
//   pusl2022.atwebpages.com/?f2=33
var_export($result);


?>