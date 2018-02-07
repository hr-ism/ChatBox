<?php 
	include("configurations/connection.php");

		if(isset($_POST['send'])==1){
			
			$name = $_POST['name'];
			$message = $_POST['message'];

			$q = "INSERT INTO chatroom (name, message) VALUES ('$name', '$message')";
			$r = mysqli_query($dbc,$q);

			$q = "SELECT COUNT (id) FROM chatroom ORDER BY id ASC";
			$r = mysqli_query($dbc,$q);

			if($r>100){
				$q = "DELETE TOP (1) FROM chatroom";
				mysqli_query($dbc,$q);
			}					
			
			header("Location: index.php?name=".$name);

		}

	$q="SELECT * FROM chatroom";
	$r=mysqli_query($dbc,$q);

	while($row=mysqli_fetch_assoc($r)){
		if($row['name']==$_GET['name']){
 ?>

<div class="chat self alert alert-success">
	<b style="color: black; float: right">You</b>
	<br>
	<p><?php echo $row['message']; ?></p>
</div>

<?php }else{ ?>

<div class="chat stranger alert alert-info">
	<b style="color: black;"><?php echo $row['name']; ?></b>
	<p><?php echo $row['message']; ?></p>
</div>

<?php }} ?>