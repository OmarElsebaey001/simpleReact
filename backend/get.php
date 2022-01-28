<?php
$pass = "root";
$conn = mysqli_connect("localhost:3306","root","root","r0") or die("Connection died!");
$sql = "select * from r0.r1 ";
$trp = mysqli_query($conn, $sql);
$rows = array();
   while($r = mysqli_fetch_assoc($trp)) {
        $rows[] = $r;
    }
    print json_encode($rows); //convert php data to json data
?>