<?php
require_once('includes/cmsApplication.php');
class TodolistApplication extends CmsApplication{
	
	function addtodotask() {
		// echo "This will add new tasks to todolist in database";
		echo '<pre>';print_r($_REQUEST);echo '</pre>';
	}

	function viewtodolist(){
		echo "This will show all todo tasks from database";
	}

	private function displayDashboard(){

	?>
		<div>
			<h3>Todolist Application Dashboard</h3>
			<a href="index.php?app=todolist&task=addtaskform">Add Todo Task</a><br/>
			<a href="#">View Todo List</a>
		</div>

	<?php
	}

	function display(){
		$this->displayDashboard();
	}

	function addtaskform(){
	?>
		<div>
			<h3>Todolist Application Dashboard</h3>
			<form>
				<input type="hidden" name="app" value="todolist"/>
				<input type="hidden" name="task" value="addtodotask"/>
				<label for="title">Title</label><br>
				<input type="text" name="title" /><br>
				<label for="desc">Description</label><br>
				<textarea name="desc"></textarea><br>
				<input type="submit" value="Add Task" />
			</form>
		</div>
	<?php
	}

}

?>