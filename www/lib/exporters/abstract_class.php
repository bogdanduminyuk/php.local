<?php
	
	abstract class Exporter {
		
		protected static $dir = "export";
		protected static $format;
		
		protected function createPath($filename) {
			return self::$dir."/".$filename.".".self::$format;
		}
		
		abstract public static function export($data, $filename);
	}
?>