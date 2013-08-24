<?php include("header.php"); ?>
<div id='content'>
	<div class='inner'>
		<div id='globber'>
			<div id='pre-content-wrapper'>

			</div>
			<div id='main' class="main-sign-in">
				<h1 class="pagetitle">Sign Up</h1>
				<div class="sign-in">
					<form action="/index.php/signUp/process" method="post">
						<div class="div-Email"><b>Email:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email">&nbsp;<font color="red">*</font></div>
						<div class="div-Pass"><b>Password:</b> <input type="password" name="pass" id="pass">&nbsp;<font color="red">*</font></div>
						<div class="div-CPass"><b>Confirm Password:</b> <input type="password" name="cpass" id="cpass">&nbsp;<font color="red">*</font></div>
						<div class="div-Fname"><b>First Name:</b> <input type="text" name="fname" id="fname">&nbsp;<font color="red">*</font></div>
						<div class="div-Mname"><b>Middle Name:</b> <input type="text" name="mname" id="mname"></div>
						<div class="div-Fname"><b>Last Name:</b> <input type="text" name="lname" id="lname">&nbsp;<font color="red">*</font></div>
						<div class="div-Fname"><b>Address:</b> <input type="text" name="address" id="address">&nbsp;<font color="red">*</font></div>
						<div class="div-Fname"><b>Mobile Number:</b> <input type="text" name="mobile" id="mobile">&nbsp;<font color="red">*</font></div>
						<div class="div-Fname"><b>Phone Number:</b> <input type="text" name="phone" id="phone"></div>
						<div class="div-Reg"><input type="submit" name="register" id="register" value="Register"></div>
					</form>
				</div>
				<div class="error-msg">
					<?php
						if(isset($error)){
							echo $error;
						}
					?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("footer.php"); ?>
