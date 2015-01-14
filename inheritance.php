<?php
	/*Example 1*/
	class Teen {
		public $firstName;
		public $middleName;
		public $lastName;
		public $gender;
		public $age;
		public $grade;
		public $mood;

		function __construct($firstName, $middleName, $lastName, $gender, $age, $grade, $mood) {
			$this->firstName = $firstName;
			$this->middleName = $middleName;
			$this->lastName = $lastName;
			$this->gender = $gender;
			$this->age = $age;
			$this->grade = $grade;
			$this->mood = $mood;
		}

		function getName() {
			return "My full name is " . $this->firstName .
					" " . $this->middleName . 
					" " . $this->lastName . 
					". ";
		} 

	}

	class Me extends Teen {
		function greet() {
			return $this->mood;
		}
	}

	class Smartass extends Teen {
		function smartness() {
			return $this->grade;
		}
	}

	$me = new Me("Diego", "A.", "Sanchez", "male", 15, "A", "happy");
	print "Teen 1 is = " . $me->getName();

	/*Example 2*/
	class Movie {
		public $title;
		public $category;
		public $theater;
		public $rating;
		public $review;

		function __construct($title, $category, $theater, $rating, $review) {
			$this->title = $title;
			$this->category = $category;
			$this->theater = $theater;
			$this->rating = $rating;
			$this->review = $review;
		}

		function getTitle() {
			return "My favorite movie is " . $this->title .
					". One reason why I like it is because it's filled with " . $this->category . 
					". ";
		} 

	}

	class Favorite extends Movie {
		function opinion() {
			return $this->review;
		}
	}

	class Critc extends Movie {
		function restriction() {
			return $this->rating;
		}
	}

	$favorite = new Favorite("Guardians of the Galaxy", "action", "AMC", "pg-13", "5 stars");
	print "Movie 1 = " . $favorite->getTitle();

	/*Example 3*/
	class Superhero {
		public $name;
		public $creator;
		public $group;
		public $power;
		public $weapons;
		public $personality;
		public $awesomeness;

		function __construct($name, $creator, $group, $power, $weapons, $personality, $awesomeness) {
			$this->name = $name;
			$this->creator = $creator;
			$this->group = $group;
			$this->power = $power;
			$this->weapons = $weapons;
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
		function awesome() {
			return $this->power;
		}
	}

	class WeaponOfChoice extends Superhero {
		function ouch() {
			return $this->weapons;
		}
	}

	$superPower = new SuperPower("Deadpool", "Marvel", "X-men", "health regeneration","2 swords and 2 guns" , "hilarious and funny", 100);
	print "Best Superhero = " . $superPower->getName();

?>