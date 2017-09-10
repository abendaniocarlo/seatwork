<h2>New Course</h2>
<form role="form" class="" method="post" action="<?php echo base_url('sms/savecourse'); ?>" >
				
				<div class="text-danger">
				<?php
				if( isset($errors) ){
					echo $errors;
				}
				?>
				</div>
				
				<div class="form-group">
					<label for="coursename">Course Name:</label>
					<input type="text" class="form-control" id="coursename" name="coursename" />
				</div>
				
				<div class="form-group">
					<button type="submit" class="btn btn-primary" onclick="alert('Saved Sucessfully')">
						Save <span class="glyphicon glyphicon-save"></span> 
					</button>
				</div>
			</form>