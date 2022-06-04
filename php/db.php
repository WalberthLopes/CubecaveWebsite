<?php

$serverName = "205.209.120.173";
$dBUsername = "cubecave_webhost10";
$dBPassword = "Webhost10CubeCave**";
$dBName = "cubecave_webhost10";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Falha ao conectar: " . mysqli_connect_error());
}