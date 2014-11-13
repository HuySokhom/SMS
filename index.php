<?php require 'include/header.php';?>
<script type="text/javascript" src="js/ng/lib/angular.min.js"></script>
<script type="text/javascript" src="js/ng/lib/angular-route.js"></script>
<script type="text/javascript" src="js/ng/lib/angular-route.js"></script>
<script type="text/javascript" src="js/ng/main.js"></script>
<script type="text/javascript" src="js/ng/lib/jquery-1.10.2.min.jss"></script>
	<div id="page-wrapper" ng-app="app">
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
			
			
			
			
			<script type="text/javascript">
            $(document).ready(function(){
                function loading_show(){
                    $('#loading').html("<img src='images/loading.gif'/>").fadeIn('fast');
                }
                function loading_hide(){
                    $('#loading').fadeOut('fast');
                }                
                function loadData(page){
                    loading_show();        
                    $.ajax
                    ({
                        type: "POST",
                        url: "ajax/load_admin.php",
                        data: "page="+page,
                        success: function(msg)
                        {
                            $("#container").ajaxComplete(function(event, request, settings)
                            {console.log('ji');
                                loading_hide();
                                $("#container").html(msg);
                            });
                        }
                    });
                }
                loadData(1);  // For first time page load default results
                $('#container .pagination li.active').live('click',function(){
                    var page = $(this).attr('p');
                    loadData(page);
                    
                });           
                $('#go_btn').live('click',function(){
                    var page = parseInt($('.goto').val());
                    var no_of_pages = parseInt($('.total').attr('a'));
                    if(page != 0 && page <= no_of_pages){
                        loadData(page);
                    }else{
                        alert('Enter a PAGE between 1 and '+no_of_pages);
                        $('.goto').val("").focus();
                        return false;
                    }
                    
                });
            });
        </script>

        <style type="text/css">
            
            #loading{
                width: 100%;
                position: absolute;
                top: 100px;
                left: 100px;
				margin-top:200px;
            }
            #container .pagination ul li.inactive,
            #container .pagination ul li.inactive:hover{
                background-color:#ededed;
                color:#bababa;
                border:1px solid #bababa;
                cursor: default;
            }
            #container .data ul li{
                list-style: none;
                font-family: verdana;
                margin: 5px 0 5px 0;
                color: #000;
                font-size: 13px;
            }

            #container .pagination{
                width: 800px;
                height: 25px;
            }
            #container .pagination ul li{
                list-style: none;
                float: left;
                border: 1px solid #006699;
                padding: 2px 6px 2px 6px;
                margin: 0 3px 0 3px;
                font-family: arial;
                font-size: 14px;
                color: #006699;
                font-weight: bold;
                background-color: #f2f2f2;
            }
            #container .pagination ul li:hover{
                color: #fff;
                background-color: #006699;
                cursor: pointer;
            }
			.go_button
			{
			background-color:#f2f2f2;border:1px solid #006699;color:#cc0000;padding:2px 6px 2px 6px;cursor:pointer;position:absolute;margin-top:-1px;
			}
			.total
			{
			float:right;font-family:arial;color:#999;
			}

        </style>

    
	
<div align="center" style="font-size:24px;color:#cc0000;font-weight:bold">Pagination with jquery, Ajax and PHP</div>
        <div id="loading"></div>
        <div id="container">
            <div class="data"></div>
            <div class="pagination"></div>
        </div>
			
			
		</div>
    </div>
    <!-- /#wrapper -->

<?php require 'include/footer.php';?>