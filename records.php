<?php include('header.php'); ?>


<title>Employee Records</title>


<style>
	.menuTab1 a:nth-child(2) .pageTab1 {
	   background: #AB192D;
	}
</style>




<div class="banner1 bkCyanBlue">
	<i class="material-icons menuBtn1">menu</i>
	<span>Employee Records</span>
</div>




<div class="content1" style="background: #f0f3f5;min-height: 90vh;">
	
	<div class="boxHead1">
		<div class="boxHeader1 bDCyanBlue">Employee List</div>
	</div>

	<div class="boxBody1">

			
			<div class="tanHead tanHP" style="background: #fff;border-bottom:0px solid transparent;">
				<input type="text" class="searchT" placeholder="Employee Search ...">

				<div class="pinA">
					 <span>Filter by:</span> 
					 <select name="" id="">
					 	<option value="">Choose a filter</option>
					 	<option value="communication">Communication</option>
					 	<option value="Finance">Finance</option>
					 </select>
				</div>
			</div>
			
			<div class="tableRanch">
				<table class="employee">
				<thead>
					<tr>
						<td>Staff ID</td>
						<td>Name</td>
						<td>Department</td>
						<td>Branches</td>
						<td>Action</td>
					</tr>
				</thead>

				<tbody>
					<tr>
						<td>00155</td>
						<td><a href="#">Samuel Olufemi</a></td>
						<td>Human Resource Department</td>
						<td>Marina, Lagos</td>
						<td>
							<button class="btn1 bkSkyBlue">View details</button>
						</td>
					</tr>


					<tr>
						<td>00155</td>
						<td><a href="#">Samuel Olufemi</a></td>
						<td>Human Resource Department</td>
						<td>Marina, Lagos</td>
						<td>
							<a href='profile'><button class="btn1 bkSkyBlue">View details</button></a>
						</td>
					</tr>


					<tr>
						<td>00155</td>
						<td><a href="#">Samuel Olufemi</a></td>
						<td>Human Resource Department</td>
						<td>Marina, Lagos</td>
						<td>
							<a href='profile'><button class="btn1 bkSkyBlue">View details</button></a>
						</td>
					</tr>


					<tr>
						<td>00155</td>
						<td><a href="#">Samuel Olufemi</a></td>
						<td>Human Resource Department</td>
						<td>Marina, Lagos</td>
						<td>
							<a href='profile'><button class="btn1 bkSkyBlue">View details</button></a>
						</td>
					</tr>



					<tr>
						<td>00155</td>
						<td><a href="#">Samuel Olufemi</a></td>
						<td>Human Resource Department</td>
						<td>Marina, Lagos</td>
						<td>
							<a href='profile'><button class="btn1 bkSkyBlue">View details</button></a>
						</td>
					</tr>


					<tr>
						<td>00155</td>
						<td><a href="#">Samuel Olufemi</a></td>
						<td>Human Resource Department</td>
						<td>Marina, Lagos</td>
						<td>
							<a href='profile'><button class="btn1 bkSkyBlue">View details</button></a>
						</td>
					</tr>



					<tr>
						<td>00155</td>
						<td><a href="#">Samuel Olufemi</a></td>
						<td>Human Resource Department</td>
						<td>Marina, Lagos</td>
						<td>
							<a href='profile'><button class="btn1 bkSkyBlue">View details</button></a>
						</td>
					</tr>


					<tr>
						<td>00155</td>
						<td><a href="#">Samuel Olufemi</a></td>
						<td>Human Resource Department</td>
						<td>Marina, Lagos</td>
						<td>
							<a href='profile'><button class="btn1 bkSkyBlue">View details</button></a>
						</td>
					</tr>



					<tr>
						<td>00155</td>
						<td><a href="#">Samuel Olufemi</a></td>
						<td>Human Resource Department</td>
						<td>Marina, Lagos</td>
						<td>
							<a href='profile'><button class="btn1 bkSkyBlue">View details</button></a>
						</td>
					</tr>


					<tr>
						<td>00155</td>
						<td><a href="#">Samuel Olufemi</a></td>
						<td>Human Resource Department</td>
						<td>Marina, Lagos</td>
						<td>
							<a href='profile'><button class="btn1 bkSkyBlue">View details</button></a>
						</td>
					</tr>

					
				</tbody>
			</table>
			</div>
			


			<div class="counter">
				<span>View </span>

				<select name="" id="">
					<option value="10">10</option>
					<option value="10">20</option>
					<option value="10">50</option>
				</select>

				<span>10 of 20</span>

				<i class="material-icons">keyboard_arrow_left</i>

				<i class="material-icons">keyboard_arrow_right</i>

			</div>

	</div>


</div>


<?php include('footer.php'); ?>