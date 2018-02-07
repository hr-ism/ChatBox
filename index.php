<?php error_reporting(0); ?>

<!DOCTYPE html>
<html>
<head>

	<title>IIT(ISM) Chatbox</title>

	<?php include("configurations/css.php"); ?>
	
	<?php include("configurations/js.php"); ?>

</head>
<body>

	<div class="header">
		<h2><b style="text-shadow: 2px 2px 5px;"><u>IIT</u> (<u>ISM</u>) </b><span class="label label-default">Chatbox</span></h2>
	</div>

    <div class="chatlog well well-lg" id="display">

    	<!-- for chatlog -->
    
    </div>

	<div>
		<input type="text" name="name" id="name" value="<?php echo $_GET['name']; ?>" hidden></input>
		<div class="input-group">
    		<textarea class="form-control" id="message" name="message" rows="2" placeholder="Enter your message"></textarea>
	    	<div class="input-group-addon"><input class="btn btn-success" id="sendMessageBtn" name="send" type="button" value="Send"></div>
	    </div>
	</div>

</body>
</html>