<?php require 'include/header.php';?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link href="css/paginate.css" rel="stylesheet">
<script type="text/javascript" src="js/paginate.js"></script>
<div id="page-wrapper">
	<!-- /.container-fluid -->
	<div class="container-fluid">	
		<div align="center" style="font-size:30px;color:#cc0000;font-weight:bold">
			Student Information	
		</div>		
		<a href="student_new.php"><button class="btn btn-success">Add New User</button></a>
		Search Name: <input type="text" name="search" />
		<div style="float: right;">
			<a href="student_new.php"><button class="btn btn-success">Add New User</button></a>
		</div>
		<br/><br/>
	    <div id="loading"></div>
		<div id="container">
			<div class="data"></div>
            <div class="pagination"></div>
        </div>
		
    </div>
</div>
<!-- /#wrapper -->

<?php require 'include/footer.php';?>
