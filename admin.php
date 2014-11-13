<?php require 'include/header.php';?>
<script type="text/javascript" src="js/ng/lib/angular.min.js"></script>
<script type="text/javascript" src="js/ng/lib/angular-route.js"></script>
<script type="text/javascript" src="js/ng/lib/angular-route.js"></script>
<script type="text/javascript" src="js/ng/main.js"></script>
<script type="text/javascript" src="js/ng/lib/jquery-1.10.2.min.js"></script>
<div id="page-wrapper" ng-app="app">
	<!-- /.container-fluid -->
	<div class="container-fluid">
		<h1>Adminstrator</h1>
		<a href="admin_edit.php"><button class="btn btn-success">Add New User</button></a>
		<br/><br/>
		<table width=100% class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Password</th>
				<th>Action</th>
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
	</div>
</div>
<!-- /#wrapper -->

<?php require 'include/footer.php';?>