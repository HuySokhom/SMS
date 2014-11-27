<?php require 'include/header.php';?>
<div id="page-wrapper" ng-app="app">
	<!-- /.container-fluid -->
	<div class="container-fluid">		
		<?php
			echo $message = '';
			if( isset($_GET['edit'])){
				$id = $_GET['edit'];
				$query = $db->query("
					SELECT
						name
					FROM
						administrator
					WHERE
						id = '".$id."'
				");
				$result_q = mysql_fetch_assoc($query);
			}
		?>
		<?php 
			if ( isset($_POST['submit']) ){
				$password = md5($_POST['password']);
				$sql="
					UPDATE
						administrator
					SET
						password = '" .$password ."'
					WHERE
						id = $id
				";
				$result = mysql_query($sql);
				if ($sql) {
					$message .= "<div class='alert alert-success'><strong>Successful</strong>user has been update</div>";
				}			
			}
		
		?>
		<h1>Edit Admin</h1>
		<form method="post">
			<table class="table table-bordered">
				<tr>
					<td>name</td>
					<td><input type="text" class="form-control" required="required" disabled="disabled"
						name="name" id="name" value=<?php echo $result_q['name'];?>></td>
				</tr>
				<tr>
					<td>password</td>
					<td><input type="password" class="form-control" required="required"
						name="password" id="password"></td>
				</tr>
				<tr>
					<td>
						<button type="submit" name="submit" class="btn btn-success">Update</button>

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