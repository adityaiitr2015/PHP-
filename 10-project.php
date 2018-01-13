<?php 
    $weather = "";
    $error = "";
    
    if (array_key_exists('city', $_GET)) {
        
        $city = str_replace(' ', '', $_GET['city']);
        
        $file_headers = @get_headers("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
        
        
        if($file_headers[0] == 'HTTP/1.1 404 Not Found') {
    
            $error = "That city could not be found.";

        } else 
		{
			
			$forecastPage = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
			
			$pageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);
				
			if (sizeof($pageArray) > 1) 
			{
			
					$secondPageArray = explode('</span></span></span>', $pageArray[1]);
				
					if (sizeof($secondPageArray) > 1) 
					{ 
						$weather = $secondPageArray[0];
					} 
					else 
					{ 
						$error = "That city could not be found.";
					} 
			} 
			else 
			{ 
				$error = "That city could not be found.";
			}
		}
    }
?>


<!doctype html>
<html lang="en">
    <head>
		<title> Weather Forecast </title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <style type="text/css">
		    .jumbotron
			{
				background-image:url(https://images.unsplash.com/photo-1423245617392-005724ca6338?auto=format&fit=crop&w=1377&q=80);
				height:650px;
				text-align:center;

			}
			#wrapper
			{
				margin: 0 auto;
			}
		</style>
    </head>
    <body> 
        <div class=""container">
		   <div class="jumbotron" id="wrapper">
			  <h1 style="margin-top:70px;"id="heading"class="display-4">Welcome to Weather Forecast !!</h1>
			  <label style="font-size:140%;">  Enter the name of the city </label><br>
			  <form>
				  <input  name="city" style="margin-top:40px;border-radius:5px; padding:8px;width:400px;" type="text" placeholder="Eg. Delhi, Gurgaon" value="<?php 
																										   
																															   if (array_key_exists('city', $_GET)) {
																															   
																															   echo $_GET['city']; 
																															   
																															   }
																															   
																															   ?>"><br>
				  <button style="margin-top:30px;border-radius:5px;padding:5px;padding-bottom:7px;" id="button" class="btn btn-primary btn-lg" href="#" role="button">Submit</button>
			  </form>
			  <div id="weather"><?php 
              
						  if ($weather) 
						  {
							echo '<div style="width:400px;margin: 0 auto;" class="alert alert-success" role="alert">'.$weather.'</div>';  
						  } 
						  else if ($error) 
						  {
							echo '<div style="width:400px;margin: 0 auto;" class="alert alert-danger" role="alert">'.$error.'</div>'; 
						  }
						  ?>
			  </div>
	       </div>
		</div>
		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
	</body>
</html>