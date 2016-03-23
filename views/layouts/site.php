
<!DOCTYPE html>
<!--[if lt IE 7]><html lang="ru" class="lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html lang="ru" class="lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html lang="ru" class="lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="ru">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Көкмардан мектебі</title>
	<meta name="keywords" content="<?=$page_data['keywords'];?>" />
	<meta name="description" content="<?=$page_data['description'];?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl-carousel/owl.carousel.css" />
	<link rel="stylesheet" href="libs/countdown/jquery.countdown.css" />
	<link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/media.css" />
</head>
<body>
	<div class="header">
		<div class="wrapper">
			
		</div>
		<div class="logo">
			<h2>Көкмардан жалпы орта мектеп коммуналдық мекемесі</h2>
		</div>
	</div>
	<div class="top_line"></div>
	<div class="sider_container">
		<div class="next_button"><i class="fa fa-angle-right"></i></div>
							<div class="prev_button"><i class="fa fa-angle-left"></i></div>
		<div class="carousel">
			<div class="slide_item"><a class="fancybox" data-fancybox-group="group" href="images/mo.jpg"><img src="images/mo.jpg" alt="alt" /></a></div>
			<div class="slide_item"><a class="fancybox" data-fancybox-group="group" href="images/ds.jpg"><img src="images/ds.jpg" alt="alt" /></a></div>
			<div class="slide_item"><a class="fancybox" data-fancybox-group="group" href="images/col1.jpg"><img src="images/col1.jpg" alt="alt" /></a></div>
			<div class="slide_item"><a class="fancybox" data-fancybox-group="group" href="images/col2.jpg"><img src="images/col3.jpg" alt="alt" /></a></div>
		</div>
	</div>
	<div class="top_line"></div>
		<ul class="nav">
			<? $menu = get_menu();
			foreach ($menu as $item): ?>
				<li><a href="index.php?view=<?=$item['title_url'];?>"><?=$item['title'];?></a></li>
			<?endforeach;?>

		</ul>
	<div class="section">
		<div class="left_section">
			<div class="left_sc">
				<ul>
					<li><a href="#">Администрация</a></li>
					<li><a href="#">Директор беті</a></li>
					<li><a href="#">Завуч беті</a></li>
					<li><a href="#">Мектеп жайлы</a></li>
					<li><a href="#">Завуч беті</a></li>
					<li><a href="#">Мектеп жайлы</a></li>
				</ul>
			</div>
		</div>
		<div class="center_section">
			<div class="center_sc"></div>
				<?include($_SERVER['DOCUMENT_ROOT'].'/mektep/views/pages/'.$view.'.php');?>
		</div>

		<div class="right_section">
			
		</div>
	</div>


<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/jquery-mousewheel/jquery.mousewheel.min.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/waypoints/waypoints-1.6.2.min.js"></script>
	<script src="libs/scrollto/jquery.scrollTo.min.js"></script>
	<script src="libs/owl-carousel/owl.carousel.min.js"></script>
	<script src="libs/countdown/jquery.plugin.js"></script>
	<script src="libs/countdown/jquery.countdown.min.js"></script>
	<script src="libs/countdown/jquery.countdown-ru.js"></script>
	<script src="libs/landing-nav/navigation.js"></script>
	<script src="js/common.js"></script>
	<!-- Yandex.Metrika counter --><!-- Yandex.Metrika counter -->
	<!-- /Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>
