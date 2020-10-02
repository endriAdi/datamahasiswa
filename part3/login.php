<?php 
session_start();
if (isset($_SESSION['login'])) {
	header("location:index.php");
}

require 'functions.php';

//ketika tombol login ditekan
if (isset($_POST['login'])) {
	$login=login($_POST);
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<h3>LOGIN</h3>
	<?php if (isset($login['error'])) : ?>
		<p><?php echo $login['pesan']; ?></p>
	<?php endif; ?>
	<form action="" method="post">
		<ul>
			<li>
				<label>
					Username :
					<input type="text" name="username" autocomplete="off" autofocus required placeholder="masukan username">
				</label>
			</li>
			<li>
				<label>
					Password :
					<input type="password" name="password" autocomplete="off" required>
				</label>
			</li>
			<li>
				<button type="submit" name="login">Login</button>
			</li>
		</ul>
	</form>

</body>
</html>