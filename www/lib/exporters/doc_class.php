<?php

	require_once "abstract_class.php";
	
	class ExporterDOC extends Exporter {
		
		public static function export($data, $filename) {
			self::$format = "doc";
			echo "Экспортируем в ".self::createPath($filename)."<br>";
		}
	}
?>