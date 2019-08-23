
<div class="block" id="sticky-article">
	<h2 class="block-title">Nên tham khảo</h2>
	<?php 
	$args = array(
		'showposts' => 10,		
		'post_type' => 'article',
		'meta_query' => array(
			array(
				'key'     => 'wpcf-sticky',
                'value'   => 1,                                    
            )                            
        ),
	);

	$wp_query = new WP_Query($args);
	if ($wp_query->have_posts()) {            
		while ($wp_query->have_posts()) : $wp_query->the_post();
			$thumb = snh_get_thumbnail(get_the_ID(), 100, 100);
			echo '<li>';
				//echo '<div class="col-sm-12 col-xs-12"><a href="'.get_permalink(get_the_ID()).'"><img src="'.$thumb.'" alt="'.get_the_title().'"/></a></div>';
				echo '<div class="col-sm-12 col-xs-12">';
					echo '<a href="'.get_permalink(get_the_ID()).'">'.get_the_title().'</a>';
				//	echo '<div class="posted">'.get_the_date('d/m/Y', get_the_ID()).'</div>';
				echo '</div>';				
			echo '</li>';
		endwhile;                       
	}
	?>
</div>


<?php

// thanh search google
// list dịch vụ
function display_list_child_service($tid){
	$args = array(
		'showposts' => 20,
		'post_type' => 'service',
		'tax_query' => array(
			array(
				'taxonomy' => 'service-category',
				'field'    => 'term_id',
				'terms'    => $tid
			),
		),
		'orderby' => 'post_date',
		'order'   => 'ASC',
	);

	$wp_query = new WP_Query($args);
	if ($wp_query->have_posts()) {            
		while ($wp_query->have_posts()) : $wp_query->the_post();
			echo '<li><a href="'.get_permalink(get_the_ID()).'"><div class="service-item">'.get_the_title().'</div></a></li>';
		endwhile;                       
	}
}
?>					
					
<div class="block">
<h2 class="block-title">Thiết kế quảng cáo</h2>
<?php display_list_child_service(TID_DESIGN); ?>
</div>
<div class="block">
<h2 class="block-title">Giải pháp Online</h2>
<?php display_list_child_service(TID_ONLINE); ?>
</div>
<div class="block">
<h2 class="block-title">Media</h2>
<?php display_list_child_service(TID_MEDIA); ?>
</div>

<div class="block" id="support-online">
	<h2 class="block-title">Tư vấn trực tuyến</h2>	
	<div class="col-sm-12 supporter">
		<div><i class="fa fa-user-plus"></i> <?php echo get_theme_mod('name1'); ?></div>
		<div><i class="fa fa-skype"></i> <?php echo get_theme_mod('skype1'); ?> </div>
		<div><i class="fa fa-phone"></i> <?php echo get_theme_mod('phone1'); ?></div>
	</div>
	<div class="col-sm-12 supporter">
		<div><i class="fa fa-user-plus"></i> <?php echo get_theme_mod('name2'); ?></div>
		<div><i class="fa fa-skype"></i> <?php echo get_theme_mod('skype2'); ?> </div>
		<div><i class="fa fa-phone"></i> <?php echo get_theme_mod('phone2'); ?></div>
	</div>
	
</div>

<div class="block" id="site-counter">
<a href="http://snh.vn/dich-vu/thiet-ke-brochure/">Dịch vụ thiết kế brochure</a>
<!-- Histats.com  START (html only)-->

<!-- Histats.com  END  -->
</div>