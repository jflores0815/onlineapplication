<?php

	session_start();

	?>


<!DOCTYPE html>

<html>

	<body>

	<?php

	unset($_SESSION['username']);
	session_destroy();

?>



	<script type="text/javascript">

		alert('Logged out');

		window.location.href="admin-login.php";	

	</script>

	</body>

</html>