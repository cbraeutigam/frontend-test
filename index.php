<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<title>Frontend Test</title>
		<link href="static/css/bootstrap.css" rel="stylesheet" type="text/css" />
		<link href="static/css/font-awesome.css" rel="stylesheet" type="text/css" />
		<link href="static/css/screen.css" rel="stylesheet" type="text/css" />
		
    <!--[if lt IE 9]>
      <script src="static/js/html5shiv.js"></script>
      <script src="static/js/respond.js"></script>
    <![endif]-->
	
	</head>
	<body>
	<div class="ft__page container">
		<div class="ft__row row">
			<?php include 'scripts/modules/slider/slider.php'; ?>
			<?php include 'scripts/modules/info-box/info-box.php'; ?>
		</div>
		<div class="ft__row row">
			<?php include 'scripts/modules/article-list/article-list.php'; ?>
		</div>
		<div class="ft__row row">
			<?php include 'scripts/modules/main-content/main-content.php'; ?>
			<?php include 'scripts/modules/sidebar/sidebar.php'; ?>
		</div>
	</div>
	
    <script src="static/js/jquery.js"></script>
    <script src="static/js/bootstrap.js"></script>
  </body>
</html>