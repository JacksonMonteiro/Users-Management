<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="css/style.css">

	<meta charset="utf-8">
	
	<title>Delete User</title>
</head>
<body>
	<header class="deep-purple lighten-1">
    	<h1 class="white-text">User Management System</h1>
    </header>

	<div class="row flex" id="add-user-form">
		<form action="../controller/php_action/delete_user.php" method="POST" class="col s11">
			<div class="row">
				<label for="mail" class="input-field col s11">
					E-mail: <input type="text" placeholder="email@email.com" id="mail" name="mail" class="validate">
				</label>
			</div>
			<input type="submit" value="Delete user" class="btn red button"> <a href="../index.php" class="btn deep-purple ilghten-1 button">Users list</a>
		</form>
	</div>
</body>
</html>