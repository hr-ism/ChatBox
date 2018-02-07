<script src="configurations/jquery-3.2.1.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="jquery-ui/jquery-ui.min.js"></script>

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
