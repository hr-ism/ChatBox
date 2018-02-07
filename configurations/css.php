<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Font Awesome -->
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

<!-- jQuery CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

<style>
	.input-group{
		margin: 10px;
	}
	.chat{
	    width: 60%;
	   	border-bottom-right-radius: 30px;
	   	border-bottom-left-radius: 30px; 
	    padding: 0.4% 1%;
	    margin: 1%
	}
	body{
		background-image: url('images/bg.jpg');
		background-size: 100%;
		/*background-repeat: static;*/
	}
	.chatlog{
		height: 500px;
		overflow-x: hidden;
		overflow-y: scroll;
		margin: 10px;
	}
	.self{
		border-top-left-radius: 30px;
		margin-left: 38%;
		box-shadow: -5px 5px 10px;
	}
	.stranger{
		border-top-right-radius: 30px;
		box-shadow: 5px 5px 10px;
	}
	.header{
		height: 50px;
		text-align: center;
		margin-top: 10px;
		font-family: "Cooper Black";
	}
	#sendMessageBtn{
		width: 90px;
		height: 40px;
	}
</style>
