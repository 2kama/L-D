<?php include('header.php'); ?>


<title>New Training </title>




<div class="banner1 bkTorBlue">
	<i class="material-icons menuBtn1">menu</i>
	<span>Training Management</span>
</div>




<div class="content1" style="min-height: 90vh;">
	
	<div class="boxHead1">
		<div class="boxHeader1 bDGreen">Add New Training</div>
	</div>

	<div class="boxBody1">

			
		<div class="formArea">

			<div class="formBox1 fullForm">
				<label for="">Enter Programme Title:</label>
				<input type="text" placeholder="" />
			</div>

			<div class="formBox1 halfForm">
				<label for="">Programme Category</label>
				<input type="text" />
			</div>

			<div class="formBox1 halfForm">
				
				<div class="formBox1 halfForm">
					<label for="">Vendor</label>
					<input type="text" />
				</div>

				<div class="formBox1 halfForm">
					<label for="">Type</label>
					<select name="" id="">
						<option value="implant">Implant</option>
					</select>
				</div>

			</div>

			<div class="formBox1 halfForm">
				
				<div class="formBox1 halfForm">
					<label for="">Location</label>
					<input type="text" />
				</div>

				<div class="formBox1 halfForm">
					<label for="">Venue</label>
					<input type="text" />
				</div>

			</div>


			<div class="formBox1 halfForm">
				
				<div class="formBox1 halfForm">
					<label for="">Start Date</label>
					<input type="date" />
				</div>

				<div class="formBox1 halfForm">
					<label for="">End Date</label>
					<input type="date" />
				</div>

			</div>

				
			<div class="formBox1 halfForm">
				<label for="">Traning Hours</label>
				<input type="number" />
			</div>

			<div class="formBox1 halfForm">
				<label for="">No of days</label>
				<input type="number" />
			</div>


			<div class="formBox1 halfForm">
				<label for="">Courses Fee(&#8358;)</label>
				<input type="number" />
			</div>

			<div class="formBox1 halfForm">
				<label for="">Other Fees(&#8358;)</label>
				<input type="number" />
			</div>

			<div class="formBox1 fullForm">
				<label for="">Total Cost(&#8358;)</label>
				<input type="number" />
			</div>

			<div class="formBox1 fullForm bulkfile">
				<label for="">Bulk Upload</label>
				<input type="file" />

				<button class="bkTorBlue">Upload</button>
			</div>



			<div class="underlineBtn">
				<button class="nextBtn btn1 btnMedium bkGreen">Add and Save</button>
			</div>




		</div>



	</div>


</div>



<style>
/** add this to the main.css 

.bDGreen {
	border-bottom: 3px solid #2fbf71;
}
.bulkfile {
	background: rgba(22, 96, 136, 0.2);
	padding: 30px;
	padding-right: 45%;
}
.bulkfile button {
	background: #166088;
}

.formBox1 label {
  width: 100%;
  margin-bottom: 10px;
  font-weight: bold;
  font-size: 13px;
  float: left;
}
label i {
  font-style: italic;
  color: #ccc;
  font-size: 12px;
  padding-left: 20px;
  float: none;
}
.halfForm .halfForm {
	padding-top: 0px;
	padding-bottom: 0px;
}


@media (max-width: 500px;) {
	.bulkfile {
		padding-right: 30px;
	}
}


**/
</style>




<?php include('footer.php'); ?>