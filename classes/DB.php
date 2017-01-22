<?php 

	class DB {

		private static function connect() {
			$pdo = new PDO('mysql:host=127.0.0.1;dbname=SocialNetwork;charset=utf8', 'root', '122333');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo;
		}

		public static function query($query, $params = array()) {
			$statement = self::connect()->prepare($query);
			$statement->execute($params);
			/*$data = $statement->fecthAll();
			return $data;*/
		}
	}

 