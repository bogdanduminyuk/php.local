<?php
	class Circle {
		private $x;
		private $y;
		private $r;
		
		public function __construct($x, $y, $r) {
			$this->x = $x;
			$this->y = $y;
			$this->r = $r;
		}
		
		public function __toString() {
			return "Окружность с центром в (".$x.";".$y.") и радиусом ".$r;
		}
		
		public function getX() {return $this->x;}
		public function getY() {return $this->y;}
		public function getR() {return $this->r;}
		
		public function setX($x) {$this->x = $x;}
		public function setY($y) {$this->y = $y;}
		public function setR($r) {$this->r = $r;}
		
		public function isIntersected($circle) {
			$radiuses = $circle->getR() + $this->r;
			$distance = sqrt(pow(($this->x - $circle->x),2) + pow (($this->y - $circle->y), 2));
			
			if ($radiuses>=$distance) echo "yes";
			else echo "no";
		}
	}
	
	$circle = new Circle(0, 0, 5);
	$circle_2 = new Circle(0, 7, 2);
	$circle->isIntersected($circle_2);
?>