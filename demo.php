<?php

	class Donut {
		public $flavor;
		public $decoration;
		public $store;

		function __construct($flavor, $decoration, $store) {
			$this->flavor = $flavor;
			$this->decoration = $decoration;
			$this->store = $store;
		}

		function delicious() {
			return "I like " . $this->flavor . " donuts with " . $this->decoration . ".";
		}

		function shop() {
			return "My favorite donut shop is from " . $this->store . ".";
		}
	}

	$glazedDonut = new Donut("glazed", "sprinkles", "Krispy Kreme");

	print $glazedDonut->delicious();
	print $glazedDonut->shop();
?>