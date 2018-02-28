<?php

/* Program that prints 1 to 100 */

$n1 = 1;
$n2 = 100;

for($i = $n1; $i <= $n2; $i++){
	$str ="";
	/* Three multiples */
	if ($i % 3 == 0)
		$str = "Bizz";
	
	/* Five multiples */
	if ($i % 5 == 0)
		$str .= "Apzz";
	
	if (empty($str))
		$str = $i;
	/* print the Result */
	echo $str."<br>";
}
?>
