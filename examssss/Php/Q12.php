<!-- 12)Write a program to check whether a number is prime or not in php. -->

<?php
function primeCheck($number){
	if ($number == 1)
	return 0;
	for ($i = 2; $i <= $number/2; $i++){
		if ($number % $i == 0)
			return 0;
	}
	return 1;
}

$number = 31;
$flag = primeCheck($number);
if ($flag == 1)
	echo "Prime";
else
	echo "Not Prime"
?>