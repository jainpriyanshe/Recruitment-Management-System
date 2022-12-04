<?php 
include 'db_connect.php';
$application = $conn->query("SELECT  a.*,v.position FROM application a inner join vacancy v on v.id = a.position_id where a.id=".$_GET['id'])->fetch_array();
foreach($application as $k => $v){
	$$k = $v;
}
       $fname = explode('_',$resume_path);
       unset($fname[0]);
       $fname = implode("",$fname);
?>
<div class="container-fluid">
	<div class="col-md-12">
		<p><h4><b><u><center>Profile Information</center></u></b></h4></p>
		<p><b>Desired Position: </b><?php echo $dp ?></p>
		<p><b>Full Name: </b><?php echo ucwords($firstname.' '.$middlename.' '.$lastname) ?></p>
		<p><b>Email ID: </b><?php echo $email ?></p>
		<p><b>Contact Number: </b><?php echo $contact ?></p>
		<p><b>Current Location: </b><?php echo $location ?></p>
		<p><b>LinkedIn ID: </b><?php echo $linkedin ?></p>
		<p><b>Total Experience: </b><?php echo $experience ?></p>
		<p><b>Current CTC: </b><?php echo $ctc ?></p>
		<p><b>Fixed CTC: </b><?php echo $ftc ?></p>
		<p><b>Expected CTC: </b><?php echo $etc ?></p>
		<p><b>Notice Period: </b><?php echo $np ?></p>
		<p><b>Last Working Day: </b><?php echo $lwd ?></p>
		<p><b>Resume</p>
			<a href="download.php?id=<?php echo $_GET['id'] ?>" target="_blank"><?php echo $fname ?></a>

	</div>
</div>