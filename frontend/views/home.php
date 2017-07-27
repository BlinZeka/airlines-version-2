<div>
	<div class="row">
		<form>
			
			<input type="text" name="temp" >
			<select>
				  <option value="Start">Start</option>
				  <option value="Progress">Progress</option>
				  <option value="Finished">Finished</option>
			</select>
			<input type="submit" class="" name="submit" value="Add Task">
		</form>
	</div>

	<div class="contentTable" ng-show="showMe">

			<table>
				<tr><th>Id</th><th>Task</th><th>Status</th><th>Time</th></tr>
				<tr><td>1</td><td>Task1</td><td>Start</td><td>20:00</td></tr>
				<tr><td>2</td><td>Task2</td><td>Start</td><td>20:00</td></tr>
				<tr><td>3</td><td>Task3</td><td>Start</td><td>20:00</td></tr>
				<tr><td>4</td><td>Task4</td><td>Start</td><td>20:00</td></tr>
				<tr><td>5</td><td>Task5</td><td>Start</td><td>20:00</td></tr>
			</table>
	</div>
</div>

