<?php
	if (array_key_exists("submit", $_POST)
	
	print_r($_POST)
    
?>

<form method="post">
<div>
					<h1>Sign Up</h1>
					<p>Please fill in this form to create an account.</p>
					<hr>
					<label for="name"><b>Name</b></label>
					<input type="text" id="name" name="name" placeholder="Your Name" required>
					
					
					<label for="email"><b>Email</b></label>
					<input type="email" placeholder="Enter Email" name="email" required>
					
					
                    <label for="psw"><b>Password</b></label>
					<input type="password" placeholder="Enter Password" name="psw" required>
					
 
					
					<label>
						<input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
					</label>

					<p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
				</div>
				<div class="clearfix">
					<button type="button" onclick="closeForm1()" class="cancelbtn">Cancel</button>
					<button type="submit" class="signupbtn" onclick="ValidateEmail(document.form1.text1)" name="submit">Sign Up</button>
                </div>
				