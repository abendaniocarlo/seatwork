<div>
	
	<div class="student-picture">
		<img src="<?php echo base_url('assets/images/anon_student.jpg') ?>" alt="Picture" height="100" />
	</div>
	<br />
	<div class="student-profile">
		<p style="font-size:20px;"><b>ID No: </b><?php echo $students[0]['idno']; ?></p>
		<p style="font-size:20px;"><b>Name: </b><?php echo $students[0]['lname'].', '.$students[0]['fname'].' '.$students[0]['mname']; ?></p>
		<p style="font-size:20px;"><b>Course: </b><?php echo $students[0]['course']; ?></p>
		<p style="font-size:20px;"><b>Sex: </b><?php echo $students[0]['sex']; ?></p>
		<br />
		<a href="<?php echo base_url('sms') ?>" class="lead btn btn-danger btn-md">
			<span class="glyphicon glyphicon-hand-left"></span>  Back
		</a>
	</div>
	
</div>
