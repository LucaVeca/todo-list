<!DOCTYPE html>
<html>
<head>
	<title> Simple To-Do List </title>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="title">
		<h1>To-Do<p>List</p></h1>
	</div>
	<div class="wrap">
		<div class="task-list">
			<ul>
				<?php require("includes/connect.php"); ?>
			</ul>
		</div>
	<form class="add-new-task" autocomplete="off">
		<input class="input-box" type="text" name="new-task" placeholder="Add new item..."/>
	</form>
	</div>	
</body>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script>
	add_task();//calling the add task function

	function add_task(){
			$('.add-new-task').submit(function(){
				var new_task = $('.add-new-task input[name=new-task').val();

				if (new_task != '') {
					$.post('includes/add-task.php', { task: new_task}, function(data){
						$(('add-new-task input[name=new-task]').val();
							$(data).appendTo('task-list ul').hide().fadeIn();
					)
					});
				}
				return false;
			});
	}
</script>
</html>