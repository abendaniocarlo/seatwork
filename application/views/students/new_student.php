<form role="form" class="" method="post" action="<?php echo base_url('sms/save?a=add'); ?>" >
				
				<div class="text-danger">
				<?php
				if( isset($errors) ){
					echo $errors;
				}
				?>
				</div>
				
				<div class="form-group">
					<label for="idno">ID No.:</label>
					<input type="text" class="form-control" id="idno" name="idno" />
				</div>
				<div class="form-group">
					<label for="lname">Last Name:</label>
					<input type="text" class="form-control" id="lname" name="lname" />
				</div>	
				<div class="form-group">
					<label for="fname">First Name:</label>
					<input type="text" class="form-control" id="fname" name="fname" />
				</div>
				<div class="form-group">
					<label for="mname">Middle Name:</label>
					<input type="text" class="form-control" id="mname" name="mname" />
				</div>
				<div class="form-group">
					<label for="course">Course:</label>
					<select class="form-control" id="course" name="course">
					<?php
					foreach($course as $s){
						echo '<option >'.$s['coursename'].'</option>';
					}
					?>
					</select>
				</div>
				<div class="form-group">
					<label for="sex">Sex</label>
					<input type="radio" class="" id="sex" name="sex" value="M" /> Male
					<input type="radio" class="" id="sex" name="sex" value="F" /> Female
				</div>	
				<div class="form-group">
					<button type="submit" class="btn btn-primary" onclick="alert('Saved Sucessfully')">
						Save <span class="glyphicon glyphicon-save"></span> 
					</button>
				</div>
			</form>