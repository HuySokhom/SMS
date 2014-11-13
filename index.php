<?php require 'include/header.php';?>
	<div id="page-wrapper">
		<!-- /.container-fluid -->
		<div class="container-fluid">
			<h1>Adminstrator</h1>
			<table width=100% class="table table-bordered">
				<tr>
					<th>
						Name
					</th>
					<th>
						Password
					</th>
					<th>
						Action
					</th>
				</tr>
			<?php
			    $result = $db->query("SELECT * FROM administrator");
			
			    while ($row = mysql_fetch_assoc($result)) {
			    	
			        echo "<tr><td>" . $row['name'] ."</td>";
			        
			        echo "<td>"    . $row['password']   ."</td>";
			        echo "<td><a href=index?edit=".$row['id'].">Edit</a></td></tr>";
			        
			    }
			    
			?>
			</table>
			
			<h1>Create New Admin</h1>
			<form method="post">
			<table class="table table-bordered">
				<tr>
					<td>
						name
					</td>
					<td>
						<input 
							type="text" 
							class="form-control" 
							required="required"
							name="name" 
							id="name"
						>
					</td>
				</tr>
				<tr>
					<td>
						password
					</td>
					<td>
						<input 
							type="password" 
							class="form-control" 
							required="required"
							name="password" 
							id="password"	
						>
					</td>
				</tr>
				<tr>
					<td>
						<button type="submit" class="btn btn-success">Add</button>
						
					</td>
					<td>
						<button type="button" class="btn btn-warning">Cancel</button>
					</td>
				</tr>
			</table>
			</form>
			<?php 
				if ($_POST) {
					$username = $_POST['name'];
					$password = $_POST['password'];
					$sql="INSERT INTO administrator(name, password)VALUES('$username', '$password')";
					$result=mysql_query($sql);
					
					// if successfully insert data into database, displays message "Successful". 
					if($result){
					echo "Successful";
					
					}
				}
				
			?>
			<?php
				if( $_GET['edit'] ){
					echo 'hello'. $row['id'];
				}
			?>
		</div>
    </div>
    <!-- /#wrapper -->

<?php require 'include/footer.php';?>