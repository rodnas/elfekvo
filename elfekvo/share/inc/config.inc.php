<?php
// user levels
define("ewAllowAdd", 1, true);
define("ewAllowDelete", 2, true);
define("ewAllowEdit", 4, true);
define("ewAllowView", 8, true);
define("ewAllowList", 8, true);
define("ewAllowSearch", 8, true);
define("ewAllowAdmin", 16, true);

// database connect
$config["configShare"]["databaseType"] = "mysql";
$config["configShare"]["languageType"] = "hu";
$config["configShare"]["setNames"]="set names utf8";

switch(strtolower($_SERVER['HTTP_HOST'])) {
	case 'localhost':		// Xampp
	case 'rodnas.site':
	case 'elfekvo.site':
		$config["configShare"]["databaseServer"] = "localhost";
		$config["configShare"]["databaseSelect"] = "elfekvo";
		$config["configShare"]["databaseUser"] = "root";
		$config["configShare"]["databasePassword"] = "";
		break;
	case 'localhost:81':		// Laragon
	case 'elfekvo:81':
		$config["configShare"]["databaseServer"] = "localhost:3307";
		$config["configShare"]["databaseSelect"] = "elfekvo";
		$config["configShare"]["databaseUser"] = "root";
		$config["configShare"]["databasePassword"] = "";
		break;
	case 'localhost.docker:8100':	// Docker
	case 'elfekvo.docker:8100':
		$config["configShare"]["databaseServer"] = "database:3306";
		$config["configShare"]["databaseSelect"] = "elfekvo";
		$config["configShare"]["databaseUser"] = "root";
		$config["configShare"]["databasePassword"] = "tiger";
		break;
	case 'localhost.server':	// Guest Ubuntu Server
	case 'elfekvo.server':
	case 'localhost.desktop':	// Guest Ubuntu Server
	case 'elfekvo.desktop':
		$config["configShare"]["databaseServer"] = "localhost";
		$config["configShare"]["databaseSelect"] = "mysys";
		$config["configShare"]["databaseUser"] = "root";
		$config["configShare"]["databasePassword"] = "123";
		break;
	case 'tanulmanyi.info':
		$config["configShare"]["databaseServer"] = "localhost";
		$config["configShare"]["databaseSelect"] = "tanulmanyi10";
		$config["configShare"]["databaseUser"] = "tanulmanyi";
		$config["configShare"]["databasePassword"] = "6sbP90m3JNHDg";
		break;
	default:
		$config["configShare"]["databaseServer"] = "localhost";
		$config["configShare"]["databaseSelect"] = "elfekvo";
		$config["configShare"]["databaseUser"] = "root";
		$config["configShare"]["databasePassword"] = "";
		break;
}
?>