<?php
		// IF ($_SESSION('role')!= 'admin'){
		// 	require 'notAvaiable.php';
		// 	return false;
		// } ... 
?>


<div class="TaskMenager">
	<div class="tbl" ng-hide="hideTableAndAddForm">
	<div ng-show="admin">
		<form ng-submit="addTask(task)" >
			<table class="tblAddTask">
				<tr>
					<td><input type="text" class="input1" name="temp" ng-model="task.taskname" placeholder="Name of new Task"></td>
					<td>
						<select class="btn" ng-model = "task.status" ">
						  <option value="New">New</option>
						  <option value="Started">Started</option>
						  <option value="Progress">Progress</option>
						  <option value="Finished">Finished</option>
						</select>
					</td>
					<td><input type="submit" class="btn" name="addTask" value="Add_Task" > </td>
				</tr>
			</table>
		</form>
	</div>
	<div><input type="text"  ng-model="selected" ng-keyup="AllTaskShow()" placeholder="Search.." class="SearchTaskInTable" ng-style='ex' placeholder="Status" ng-blur="checkIfEmpty()" ng-focus="ex={width:'350px '};"></div>
<!--   -->
	<div class="tableTaskData" >

			<table class="table tblTask">
				<tr ><th>Id</th><th>Task</th><th>Status</th><th>Date</th><th>Modify</th></tr>
				<tr  ng-repeat="task in tasks | orderBy : 'id_task' | filter:selected as filtered" ng-if="($index >= numrimin  && $index < numrimax)"><!-- perseritja e rreshtave  -->
					<td>
						{{task.id_task}}
					</td>
					<td>
						<input type="text" class="form-control" ng-if="inputShow == $index "  ng-model='task.tasknameinput' >
						<span ng-dblclick="ShowInputs($index,task)" ng-if="!(inputShow == $index) " ng-model='task.tasknameinput'>{{task.taskname}}</span>	
					</td>
					<td>
						<select class="btn" ng-if="inputShow == $index" ng-model='task.status1' >
							<option value="New" default>New</option>
							<option value="Started">Started</option>
							<option value="Progress">Progress</option>
							<option value="Finished">Finished</option>
						</select>
						
						<span ng-dblclick="ShowInputs($index,task)" ng-if="!(inputShow == $index) " ng-model='task.status1'>{{task.status}}</span>
					</td>
					<td>
						{{task.date_created | date: "yyyy-MM-dd HH:mm:ss"}}
					</td>
					<td ng-click="getId($index)">
						<button class="btn btn-info btnMore" ng-click="showDetails(task)" >...More</button>
						<button class="btn btn-success btnEdit" ng-click="EditFrm(task)" ng-if='admin' ng-show="admin">Edit</button>
						<button class="btn btn-danger btnDetails" ng-click="DeleteTask(task)" ng-if='admin' ng-show="admin">Delete</button>
						<button class="btn btn-primary " ng-if="inputShow == $index && admin" ng-click="editTask1(task)" ng-show="admin">Update </button>
					</td>
				</tr>
			</table>
			<hr>
			<label>Showing {{numrimin+1}} to {{numrimax}} of {{length}}</label>
			<button  ng-click="previous3()" ng-disabled="(numrimin <1)">previous</button>
			<button  ng-click="next3()" ng-disabled="(length <= numrimax)">next</button>
	</div>
	</div>




	<div class="frmMore" ng-show="showFrmMore">
		<h3 style="text-align: center;" ">Task:{{name}}</h3>
		<p><b>Status:</b> {{status}}</p>
		<p><b>Details:</b>{{details}}</p>
		<p><b>Date:</b>{{time | date: "yyyy-MM-dd HH:mm:ss"}}</p>

		<button class="btn" ng-click="showAddForm()" style="margin-left:85%;" >Go Back</button>
	</div>




	<div class="frmEdit well" ng-show="showFrmEdit">
		
		<form ng-submit="editTask()" >
			<fieldset>
				<legend>Edite Task</legend>
					<input type="text" name="IdOfTask" ng-model="id_task" ng-show="HideIdOfTask">
					<div class="form-group">
						<label class="col-lg-2 control-label">Task Name</label>
						<div>
							<input type="text" id="taskName" class="input1" ng-model="name" ng-keyup="checkIfChange()">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-2 control-label">Task Status</label>
						<div>
							<select class="btn" ng-model="status" ng-change="checkIfChange()" value="status">
								  <option value="New" default>New</option>
								  <option value="Started">Started</option>
								  <option value="Progress">Progress</option>
								  <option value="Finished">Finished</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Task Details</label>
						<div>
							<textarea rows="7" class="textDetails" ng-model="details" ng-keyup="checkIfChange()">{{details}}</textarea>
						</div>
					</div>

					<div>
						<label class="col-lg-2 control-label">Task Date of create</label>
						<div>
							{{time |  date: "yyyy-MM-dd HH:mm:ss"}}
						</div>
					</div>
				

			<input type="submit" class="btn btnEA" name="editTask" value="Edit Task" ng-disabled="submit">
			</fieldset>
		</form>
			<button class="btn btnEA" ng-click="showAddFormFROMeditFrm()" style=" right:5%;" >Add New</button>
		<br><br>
		
	</div>

	
	
</div>

