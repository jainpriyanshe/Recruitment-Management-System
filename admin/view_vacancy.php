<?php include 'db_connect.php' ?>

<?php
	$qry = $conn->query("SELECT * FROM vacancy where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
	}
?>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<p><h4><b><u><center>Requirement Information</center></u></b></h4></p>
			<p><b>Position Title: </b><h7><?php echo $position ?></h7></p>
			<p><b>Position Type: </b><h7><?php echo $position_type ?></h7></p>
			<p><b>Work Location: </b><h7><?php echo $work_location ?></h7></p>
			<p><b>Number of Position: </b><h7><?php echo $availability ?></h7></p>
			<p><b>Salary: </b><h7><?php echo $salary ?></h7></p>
			<p><b>Vendor Name: </b><h7><?php echo $vendor ?></h7></p>
			<p><b>Client Name: </b><h7><?php echo $client ?></h7></p>
			<p><b>Requirement Contact: </b><h7><?php echo $requirement_contact ?></h7></p>
			<p><b>Mandatory Skills: </b><h7><?php echo $mandatory_skills ?></h7></p>
			<p><b>Job Description: </b>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-12">
			<?php echo html_entity_decode($description) ?>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-12">
			<button class="btn btn-primary btn-sm float-right" type="button" data-dismiss="modal">Close</button>
		</div>
	</div>
</div>

<style type="">
	#uni_modal .modal-footer{
		display: none
	}
</style>