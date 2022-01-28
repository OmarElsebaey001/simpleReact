<?php
$pass = "root";
$pass = "ac145853";
$user = "bf63c731bc002c";
$host = "eu-cdbr-west-02.cleardb.net";
$db_name = "heroku_afe7ba2e49888d1";

$conn = mysqli_connect($host,$user,$pass,$db_name) or die("Connection died!");
$sql = "select * from r0.r1 ";
$trp = mysqli_query($conn, $sql);
$rows = array();
   while($r = mysqli_fetch_assoc($trp)) {
        $rows[] = $r;
    }
    print json_encode($rows); //convert php data to json data
?>