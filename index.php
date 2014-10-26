<!DOCTYPE html>
<html lang="en">
	<head>
		<title>The Association of Cyber Engineers @ Louisiana Tech</title>
		
		<link rel="stylesheet" href="./resources/styles.css" />
		<link rel="stylesheet" href="./bs/css/bootstrap.min.css" />
		<link rel="stylesheet" href="./bs/css/bootstrap-theme.min.css" />		
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<!--<span class="sr-only">Toggle navigation</span>-->
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./index.php"><img src="./resources/ACELogo.png" /></a>
				</div>
				<div class="collapse navbar-collapse pull-right">
					<ul class="nav navbar-nav">
						<?php
						$links = array
						(
							'home' => array('Home'=>'Cyber Engineering Homepage'),
							'about' => array('About'=>'About The Association of Cyber Engineers'),
							'projects' => array('Projects' => 'Association of Cyber Engineers Projects'),
							'officers' => array('Officers' => 'Association of Cyber Engineers Officers')
							//'' => array('' => ''),
						);
						if(!isset($_GET['p']) || !array_key_exists($_GET['p'], $links))
						{
							$_GET['p'] = 'home';
						}
						foreach($links as $url => $info)
						{
							foreach($info as $text => $title)
							{
								if($_GET['p'] == $url)
								{
									echo '<li class="active">';
								}
								else
								{
									echo '<li>';
								}
								echo '<a href="index.php?p='.$url.'" title="'.$title.'">'.$text.'</a></li>';
							}
						}
						?>
					</ul>
				</div>
			</div>
		</div>
		<div class="container" role="main">
		<?php
		if(file_exists('./pages/'.$_GET['p'].'.php'))
		{
include "./pages/".$_GET['p'].".php";
		}
		else
		{
			echo '<div class="label label-danger"><h1>Page not Found!</h1></div>';
		}
		?>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="./bs/js/bootstrap.min.js"></script>
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</body>
</html>
