<!doctype html>   
<html ⚡>
    <head>
        <meta charset="utf-8">
        <script async src="https://cdn.ampproject.org/v0.js"></script>        
        <title><?php wp_title( '|', true, 'right' ); ?></title>	
                      
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">

        <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/snhlogo2.ico" />

        <style amp-custom>
            <?php include_once(bloginfo('stylesheet_directory').'css/main.css');?>
        </style>
        
        <meta name="viewport" content="width=device-width,minimum-scale=1">
        <style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style>
        <noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>

         <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
       <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>	   	   
	   <?php 
		  $queried_object = get_queried_object();	
	   ?>
	

        
        <?php wp_head(); 
            /*global $post;
			if($post->ID==PID_HOME){			
				echo "<script type='text/javascript' src='http://snh.vn/wp-content/themes/thsnh_mb/js/jquery.min.js'></script>";
				echo "<script type='text/javascript' src='http://snh.vn/wp-content/themes/thsnh_mb/js/js.js?ver=4.4.2'></script>";			
			}*/
            ?>

    </head>
        
<body <?php body_class(); ?>>
    
    <div id="fb-root"></div>    

    <button id="open-sidebar" on="tap:sidebar.open"></button>
    <amp-sidebar id="sidebar" layout="nodisplay">
            <ul>
                              <?php 
                                                    $queried_object = get_queried_object();
                                                    $cPID = $queried_object->ID;                                                    
                                                ?>
						<li <?php if($cPID==PID_HOME) echo 'class="active"'; ?>><a href="<?php echo get_permalink(PID_HOME);?>">Trang Chủ</a></li>
						<li <?php if($cPID==PID_ABOUT) echo 'class="active"'; ?>><a href="<?php echo get_permalink(PID_ABOUT);?>"><?php pll_e('Giới Thiệu'); ?></a></li>
						<li <?php if($cPID==PID_SERVICES) echo 'class="active"'; ?>><a href="<?php echo get_permalink(PID_SERVICES);?>">Dịch Vụ</a>
							<ul>
                                                            <li><a href="<?php echo get_term_link(TID_DESIGN, 'service-category'); ?>">Thiết Kế Quảng Cáo</a></li>
                                                            <li><a href="<?php echo get_term_link(TID_ONLINE, 'service-category'); ?>">Giải Pháp Online</a></li>
                                                            <li><a href="<?php echo get_term_link(TID_MEDIA, 'service-category'); ?>">Media</a></li>
                                                        </ul>
						</li>
						<li <?php if($cPID==PID_ARTICLES) echo 'class="active"'; ?>><a href="<?php echo get_permalink(PID_ARTICLES);?>">Kiến Thức</a></li>
						<li <?php if($cPID==PID_CONTACT) echo 'class="active"'; ?>><a href="<?php echo get_permalink(PID_CONTACT);?>">Liên Hệ</a></li>
						
						<li><a href="http://snh.vn/portfolio">Portfolio</a></li>                
                <button on="tap:sidebar.close"><== Close</button>
              </ul>
    </amp-sidebar>
    
    
	<div><!-- for mmenu wrapper -->
		
	<header id="main-header">				
		<div class="container">
			<div id="logo-area">
				<div id="logo" class=""><a href="<?php echo get_home_url();?>"><amp-img src="<?php echo IMG_PATH;?>snhlogo2.jpg" alt="Cong ty thiet ke quang cao SNH" height="100" width="100"></amp-img></a></div>
				<div id="p-hotline"><?php echo get_theme_mod('o_hotline'); ?></div>
			</div>
					   
		</div>	
	</header>
	
	<?php 
                $queried_object = get_queried_object();             
		if($queried_object->ID != PID_HOME){			
			echo '<div id="sub-header"></div>';			
		}
	?>