<?php
	session_start();
	include_once('connection/connection.php');


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
			<?php if(isset($_SESSION['username'])) 
				echo '<h1>Add New Task</h1>
				<center>
				<div class="newTask">
				
					<form method="POST" action="scripts/new_task.php">
						<input id="title" name="title" class="form-control title" 
						placeholder="Enter task and press enter"></input>
					</form>
				</div>';
				
					else {}
				?>

				<!-- <button id="addTask" class="btn btn-primary" onclick="clickme()">
				<span class="glyphicon glyphicon-envelope"></span> Add Task</button> -->
			</center>
		</div>
	</div>
<br />
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-10">


					
					<?php 
						$query = "SELECT * FROM posts";

						$result = mysqli_query($mysqli, $query);
						// echo mysqli_num_rows($result);
						
						$count = 0;

						while($count <= mysqli_num_rows($result))
						{
						echo '<div class="taskList" style="background-color: #EFE; border: 1px solid lightgray; 
						border-radius: 5px; margin-bottom: 10px;">';
						echo '<p>';
						echo '<input type="checkbox" style="margin-top: 10px;"></input>
							<p style="position: absolute; margin-left: 20px;">' . htmlspecialchars_decode(mysqli_fetch_row($result)[1]) .'</p>';
							// echo mysqli_fetch_row($result)[1] . '	';
							// echo mysqli_fetch_row($result)[2] . '<br>';
							$count++;
					?>

					<button class="btn btn-default btn-xs" id="btn_delete">Delete</button><br/>
					<p style="margin-left: 15px; margin-top: -10px;">Date: 12-02-2016</p>
					</p>

			</div>
				<?php
						}
					?>
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