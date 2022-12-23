<?php

//http://localhost/files/arduino/?f2=56


//   GET https://api.thingspeak.com/update?api_key=HSEVD4U8HXYTWV4I&field1=15&field2=90
//$f2 = $_GET['f2'];

$url = 'https://api.thingspeak.com/channels/1686549/fields/2.json';
$data = array('api_key' => '23H32L3L1NNHPGQL', 'results' => '1' );

// use key 'http' even if you send the request to https://...
$options = array(
    'http' => array(
        'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        'method'  => 'GET',
        'content' => http_build_query($data)
    )
);
$context  = stream_context_create($options);
//$result = file_get_contents($url, false, $context);

//$json = json_decode(file_get_contents($url, false, $context));
//print_r($json);

$json = json_decode(file_get_contents($url, false, $context),true);
//print_r($json);


$new=$json['feeds'];
//print_r($new);
//echo "</br>";
//print_r($json);
//echo "</br>";
//echo "</br>";
$new2=$new['0'];
//print_r($new2);
//echo "</br>";
//echo "</br>";
$new3=$new2['field2'];
//print_r($new3);


//Array ( [channel] => Array ( [id] => 1686549 [name] => gsmiot [latitude] => 0.0 [longitude] => 0.0 [field1] => temp [field2] => humidity [created_at] => 2022-03-27T10:15:51Z [updated_at] => 2022-03-27T10:15:51Z [last_entry_id] => 19 ) [feeds] => Array ( [0] => Array ( [created_at] => 2022-03-28T05:02:51Z [entry_id] => 19 [field2] => 800 ) ) )

//if ($result === FALSE) { /* Handle error */ }

//var_dump($result);

//   pusl2022.atwebpages.com/?f2=33
//($json['feeds'])['field2'];

?>