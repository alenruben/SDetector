<?php
session_start();
require "function/functions.php";
error_reporting(0);

$sql = mysqli_query($konek,"SELECT * FROM sensor order by id desc");

$data = mysqli_fetch_array($sql);
$asap = $data["asap"];

if($asap == "") $asap = 0;

echo $asap;

?>