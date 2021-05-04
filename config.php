<?php 


session_start();
ob_start();

$user = "root";
$pass = "mysql";

//PDO VERİTABANI BAĞLANTISI
try{
	$db = new PDO("mysql:host=localhost; dbname=cvScript;
		charset=utf8;",$user,$pass);
}catch(PDOException $error){
	echo "Database Bağlantısı Kurulamadı!"; $error->getMessage();
}

 ?>