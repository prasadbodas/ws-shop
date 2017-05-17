<?php

class DBConnection{

	static function getDBConnection() {

		$db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

		if (!$db) {
			//TODO LOGGING
		}

		return $db;
	}

}
