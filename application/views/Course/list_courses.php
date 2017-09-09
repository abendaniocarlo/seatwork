<h1>List of Courses</h1>
<a href="<?php echo base_url('sms/addcourse/'); ?>" >Add course</a>
<table class="table">
	<thead>
		<tr>
			<th>course id</th>
			<th>course</th>
			
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($course as $s){
		echo '	<tr >	
					<td>'.$s['id'].'</td>
					<td>'.$s['coursename'].'</td>
					
				</tr>
				';
	}
	?>
	</tbody>
</table>