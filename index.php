<?php

declare(strict_types=1);

const API = 'https://api.thecatapi.com/v1/images/search';
$jsonApi = file_get_contents(API);
$decodedJson = json_decode($jsonApi, true);
$id = "id: {$decodedJson[0]['id']}";
$url = "url: {$decodedJson[0]['url']}";
$width = "width: {$decodedJson[0]['width']}px";
$height = "height: {$decodedJson[0]['height']}px";
file_put_contents('json.txt', "$id\n$url\n$width\n$height\n\n", FILE_APPEND);
if ($file = fopen('json.txt', 'r')) {
  while (!feof($file)) {
    $line = fgets($file);
    echo $line;
  }
  fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cat API</title>
</head>

<body style="white-space: pre;">

</body>

</html>