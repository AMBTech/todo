<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Welcome Home</title>

	<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
	<style type="text/css">
		/*ul { list-style: none; padding: 0px; margin: 0px; width: 500px;  }
		li { background-color: #eee;  }*/
	</style>

	


</head>
<body>

<?php include_once('sidebar.php'); ?>

<div class="container">

	<div class="row">
		<div class="col-sm-3 col-md-2 col-lg-2">
			<!-- <div class="sidebar">
				<center>
					<div class="profile-userpic">
						<img src="ammar.png">
					</div>
					<div class="profile-name">
						<p style="font-size: 18px; color: #000; font-family: Verdana; margin: 10px;"> 
							<?php 
								/*if(isset($_SESSION["username"])) 
									echo $_SESSION["username"]; */
								
							?>
						</p>
						<button class="btn btn-danger btn-sm" style="">
							<span class="glyphicon glyphicon-envelope"></span> Send Message
						</button>
					</div>
					
					<div class="job-title">
						<h4>Developer</h4>
					</div>

				</center>
			</div> -->
		</div>
		<div class="col-sm-10 col-md-10 col-lg-10">
			<h1>Add New Task</h1>
			<center>
			<div class="newTask">
				<input id="title" class="form-control title" placeholder="Enter task and press enter"></input>
				
			</div>

				<button id="addTask" class="btn btn-primary" onclick="clickme()">
				<span class="glyphicon glyphicon-envelope"></span> Add Task</button>
			</center>
		</div>
	</div>
<br />
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-10">
			<div class="taskList" style="background-color: #EFE; border: 1px solid lightgray; border-radius: 5px;">
				<p>
					<input type="checkbox"></input>
					New Task
					<button class="btn btn-default btn-xs">Delete</button><br/>
					<p style="margin-left: 15px; margin-top: -10px;">Date: 12-02-2016</p>
				</p>
			</div>
		</div>
	</div>


	

	


</div> <!-- container closed here -->



<script type="text/javascript" src="js/script.js"></script>

<script type="text/javascript">
    jQuery(function ($) {
        $('.panel-heading span.clickable').on("click", function (e) {
            if ($(this).hasClass('panel-collapsed')) {

                // expand the panel
                $(this).parents('.panel').find('.panel-body').slideDown();
                $(this).removeClass('panel-collapsed');
                $(this).find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
            }
            else {
                // collapse the panel
                $(this).parents('.panel').find('.panel-body').slideUp();
                $(this).addClass('panel-collapsed');
                $(this).find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
            }
        });
    });
</script>

</body>
</html>