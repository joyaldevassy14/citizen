

<?php
include("dbcon.php");
$bid = $_GET['id'];
$sql = "update issuechallen set status=2 where  challan_no =" . $bid;

$conn->query($sql);

header('location:viewemployee.php');



?>