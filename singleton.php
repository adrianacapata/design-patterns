<?php

/* this is a singleton design pattern example
 * this pattern is used when uyou need one and only one instance of given class
 */

class Database {

	//declare a public static attribute and use it to instantiate the class
	public static $instance;

	public static function getInstance() {
		if (!isset(Database::$instance)) {
			Database::$instance = new Database();
		}

		return Database::$instance;
	}


	// this is the key to Singleton Pattern
	private function __construct() {
		/* here goes config for connection to db
		 * db name
		 * db pass
		*/
	}

	public function getQuery() {
		return "some query result";
	}
}

//instantiate multiple obejects of Database class
$db = Database::getInstance();
$db2 = Database::getInstance();
$db3 = Database::getInstance();

//this should you it is the first instance of the Database object
var_dump($db);
//this is again the first instance of the Database object
var_dump($db2);
//this is again the first instance of the Database object
var_dump($db3);

?>