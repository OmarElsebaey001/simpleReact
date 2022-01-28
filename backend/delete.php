<?php
$data = json_decode(array_keys($_POST)[0], true);
$ids  =  $data['ids'];
$pass = "root";
$conn = mysqli_connect("localhost:3306","root","root","r0") or die("Connection died!");
$sql = "DELETE FROM r0.r1 WHERE `sku` IN ($ids);";
if ($conn->query($sql) === TRUE) {
    $conn->close();
    var_dump(http_response_code(200));
  } else {
    $conn->close();
    var_dump(http_response_code(404));
  }
?>