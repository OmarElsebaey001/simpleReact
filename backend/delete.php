<?php
$data = json_decode(array_keys($_POST)[0], true);
$ids  =  $data['ids'];
$pass = "ac145853";
$user = "bf63c731bc002c";
$host = "eu-cdbr-west-02.cleardb.net";
$db_name = "heroku_afe7ba2e49888d1";

$conn = mysqli_connect($host,$user,$pass,$db_name) or die("Connection died!");
$sql = "DELETE FROM r0.r1 WHERE `sku` IN ($ids);";
if ($conn->query($sql) === TRUE) {
    $conn->close();
    var_dump(http_response_code(200));
  } else {
    $conn->close();
    var_dump(http_response_code(404));
  }
?>