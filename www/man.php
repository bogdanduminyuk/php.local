<?php
	class Man {
		
		protected $weight;
		protected $size;
		protected $color;
		
		public function setWeight($weight){
			$this->weight = $weight;
		}
		
		public function setSize($size){
			$this->size = $size;
		}
		
		public function setColor($color){
			$this->color = $color;
		}
		
		public function getWeight(){
			return $this->weight;
		}
		
		public function getSize(){
			return $this->size;
		}
		
		public function getcolor(){
			return $this->color;
		}
	}
	
	class Student extends Man {
		
		private $institute_name;
		private $course;
		
		public function setInstituteName($name){
			$this->institute_name = $name;
		}
		
		public function setCourse($course){
			$this->course = $course;
		}
		
		public function getInstituteName(){
			return $this->institute_name;
		}
		
		public function getCourse(){
			return $this->course;
		}
		
		public function upCourse(){$this->course++;}
	}
	
	class Programmes extends Man {
		
		private $languages;
		private $experience;
				
		public function setLangs($langs){
			$this->languages = $langs;
		}
		
		public function setExp($exp) {
			$this->experience = $exp;
		}
		
		public function getLangs(){
			return $this->languages;
		}
		
		public function getExp() {
			return $this->experience;
		}
	}
?>