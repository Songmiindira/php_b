<!DOCTYPE html>

<?php 
 include 'db.php';

$id=$_GET['id'];

$sql = "select * from task where id='$id'";

$rows= $db->query($sql);

$row = $rows->fetch_assoc();

if(isset($_POST['send'])){
$task = $_POST['task'];
	


$sql = "update  task set name ='$task' where id = '$id'";

$db->query($sql);

header('location:index.php');

}






 ?>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
		<title> crud test</title>
	</head>
	<body>
		<div class="container">
			<center> <h1> UPDATE </h1></center>
			<div class="row" style="margin-top:70px;">
				<div class="col-md-10 col-md-offset-1">
					
					
						
						
						<hr><br>


      	<form method="post" >
      		<div class="form-group">
      			<label> Name </label>
      			<input type="text" name="task" value="<?php echo $row['name'];  ?>" class="form-control">
      			
      		</div>
      		<input type="submit" name="send" value="addtask" class="btn btn-success">
      	</form>
        
      
     
						
					
				</div>
			</div>
		</div>
	</body>
</html>