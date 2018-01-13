<form>
    <p> Enter a positive whole number</p>
	<input type="text" name="number">
	<input type="submit" value="Check">
</form>

<?php
    if(is_numeric($_GET['number']) && $_GET['number']>0 && $_GET['number']==round($_GET['number'],0))
	{
		$isPrime=true;
		for($i=2;$i<$_GET['number'];$i++)
		{
			if($_GET['number']%$i==0)
			{
				$isPrime=false;
			}
		}
		
		if($isPrime)
		{
			echo $_GET['number']." is prime.";
		}
		else 
			echo $_GET['number']." is not prime.";
	}
	else 
		echo "Enter a positive whole number.";
?>