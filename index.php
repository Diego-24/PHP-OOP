<?php
	/*Example 1*/
	class House {
		//class body
		//class body
		//class body
	}

	class Animal {
		//class body
		//class body
		//class body
	}

	class Shirt {
		//class body
		//class body
		//class body
	}

	/*Example 2*/
	$house1 = new House();
	$house2 = new House();

	$animal1 = new Animal();
	$animal2 = new Animal();

	$shirt1 = new Shirt();
	$shirt2 = new Shirt();

	/*Example 3*/
	class House{
		public $state = "california";
		public $color = "white";
		public $city = "sierra madre";
		public $street = "auburn";
	}

	class Animal{
		public $type = "reptile";
		public $habitat = "forest";
		public $gender = "male";
		public $species = "snake";
	}

	class Shirt{
		public $style = "long sleeve";
		public $size = "medium";
		public $store = "pacsun";
		public $price = 0;
	}

	/*Example 4*/
	$house1 = new House();
	print $house1->color;
	//white

	$animal1 = new Animal();
	print $animal1->type;
	//reptile

	$shirt1 = new Shirt();
	print $shirt1->size;
	//medium

	/*Example 5*/


	/*Example 6*/
	class House {
		public $state = "california";
		public $color = "white";
		public $city = "sierra madre";
		public $street = "auburn";
	
		function getColor() {
			return "{$this->color}" .
			"{$this->state}";
		}
	}
	$house1 = new House();
	$house1->color = "white";
	$house1->state = "California";
	
	print " {$dog1->getName()}.";
	//

	/*Lecture 2 Example 1*/
	class House {
		public $city;
		public $state;
		public $street;

			function __construct($title, $city, $state, $street){
				$this->city = $city;
				$this->state = $state;
				$this->street = $street;
			}

			function getCity(){
				return $this->city .
				$this->state;
			}
	}

	class Animal {
		public $species;
		public $habitat;
		public $type;

			function __construct($species, $habitat, $type){
				$this->species = $species;
				$this->habitat = $habitat;
				$this->type = $type;
			}

			function getSpecies(){
				return $this->species .
				$this->type;
			}
	}

	class Shirt {
		public $size;
		public $style;
		public $store;

			function __construct($title, $size, $style, $store){
				$this->city = $size;
				$this->state = $style;
				$this->street = $store;
			}

			function getSize(){
				return $this->size .
				$this->style;
			}
	}

	/*Example 2*/
	$house1 = new House("Sierra Madre", "California", "auburn");
	print "House 1: " . $house1->getCity();

	$animal1 = new Animal("snake", "forest", "reptile");
	print "Animal 1: " . $animal1->getSpecies();

	$shirt = new Shirt("medium", "long sleeve", "pacsun");
	print"Shirt 1: " . $shirt1->getSize();
?>