<?php
	/*Example 1*/
	class Teen {
		public $firstName;
		public $middleName;
		public $lastName;
		public $gender;
		public $age;
		
		function __construct($firstName, $middleName, $lastName, $gender, $age) {
			$this->firstName = $firstName;
			$this->middleName = $middleName;
			$this->lastName = $lastName;
			$this->gender = $gender;
			$this->age = $age;
		}

		function getName() {
			return "My full name is " . $this->firstName .
					" " . $this->middleName . 
					" " . $this->lastName . 
					". ";
		} 

	}

	class Me extends Teen {
		function __construct($firstName, $middleName, $lastName, $gender, $age, $mood) {
			parent::__construct($firstName, $middleName, $lastName, $gender, $age);
		$this->mood = $mood;
		}
		function greet() {
			return $this->mood;
		}
	}

	class Smartass extends Teen {
		function __construct($firstName, $middleName, $lastName, $gender, $age, $grade) {
			parent::__construct($firstName, $middleName, $lastName, $gender, $age);
		$this->grade = $grade;
		}
		function smartness() {
			return $this->grade;
		}
	}

	$me = new Me("Diego", "A.", "Sanchez", "male", 15, true);
	print "Teen 1 is = " . $me->getName();

	/*Example 2*/
	class Movie {
		public $title;
		public $category;
		public $theater;

		function __construct($title, $category, $theater) {
			$this->title = $title;
			$this->category = $category;
			$this->theater = $theater;
		}

		function getTitle() {
			return "My favorite movie is " . $this->title .
					". One reason why I like it is because it's filled with " . $this->category . 
					". ";
		} 

	}

	class Favorite extends Movie {
		function __construct($title, $category, $theater, $review) {
			parent::__construct($title, $category, $theater);
		$this->review = $review;
		}
		function opinion() {
			return $this->review;
		}
	}

	class Critic extends Movie {
		function __construct($title, $category, $theater, $rating) {
			parent::__construct($title, $category, $theater);
		$this->rating = $rating;
		}
		function restriction() {
			return $this->rating;
		}
	}

	$favorite = new Favorite("Guardians of the Galaxy", "action", "AMC", true);
	print "Movie 1 = " . $favorite->getTitle();

	/*Example 3*/
	class Superhero {
		public $name;
		public $creator;
		public $group;
		public $personality;
		public $awesomeness;

		function __construct($name, $creator, $group, $personality, $awesomeness) {
			$this->name = $name;
			$this->creator = $creator;
			$this->group = $group;
			$this->personality = $personality;
			$this->awesomeness = $awesomeness;
		}

		function getName() {
			return $this->name .
					" is the greatest Superhero of all time in " . $this->creator . 
					" because he is " . $this->personality . 
					".";
		} 

	}

	class SuperPower extends Superhero {
		function __construct($name, $creator, $group, $power, $personality, $awesomeness) {
			parent::__construct($name, $creator, $group, $personality, $awesomeness);
		$this->power = $power;
		}
		function awesome() {
			return $this->power;
		}
	}

	class WeaponOfChoice extends Superhero {
		function __construct($name, $creator, $group, $weapons, $personality, $awesomeness) {
			parent::__construct($name, $creator, $group, $personality, $awesomeness);
		$this->weapons = $weapons;
		}
		function ouch() {
			return $this->weapons;
		}
	}

	$superPower = new SuperPower("Deadpool", "Marvel", "X-men", "hilarious and funny", 100, true);
	print "Best Superhero = " . $superPower->getName();

?>