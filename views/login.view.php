<!DOCTYPE html>
<html>
	<head>
		<?php include'head.view.php'; ?>
	</head>
	
	<body class="gotigBackground">
	<div class="container">

	<!-- header -->	
	<div class="headerInclude">
		<?php include'loginheader.php'; ?>
	</div>
	
	<!-- Login Box-->
	<div class="loginBox">
		<div  align="center">
			
			<div>
				<img src="<?=URL?>public/img/jesus1400.svg" width="auto" height="250" alt="Gott Jesus" />
			</div>
			<br>
			<div class="hoch4">
			<?php if(!empty($errors) ) :?>
			<div class="loginFehler">
				<?= implode("<br>", $errors)?>
			</div>
			<?php endif; ?>
			</div>
			<br>
			test
			<!--<form name="formName" onSubmit="return validateForm(this.form)">-->
			<form method="POST" name="form" >
			<input name="pass" class="loginInput" type="text" maxlength="8" placeholder="Password" required autofocus />
			</form>

		</div>
	</div>	
		<div class="hoch4">&#160;</div><!-- placeholder für footer -->
	</div><!-- Ende container -->
	<!-- footer -->
	<div class="footerInclude">
		<?php include'footer.php'; ?>
	</div>
			
	</body>
</html>