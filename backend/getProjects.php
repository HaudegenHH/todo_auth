<?php 
require_once './functions.php';

cors();

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://127.0.0.1:81/redmine/projects.json',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json',
    'X-Redmine-API-Key: 34fcaffbde7e54c0e29b0d715f2d93224e38656d'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

echo json_encode($response);


?> 