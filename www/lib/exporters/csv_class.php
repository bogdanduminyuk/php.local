<?php

	require_once "abstract_class.php";
	
	class ExporterCSV extends Exporter {
		
		public static function export($data, $filename) {
			self::$format = "csv";
			echo "Экспортируем в ".self::createPath($filename)."<br>";
		}
	}
?>