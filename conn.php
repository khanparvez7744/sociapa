<?php
if(!isset($_SESSION))
	session_start();
class dbconn{

function connect(){
try{
$dsn = "mysql:host=localhost;dbname=dbs5p90lx49gp3";
$user = "root";
$passwd = "";

$pdo = new PDO($dsn, $user, $passwd);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
return $pdo;

	}
	catch(Exception $e)
	{
		$error_msg=$e->getMessage();
		echo $error_msg;
		exit();
	}
  }
}
?>
