<?php

namespace App;

class Connection {

	public static function getDb() {
		try {

			$conn = new \PDO(
				"mysql:host=localhost;dbname=doacao_livros;charset=utf8",
				"root",
				"" 
			);

			return $conn;

		} catch (\PDOException $e) {
		
		}
	}
}

?>