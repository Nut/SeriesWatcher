<?php require_once('lib/init.php'); ?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Serien</title>
</head>
<body>
    <h1>series watched</h1>
    <p><a href="?page=start">Home</a><br><a href="?page=search">Search</a><br><a href="?page=watched">Watched</a></p>
	<?php
		$Main = new Main();
		$Main->makeTable();
		if(!isset($_GET['page']) || $_GET['page'] == 'start') {
			include('Pages/Index.inc.php');
		} elseif($_GET['page'] == 'search') {
			include('Pages/Search.inc.php');
		} elseif($_GET['page'] == 'watched') {
			include('Pages/Watched.inc.php');
		} else {
			include('Pages/Error.inc.php');
		}
	?>
</body>
</html>