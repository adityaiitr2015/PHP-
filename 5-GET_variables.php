

<p>Enter your name</p>
<form>
    <input name="name" type= "text">
	<input type="submit" value="Go">
</form>

<?php 
    echo "Hello ".$_GET['name']." How are you ?";
?>