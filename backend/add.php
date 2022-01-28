<?php
$data = json_decode(array_keys($_POST)[0], true);
$cols = "name,price,sku,attribute,type";
$vals = '"'.str_replace("_", " " ,$data['name']).'"'.",".$data['price'].",".'"'.$data['sku'].'"'.",".'"'.str_replace("_", " " ,$data['attr']).'"'.",".'"'.$data['type'].'"';
$pass = "root";
$conn = mysqli_connect("localhost:3306","root","root","r0") or die("Connection died!");
$sql = "INSERT INTO r0.r1 ($cols) VALUES($vals);";
if ($conn->query($sql) === TRUE) {
    $conn->close();
    var_dump(http_response_code(200));
  } else {
    $conn->close();
    var_dump(http_response_code(404));
  }
?>