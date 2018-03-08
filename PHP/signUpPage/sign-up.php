
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="SignUpForm" method="POST" novalidate>
	<fieldset>
		<legend>Student information:</legend>
		<div class="form-row">
			<label>Name:</label>
			<input type="text" name="fullname" value="<?php echo $fullName;?>">
			<span class="error"><?php echo $fullNameError; ?></span>
		</div>
		
		<div class="form-row">
			<label>Student ID #:</label>
			<input type="text" name="studentID" value="<?php echo $studentID; ?>">
			<span class="error"><?php echo $studentIdError; ?></span>
		</div>
	</fieldset>
	
	<fieldset>
		<legend>Tell us about yourself:</legend>
		<textarea rows="4" cols="50" name="message"><?php echo $message;?></textarea>
		<span class="error"><?php echo $messageError; ?></span>
	</fieldset>

	<fieldset>
		<legend>Are you a current student?</legend>
		<?php $student = $_REQUEST['student']; ?>
		<input type="radio" name="student" <?php if (isset($student) && $student == "yes") echo 'checked = "checked"';?> value="yes">Yes <br>
		<input type="radio" name="student" <?php if (isset($student) && $student == "no") echo 'checked = "checked"';?> value="no">No <br>
		<span class="error"><?php echo $studentRegError; ?></span>
	</fieldset>

	<fieldset>
		<legend>What are your interests?</legend>
		<input type="checkbox" name="interest[]" value="Art"/>Art<br>
		<input type="checkbox" name="interest[]" value="Sports"/>Sports<br>
		<input type="checkbox" name="interest[]" value="Technology"/>Technology<br>
		<input type="checkbox" name="interest[]" value="Reading"/>Books<br>
		<span class="error"><?php echo $interestError; ?></span>
	</fieldset> 

	<fieldset>
		<legend>What career do wish to enter?</legend>
		<select name="career">
			<option value="null">-- Please choose one --</option>
			<option <?php if (isset($career) && $career == "Business") { echo 'selected'; } ?> value="Programming">Business</option>
			<option <?php if (isset($career) && $career == "Technology") { echo 'selected'; } ?> value="Technology">Technology</option>
			<option <?php if (isset($career) && $career == "Science") { echo 'selected'; } ?> value="Science">Science</option>
			<option <?php if (isset($career) && $career == "Medical") { echo 'selected'; } ?> value="Medical">Medical</option>
		</select>
		<span class="error"><?php echo $careerError; ?></span>
	</fieldset>

	<fieldset>
		<legend>Which type of club do you prefer?</legend>
		<select name="clubInterest[]" multiple>
			<option value="Networking">1. Networking</option> 
			<option value="Tutoring">2. Tutoring</option>
			<option value="Mentoring">3. Mentoring</option>
			<option value="Volunteer">4. Volunteer opportunities</option>
		</select>
		<span class="error"><?php echo $clubInterestError; ?></span>
	</fieldset>

	<input type="submit" name="submit" value="Submit Form" />
	<h5><u>review selections below:</u></h5>
</form> <hr/>