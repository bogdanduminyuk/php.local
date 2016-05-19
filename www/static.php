<?php
	class Files {
		
		private static $dir = "text\\\\";
		
		public static function read($filename) {
			$path = self::$dir.$filename;
			$file = fopen($path, "r");
			return file($path);
			fclose($file);
		}
		
		public static function write($filename, $string) {
			$path = self::$dir.$filename;
			$file = fopen($path, "a");
			fwrite($file, $string."\n");
			fclose($file);
		}
		
		public static function clear($filename) {
			$path = self::$dir.$filename;
			if (file_exists($path)){
				$file = fopen($path, "w");
				fclose($file);
			}
		}
	}
	
	if (isset($_POST["read"])) {
		$array = Files::read($_POST["filename"]);
		foreach ($array as $el)
			echo $el."<br>";
	}
	
	if (isset($_POST["write"])) {
		Files::write($_POST["filename"], $_POST["string"]);
	}
	
	if (isset($_POST["clear"])) {
		Files::clear($_POST["filename"]);
	}
	
?>

<html>
<head>
	<title>php</title>
</head>
<body>
	<form name="myform" action="#" method="post">
		<input type="text" name="filename"/>
		<input type="text" name="string"/>
		<br>
		<input type="submit" name="read" value="Прочитать"/>
		<input type="submit" name="write" value="Дописать"/>
		<input type="submit" name="clear" value="Отчистить"/>
	</form>
</body>
</html>