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

switch(strtolower($_SERVER['SERVER_NAME'])) {
	case 'localhost':
		$config["configShare"]["databaseServer"] = "localhost";
		$config["configShare"]["databaseSelect"] = "elfekvo";
		$config["configShare"]["databaseUser"] = "root";
		$config["configShare"]["databasePassword"] = "";
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