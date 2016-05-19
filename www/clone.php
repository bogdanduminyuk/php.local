<?php
	class Rectangle {
		
		private $left;
		private $top;
		private $width;
		private $height;
		
		private $id;
		
		private static $nextid = 1;
		
		public function __construct() {
			$this->id = self::$nextid;
			self::$nextid++;
		}
		
		public function __clone() {
			$this->id = self::$nextid;
			self::$nextid++;
		}
		
		public function __toString() {
			return "Идентификатор: ".$this->id.", статическое поле ".self::$nextid."<br>";
		}
	}
	
	$a1 = new Rectangle();
	$a2 = clone $a1;
	echo "$a1$a2";
	$a3 = new Rectangle();
	echo "$a3";
	$a4 = clone $a3;
	$a5 = clone $a4;
	echo "$a4$a5";
?>