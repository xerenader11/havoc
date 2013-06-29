<?php include("header.php"); ?>
<div id='content'>
	<div class='inner'>
		<div id='globber'>
			<div id='pre-content-wrapper'>

			</div>
			<div id='main' class="main-sign-in">
				<h1 class="pagetitle">Sign In</h1>
				<div class="sign-in">
					<form action="/index.php/signIn/process" method="post">
						<div class="div-Email"><b>Email:</b> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="email" id="email">&nbsp;<font color="red">*</font></div>
						<div class="div-Pass"><b>Password:</b> <input type="password" name="pass" id="pass">&nbsp;<font color="red">*</font></div>
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