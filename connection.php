<?php
define("HOSTNAME","localhost");
define("UNAME","root");
define("PASSWORD","");
define("DBNAME","myproject");
$conn=mysqli_connect(HOSTNAME,UNAME,PASSWORD,DBNAME) or die ("connection error");
?>