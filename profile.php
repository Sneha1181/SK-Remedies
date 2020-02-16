<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<button><a href="2.html">Proceed</a></button>
<button><a href="logout.php">Log Out</a></button>
</div>
</body>
</html>


