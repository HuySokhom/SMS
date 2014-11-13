<?php require 'include/header.php';?>
<div id="page-wrapper" ng-app="app">
	<!-- /.container-fluid -->
	<div class="container-fluid">
		<?php 
			echo $message = '';
			if ($_POST) {
				$username = $_POST['name'];
				$password = md5($_POST['password']);
				$sql="INSERT INTO administrator(name, password)VALUES('$username', '$password')";
				$result=mysql_query($sql);
				
				// if successfully insert data into database, displays message "Successful". 
				if($result){
					$message .= "<div class='alert alert-success'><strong>Successful</strong></div>";					
				}
			}
				
		?>
		<?php
			if( isset($_GET['edit'])){
				var_dump( $_GET );
			}
		?>
		<h1>Create New Admin</h1>
		<form method="post">
			<table class="table table-bordered">
				<tr>
					<td>name</td>
					<td><input type="text" class="form-control" required="required"
						name="name" id="name"></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="password" class="form-control" required="required"
						name="password" id="password"></td>
				</tr>
				<tr>
					<td>
						<button type="submit" class="btn btn-success">Add New</button>

					</td>
					<td>
						<a href="admin.php"><button type="button" class="btn btn-warning">Cancel</button></a>
					</td>
				</tr>
			</table>
			<?php echo $message?>
		</form>
	</div>
</div>
<!-- /#wrapper -->

<?php require 'include/footer.php';?>