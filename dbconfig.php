<?php
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";


$DB_name = "itemsdb";


try
{
	$DB_con = new  PDO('mysql:host='.$DB_host.';dbname='.$DB_name, $DB_user, $DB_pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

//	PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
//	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//	$DB_con -> exec("SET CHARACTER SET utf8");
//    PDO('mysql:host='.$host.';dbname='.$db_name, $db_user, $db_password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));

}
catch(PDOException $e)
{
	$e->getMessage();
}


?>
