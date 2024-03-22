<?php
require "./connect.php";

$longUrl = $_POST['longurl'];
$tempUrl = md5($longUrl);
$shortUrl="localhost/".substr($tempUrl,0,9);
$sql="Insert into  shortenerurl (longurl,shorturl) VALUES ('$longUrl','$shortUrl')";

$result =mysqli_query($conn,$sql);

header("Location: index.php");


 