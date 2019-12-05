<?php
	class DB_access
	{
		/**
		 * DBSession constructor.
		 */
		public function __construct(){}
		
		public function getRandomWord()
		{
			$base = new PDO('mysql:host=localhost; dbname=pendu', 'root', '');
			$sql = 'SELECT mot FROM `mot` ORDER BY RAND() LIMIT 1';
			$stmt = $base->query($sql);
			$row = $stmt->fetch(PDO::FETCH_ASSOC);
			return $stmt;
		}
	}