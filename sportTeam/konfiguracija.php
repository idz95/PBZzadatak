<?php

session_start();

if($_SERVER["HTTP_HOST"]==="idz95.byethost3.com"){
	$host="sql204.byethost3.com";
	$dbname="b3_21056077_pbz";
	$dbuser="b3_21056077";
	$dbpass="vD53aSzD";

}else{
	$host="localhost";
	$dbname="team";
	$dbuser="pbz";
	$dbpass="pbz";
}


try{
	$veza = new PDO("mysql:host=" . $host . ";dbname=" . $dbname,$dbuser,$dbpass);
	$veza->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$veza->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8';");
	$veza->exec("SET NAMES 'utf8';");
}catch(PDOException $e){
	
	switch($e->getCode()){
		case 1049:
			header("location: " . $putanjaAPP . "greske/kriviNazivBaze.html");
			exit;
			break;
		default:
			header("location: " . $putanjaAPP . "greske/greska.php?code=" . $e->getCode());
			exit;
			break;
	}
	

}
