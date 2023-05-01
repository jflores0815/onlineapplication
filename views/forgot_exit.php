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


		window.location.href="forgot_password.php";	

	</script>

	</body>



</html>