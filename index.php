<!DOCTYPE html>
<html lang="en">
	<head>
		<title>The Association of Cyber Engineers @ Louisiana Tech</title>
		
		<!-- Bootstrap 3 and Bootstrap Theme CSS  -->
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="./bootstrap/css/bootstrap-theme.min.css" />
		
		<link rel="stylesheet" href="./resources/styles.css" />
		
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
	</head>
	<body>
		<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="./index.php"><img src="./resources/ACELogo.png" /></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
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
		<!--FOOTER-->
		<footer>
			<div class="footer">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-xs-8">
							<a href="http://www.latech.edu/"><img src="./resources/tech_new_logo_wm_web.jpg" /></a>
						</div>
						<div class="col-sm-9 col-xs-4">
							<div class="row">
								<?php
									$social_media = array
									(
										//'facebook' => 'https://www.facebook.com/TigerRobotics3946',
										'twitter' => 'https://twitter.com/#!/LaTechACE',
										//'googleplus' => 'https://plus.google.com/118198635080612986989/posts',
										//'youtube' => 'https://www.youtube.com/user/slidellrobotics'
									);
									foreach($social_media as $picture => $url)
									{
										echo '<div class="text-center col-sm-3 col-md-1">';
										echo '<a href="'.$url.'"><img src="./resources/social/'.$picture.'.png" /></a>';
										echo '</div>';
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
                <!-- jQuery and Bootstrap Javascript  -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="./bootstrap/js/bootstrap.min.js"></script>
		
                <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
                <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
                <!--[if lt IE 9]>
                        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
                <![endif]-->
		
                <!-- Google Analytics  -->
                <script>
                        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                        ga('create', 'UA-55833900-1', 'auto');
                        ga('send', 'pageview');
                </script>
	</body>
</html>
