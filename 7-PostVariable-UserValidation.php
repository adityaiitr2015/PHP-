

<form method="post">
    <input name="user" type="text">
	<input type="submit" value="Login">
</form>

<?php

    $users=array("Aditya", "Archana", "Kiran", "Suman");
	$bool=false;
    for($i=0;$i<sizeof($users);$i++)
	{
		if($_POST['user']==$users[$i])
		{
			$bool=true;
		}
	}
	if($bool==true)
	{
		echo "Welcome ".$_POST['user'].". How are you doing?";
	}
	else
	    echo "User not identified.";
?>
