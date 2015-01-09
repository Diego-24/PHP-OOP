<?php
	/*Lecture 3 Example 1*/
	if (is_integer('50')) {
		echo "It is a number";
	}
	else {
		echo "It is not a number";
		var_dump(is_integer('ABC'));
		var_dump(is_integer('1234'));
		var_dump(is_integer('432'));
		var_dump(is_integer('false'));
	}

	if (is_string('Chicken')) {
		echo "It is a super string";
	}
	else {
		echo "It is not a super string";
		var_dump(is_string('JKL'));
		var_dump(is_string('5446'));
		var_dump(is_string('721'));
		var_dump(is_string('false'));
	}

	if (is_null('nutty')) {
		echo "It is a null";
	}
	else {
		echo "It is not a null";
		var_dump(is_null('TYO'));
		var_dump(is_null('1928'));
		var_dump(is_null('862'));
		var_dump(is_null('false'));
	}


?>