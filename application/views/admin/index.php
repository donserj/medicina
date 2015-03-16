<?php $this->load->view("admin/parts/header"); ?>
<body class='login-body'>
	<div class="login-wrap">
		<h2>Login</h2>
		<div class="login">
			<form action="/admin/auth/" method="POST">
				<!--a href="#" class='button button-basic-blue button-less-round'>Connect with <span>Facebook</span></a>
				<a href="#" class='button button-basic-blue button-less-round button-twitter'>Connect with <span>Twitter</span></a>
				<div class="sep"></div-->
				<div class="email"><input type="text" name="login" placeholder="Login" class='input-block-level'></div>
				<div class="pw">
					<input type="password" name="pass" placeholder="Password" class='input-block-level'>
				</div>
				<button type="submit" value="Sign In" class='button button-basic-darkblue btn-block'>Sign In</button>
			</form>
		</div>
		<!--a href="#" class='pw-link'>Forgot your <span>password</span>? <i class="icon-arrow-right"></i></a-->
		<br>
		<?php echo $error; ?>
	</div>


	
</body>
</html>