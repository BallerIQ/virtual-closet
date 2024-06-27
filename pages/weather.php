<?php
$apiKey = '900e15ce40594e9a975192208241805';
$city = 'London'; // Replace with the desired city

$url = "http://api.weatherapi.com/v1/current.json?key=$apiKey&q=$city";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);
curl_close($ch);

$data = json_decode($response, true);

$temperature = $data['current']['temp_c'];
$description = $data['current']['condition']['text'];
?>

<!-- Output the weather data in HTML -->
<p>Temperature: <?php echo $temperature; ?> &#8451;</p>
<p>Description: <?php echo $description; ?></p>