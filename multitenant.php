<?php include('header.php'); ?>

<title>Multi Tenant User</title>



<div class="banner bkSkyBlue">
	<i class="material-icons menuBtn">menu</i>
	<span>Multi-Tenant User</span>
</div>



<div class="content">
	<div class="boxed">

		<div class="boxHead">
			<div class="boxHeader bBYellow">Quick Actions</div>
		</div>

		<div class="boxBody">

			<div class="pad col4 bkPurple">
				<i class="material-icons">note_add</i>
				<div class="vintage">Add Organisation</div>
			</div>

			<div class="pad col4 bkPurpleBlue">
				<i class="material-icons">group</i>
				<div class="vintage">Total Learners</div>
			</div>

			<div class="pad col4 bkDarkPink">
				<i class="material-icons">account_balance</i>
				<div class="vintage">Active Organisations</div>
			</div>

			<div class="pad col4 bkPink">
				<i class="material-icons">book</i>
				<div class="vintage">Active Courses</div>
			</div>

		</div>

	</div>


	<div class="boxed">

		<div class="boxHead">
			<div class="boxHeader bBYellow">Recently added Organisations</div>
		</div>

		<div class="boxBody">

			<table class="org">
				<thead>
					<tr>
						<th>SN</th>
						<th>Names</th>
						<th>Date Created</th>
						<th>Action</th>
						<th></th>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>1</td>
						<td>Organisation 1</td>
						<td>April 25, 2017</td>
						<td>
							<a href=""><i class="material-icons">edit</i><span>Edit</span></a>
							<a href=""><i class="material-icons">visibility</i><span>View</span></a>
							<a href=""><i class="material-icons">assignment</i><span>Generate Report</span></a>
						</td>
						<td>
							<div class="btn btnGreen">Activate</div>
						</td>


						<tr>
						<td>2</td>
						<td>Organisation 1</td>
						<td>April 25, 2017</td>
						<td>
							<a href=""><i class="material-icons">edit</i><span>Edit</span></a>
							<a href=""><i class="material-icons">visibility</i><span>View</span></a>
							<a href=""><i class="material-icons">assignment</i><span>Generate Report</span></a>
						</td>
						<td>
							<div class="btn btnGreen">Activate</div>
						</td>
					</tr>



					<tr>
						<td>3</td>
						<td>Organisation 1</td>
						<td>April 25, 2017</td>
						<td>
							<a href=""><i class="material-icons">edit</i><span>Edit</span></a>
							<a href=""><i class="material-icons">visibility</i><span>View</span></a>
							<a href=""><i class="material-icons">assignment</i><span>Generate Report</span></a>
						</td>
						<td>
							<div class="btn btnRed">Deactivate</div>
						</td>
					</tr>



					<tr>
						<td>4</td>
						<td>Organisation 1</td>
						<td>April 25, 2017</td>
						<td>
							<a href=""><i class="material-icons">edit</i><span>Edit</span></a>
							<a href=""><i class="material-icons">visibility</i><span>View</span></a>
							<a href=""><i class="material-icons">assignment</i><span>Generate Report</span></a>
						</td>
						<td>
							<div class="btn btnRed">Deactivate</div>
						</td>
					</tr>



					<tr>
						<td>5</td>
						<td>Organisation 1</td>
						<td>April 25, 2017</td>
						<td>
							<a href=""><i class="material-icons">edit</i><span>Edit</span></a>
							<a href=""><i class="material-icons">visibility</i><span>View</span></a>
							<a href=""><i class="material-icons">assignment</i><span>Generate Report</span></a>
						</td>
						<td>
							<div class="btn btnGreen">Activate</div>
						</td>
					</tr>
					</tr>
				</tbody>
			</table>

		</div>

	</div>


</div>





<?php include('footer.php'); ?>