<?php include 'db_connect.php' ?>
<?php
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM vacancy where id=".$_GET['id'])->fetch_array();
	foreach($qry as $k =>$v){
		$$k = $v;
	}
}

?>
<div class="container-fluid">
	<form action="" id="manage-vacancy">
				<input type="hidden" name="id" value="<?php echo isset($_GET['id']) ? $_GET['id']:'' ?>" class="form-control">
		<div class="row form-group">
			<div class="col-md-4">
				<label class="control-label">Position Title</label>
				<input type="text" name="position" class="form-control" value="<?php echo isset($position) ? $position:'' ?>">
			</div>
			<div class="col-md-4">
				<label class="control-label">Position Type</label>
				<input type="text" name="position_type" class="form-control" value="<?php echo isset($position_type) ? $position_type:'' ?>">
			</div>
			<div class="col-md-4">
				<label class="control-label">Work Location</label>
				<input type="text" name="work_location" class="form-control" value="<?php echo isset($work_location) ? $work_location:'' ?>">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-4">
				<label class="control-label">Number of Position</label>
				<input type="text" name="availability" class="form-control" value="<?php echo isset($availability) ? $availability:'' ?>">
			</div>
			<div class="col-md-4">
				<label class="control-label">Salary</label>
				<input type="text" name="salary" class="form-control" value="<?php echo isset($salary) ? $salary:'' ?>">
			</div>
			<div class="col-md-4">
				<label class="control-label">Vendor Name</label>
				<input type="text" name="vendor" class="form-control" value="<?php echo isset($vendor) ? $vendor:'' ?>">
			</div>
		</div>
		<div class="row form-group">
		<div class="col-md-4">
				<label class="control-label">Client Name</label>
				<input type="text" name="client" class="form-control" value="<?php echo isset($client) ? $client:'' ?>">
			</div>
			<div class="col-md-4">
				<label class="control-label">Requirement Contact</label>
				<input type="text" name="requirement_contact" class="form-control" value="<?php echo isset($requirement_contact) ? $requirement_contact:'' ?>">
			</div>
		<?php if(isset($id)): ?>
			<div class="col-md-4">
				<label class="control-label">Status</label>
				<select name="status" class="browser-default custom-select" id="">
					<option value="1" <?php echo $status == 1 ? "selected" :'' ?>>Active</option>
					<option value="0" <?php echo $status == 0 ? "selected" :'' ?>>Closed</option>
				</select>
			</div>
		<?php endif; ?>
		</div>
		<div class="row form-group">
		<div class="col-md-12">
		<label class="control-label">Mandatory Skills</label>
				<input type="text" name="mandatory_skills" class="form-control" value="<?php echo isset($mandatory_skills) ? $mandatory_skills:'' ?>">
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-12">
				<label class="control-label">Job Description</label>
				<textarea name="description" class="text-jqte"><?php echo isset($description) ? $description : '' ?></textarea>
			</div>
		</div>
	</form>
</div>

<script>
	$('.text-jqte').jqte();
	$('#manage-vacancy').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_vacancy',
			method:'POST',
			data:$(this).serialize(),
			success:function(resp){
				if(resp == 1){
					alert_toast("Data successfully saved.",'success')
					setTimeout(function(){
						location.reload()
					},1000)
				}
			}
		})
	})
</script>