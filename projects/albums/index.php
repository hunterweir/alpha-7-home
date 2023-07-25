
<!DOCTYPE html>

<?php
	/* router */
	$page = null;
	if (isset($_GET['page']) ){
		$page = $_GET['page']; // url?page=string
	} else {
		$page = "home";
	}
?>

<html lang='en'>
	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<title> Albums </title>
		<!-- Add meta tags as practice? -->
		<link rel='stylesheet' href='css/site.css'>
	</head>

	<body>
		<header>
		<?php include('site-menu.php');?>
		</header>

		<main class='page-content'>
			<?php
				if($page == 'home') {
					include ('home.php');
				}
				if ($page == 'list') {
					include ('list.php');
				}
				if ($page == 'detail') {
					include ('detail.php');
				}				
			?>
		</main>
	</body>
</html>
		

	
