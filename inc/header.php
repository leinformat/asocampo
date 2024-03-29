<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php include 'siteData.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo $data["title"] ?></title>
	<meta name="description" content="<?php echo $data["metadescription"] ?>" />
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="shortcut icon" href="logo-2.ico">
	<link href="./fileinput/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />

</head>
<body >
	<!-- ====================================================
	header section -->
	<div class="pymes-repository">
		<header class="pymes-repository__header-container">
			<div class="pymes-repository__header">
				<a class="pymes-repository__logo-link" href="index.php">
				<img  class="pymes-repository__logo" src="logo-2.jpg" alt="<?php echo $data["title"] ?>">
				</a>
				<div class="pymes-repository__title-container">
					<h1 class="pymes-repository__title"><?php echo $data["title"] ?></h1>
				</div>
			</div>
		</header>
 