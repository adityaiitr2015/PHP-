<?php
    print_r($_POST);
	$emailTo="adityamomentum@gmai.com";
	$subject=$_POST['subject'];
	$body=$_POST['content'];
	$headers="From: ".$_POST['email'];
	mail($emailTo,$subject, $body, $headers );
	if(mail($emailTo,$subject, $body, $headers ))
	{
		echo "Your email was sent successfully";
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
  
    <title> Contact us </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style type="text/css">
		    #wrapper 
			{
                width: 550px;
                margin: 0 auto; 
                position:relative;				
                top:90px;				
            }
            .font
			{
				font-size:200%;
			}
	</style>
  </head>
  
  <body>
       <div class="container" id="wrapper">
			<h2>Contact Us</h2>
			 <div id="fail"></div>
			 <form method="post">
			  <div class="form-group">
				<label for="Email1">Email address</label>
				<input type="email" class="form-control" name="email" id="email"  placeholder="Enter email">
				<small class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
				<label for="subject">Subject</label>
				<input type="text" class="form-control" name="subject"id="subject">
			  </div>
			  <div class="form-group">
				<label for="exampleSelect1">This email is regarding</label>
				<select class="form-control" id="exampleSelect1">
				  <option>Enquiry</option>
				  <option>Complain</option>
				  <option>Suggestion</option>
				  <option>Feedback</option>
				  <option>Appreciation</option>
				</select>
			  </div>
			   
			  <div class="form-group">
				<label for="exampleTextarea">Type your message here.</label>
				<textarea class="form-control" id="content" rows="4" name="content"></textarea>
			  </div>
			  
			  <button type="submit" id="send" class="btn btn-primary">Send</button>
			</form>
		</div>
			
			<!-- jQuery first, then Tether, then Bootstrap JS. -->
			<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
	     
		 <script type="text/javascript">
		    $("#send").click(function()
			{
					
				var error="";
				if($("#email").val()=="")
				{
					error=error+"<p>Please enter your email id.</p>";
				}
				if($("#subject").val()=="")
				{
					error=error+"<p>Please enter the subject of the email.</p>";
				}
				if($("#content").val()=="")
				{
					error=error+"<p>Please enter the content of the email</p>";
				}
				
				if(error!="")
				{
					$("#fail").html('<div class="alert alert-danger" role ="alert" id="fail">'+error+'</div>');
					$("#fail").show();	
                    return false;				
				}
				else  
				{ 
					$("#fail").html('<div class="alert alert-success"role="alert" id="success">We will get in touch with you soon.</div>');
					$("#fail").show();
					return true;
				}
			});
		 </script>
	   
  </body>
</html>