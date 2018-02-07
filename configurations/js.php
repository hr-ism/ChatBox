<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!-- jQuery UI -->
<script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

<script>

	$(document).ready(function(){
 		
        var exists = document.location.href.indexOf('?name=');
        var x="";
        var url="";
        
        if(exists < 0){
	 		x = prompt('Please enter your name to continue: ');
			url = document.location.href + '?name=' + x;
            window.location = url;
        }

        var url_string = window.location.href;
        url = new URL(url_string);
		x = url.searchParams.get("name");

		$("#sendMessageBtn").on("click",function(){
			if($("#message").val()!=""){
				$.ajax({
				     url: 'chatlog.php',
				     type: 'POST',
				     data: {
				     	send: $("#sendMessageBtn").val(),
				     	name: $("#name").val(),
				     	message: $("#message").val()
				     },
				     success: function(data){
				     	$("#message").val("");
				     },
			    });
			}
		});

		setInterval(function(){
			$("#display").load("chatlog.php?name="+x);
			$("#display").scrollTop($("#display")[0].scrollHeight);
		}, 100);
	
	});

</script>
