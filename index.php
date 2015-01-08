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
	
	print "The dog’s name is {$dog1->getName()}.";
	//
?>