<?php require 'include/header.php';?>
<div id="page-wrapper">
	<!-- /.container-fluid -->
	<div class="container-fluid">
		<h1>Add New Student</h1>
		<form method="post">
			<table class="table table-bordered">
				<tr>
					<td>First Name</td>
					<td><input type="text" class="form-control" required="required"
						name="name" id="name"></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="password" class="form-control" required="required"
						name="password" id="password"></td>
				</tr>
				<tr>
					<td>
						<button type="submit" name="submit" class="btn btn-success">Add</button>

					</td>
					<td>
						<a href="student.php"><button type="button" class="btn btn-warning">Cancel</button></a>
					</td>
				</tr>
			</table>
			<?php echo $message?>
		</form>
	</div>
</div>

<?php require 'include/footer.php';?>
