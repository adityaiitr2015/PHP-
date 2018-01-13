<?php
    $myArray= array("Adi", "adi", "aDI");
	print_r($myArray);      //printing an array
	echo "<br></br>";       //printing specific element
	unset($myArray[1]);     //deleting an element
	echo $myArray[0];
	echo "<br></br>";
	print_r($myArray);
	$myArray[]="ADITYA";    //adding elements at the end
	echo "<br></br>";
	print_r($myArray);
?>