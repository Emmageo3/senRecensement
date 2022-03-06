<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf8" />
	<title>Logged In</title>
    <link type="text/css" href="<?php echo BASE_URL ?>/Views/Assets/style.css" rel="stylesheet" />
</head>

<body>
    <p class="message_box">Howdy <b><?php echo $_SESSION['username']; ?></b>, you logged in! <a href="<?php echo BASE_URL; ?>/User/Logout">Logout!</a></p>
</body>
</html>