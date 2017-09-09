<h1>List Of Students</h1>
<a href="<?php echo base_url('sms/add/'); ?>" class="btn btn-success btn-md">
<span class="glyphicon glyphicon-plus-sign"></span>  Add student</a>
<br />
<br />
<table class="table">
	<thead>
		<tr>
			<th>ID NO.</th>
			<th>STUDENT'S NAME</th>
			<th>COURSE</th>
			<th>ACTION</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($students as $s){
		echo '	<tr >	
					<td>'.$s['idno'].'</td>
					<td>'.$s['fname'].' '.$s['lname'].'</td>
					<td>'.$s['course'].'</td>
					<td>
						<a href="'.base_url('sms/view/'.$s['idno']).'">View</a> |
						<a href="'.base_url('sms/edit/'.$s['idno']).'">Edit</a> |
						<a href="'.base_url('sms/del/'.$s['idno']).'" class="delete">Delete</a>
					</td>
				</tr>
				';
	}
	?>
	</tbody>
</table>
<script type="text/javascript">
$(document).ready(function(){
	$('.delete').click(function(){
		var ans = confirm("Do you want to delete this record?");
		if(ans==true){
			alert("Delete");
			redirect to delete method
			location.href = "<?php echo base_url(); ?>";
		}
	});
});
</script>
