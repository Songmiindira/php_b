<!DOCTYPE html>

<?php  include 'db.php';
$sql = "select * from task";
$rows= $db->query($sql);





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
			<div class="row" style="margin-top:70px;">
				<div class="col-md-10 col-md-offset-1">
					<center> <h1> TABLE TEST</h1></center>
					<table class="table">
						<button type="button" data-target="#mymodal" data-toggle="modal" class="btn btn-success pull-left"> add task </button>
						<button type="button" class="btn btn-default pull-right"> print</button>
						<hr><br>

						<!-- Modal -->
<div id="mymodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">addtask</h4S>
      </div>
      <div class="modal-body">
      	<form method="post" action="add.php">
      		<div class="form-group">
      			<label> Name</label>
      			<input type="text" name="task" class="form-control">
      			
      		</div>
      		<input type="submit" name="send" value="addtask" class="btn btn-success">
      	</form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
						<thead>
							<tr>
								<th scope="col">S.N</th>
								<th scope="col">NAME</th>
								
							</tr>
						</thead>
						<tbody>
							
							<tr>
								<?php while ($row=$rows->fetch_assoc()): ?>
									

						

								<th> <?php  echo $row['id'] ?></th>
								<td class="col-md-10"> <?php  echo $row['name'] ?></td>
								
								<td><a href="delete.php?id=<?php echo $row['id']; ?>"  class="btn btn-danger">delete</  >  </td>

								<td><a href="update.php?id=<?php echo $row['id']; ?>"  class="btn btn-success">edit</  >  </td>
								
								
							</tr>
						<?php  endwhile; ?>
						</tbody>
					</table>
					
				</div>
			</div>
		</div>
	</body>
</html>