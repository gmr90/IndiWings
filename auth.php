<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: prh1.php");
exit(); }
?>
