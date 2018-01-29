<?php include('header.php'); ?>


<title>Manage Courses</title>


<style>
	.menuTab a:nth-child(1) .pageTab {
	   background: #AB192D;
	}
</style>




<div class="banner bkSkyBlue">
	<i class="material-icons menuBtn">menu</i>
	<span>Manage Courses</span>
</div>




<div class="content">
	

	<div class="boxHead">
		<div class="boxHeader bDGreenishBlue">Create</div>
	</div>

	<div class="boxBody">

		<a href="addcourse">
			<div class="bigMenu">
				<div class="smallMenu">
					<i class="material-icons">library_add</i>
					<span>New Course</span>
				</div>
			</div>
		</a>


		<a href="#">
			<div class="bigMenu">
				<div class="smallMenu">
					<i class="material-icons">folder_open</i>
					<span>New Learning Area</span>
				</div>
			</div>
		</a>



		<a href="#">
			<div class="bigMenu">
				<div class="smallMenu">
					<i class="material-icons">folder</i>
					<span>New Learner Group</span>
				</div>
			</div>
		</a>



	</div>





	<div class="boxHead">
		<div class="boxHeader bDGreenishBlue">Assign</div>
	</div>

	<div class="boxBody">

		<a href="#">
			<div class="bigMenu">
				<div class="smallMenu">
					<i class="material-icons">swap_horiz</i>
					<span>Assign Course</span>
				</div>
			</div>
		</a>


	</div>







	<div class="boxHead">
		<div class="boxHeader bDGreenishBlue">Manage course contents</div>
	</div>

	<div class="boxBody">

		<a href="#">
			<div class="bigMenu">
				<div class="smallMenu">
					<i class="material-icons">info</i>
					<span>Course Reviews</span>
				</div>
			</div>
		</a>


		<a href="#">
			<div class="bigMenu">
				<div class="smallMenu">
					<i class="material-icons">delete</i>
					<span>View/Review Courses</span>
				</div>
			</div>
		</a>



		<a href="#">
			<div class="bigMenu">
				<div class="smallMenu">
					<i class="material-icons">assignment_returned</i>
					<span>Third Party Integration</span>
				</div>
			</div>
		</a>



	</div>


</div>




<?php include('footer.php'); ?>