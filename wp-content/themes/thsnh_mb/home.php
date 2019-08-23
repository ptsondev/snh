<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<title><?php wp_title( '|', true, 'right' ); ?></title>	
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
	<?php wp_head(); ?>
	<script type='text/javascript' src='http://snh.vn/wp-content/themes/thsnh_mb/js/jquery.min.js'></script>
	<script type='text/javascript' src='http://snh.vn/wp-content/themes/thsnh_mb/js/js.js?ver=4.4.2'></script>
	<link rel="stylesheet" href='http://snh.vn/wp-content/themes/thsnh_mb/css/main.css?ver=4.4.2'>
</head>

<body id="index3">
	<div id="box">
		<div id="light"></div>
		<div id="g-content">
			<h1 id="snh-name"><a href="<?php echo get_permalink(PID_HOME); ?>">SNH</a><span id="cursor"></span></h1>
			<div id="snh-des">
				<div class="des des-1">Thiết kế quảng cáo</div>
				<div class="des des-2">Xây dựng thương hiệu</div>			
			</div>
			<!--<div id="home-product"><img src="images/home-product.png" alt="okie" /></div>-->
		</div>
	</div>

</body>

<script>
jQuery(document).ready(function($){	
	setTimeout(function(){ window.location = 'http://snh.vn/home/'; }, 8000);
}); 
</script>


</html>