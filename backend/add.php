<?php
$data = json_decode(array_keys($_POST)[0], true);
$pass = "ac145853";
$user = "bf63c731bc002c";
$host = "eu-cdbr-west-02.cleardb.net";
$db_name = "heroku_afe7ba2e49888d1";

$cols = "name,price,sku,attribute,type";
$vals = '"'.str_replace("_", " " ,$data['name']).'"'.",".$data['price'].",".'"'.$data['sku'].'"'.",".'"'.str_replace("_", " " ,$data['attr']).'"'.",".'"'.$data['type'].'"';
$pass = "root";
$conn = mysqli_connect($host,$user,$pass,$db_name) or die("Connection died!");
$sql = "INSERT INTO r0.r1 ($cols) VALUES($vals);";
if ($conn->query($sql) === TRUE) {
    $conn->close();
    var_dump(http_response_code(200));
  } else {
    $conn->close();
    var_dump(http_response_code(404));
  }
?>