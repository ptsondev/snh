<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<?php 
	$queried_object = get_queried_object();             
	if($queried_object->ID != PID_HOME){		
		echo '<div id="sub-footer"></div>';			
	}
?>
	
<footer id="main-footer">				
	<div class="container">
		<div class="col-sm-6 col-xs-12">
			<div itemscope itemtype="http://schema.org/Organization">
                            <h4 itemprop="name">Công ty thiết kế quảng cáo SNH</h4>
                            <div class="item status"><i class="fa fa-quote-left"></i> Đưa nghệ thuật vào từng thương hiệu <i class="fa fa-quote-right"></i></div>			
                            <div class="item address"  itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><i class="fa fa-home"></i> Địa chỉ: <?php echo get_theme_mod('o_address'); ?></div>
                            <div class="item phone" itemprop="telephone"><i class="fa fa-phone"></i> Điện thoại: <?php echo get_theme_mod('o_phone'); ?></div>
                            <div class="item email"  itemprop="email"><i class="fa fa-envelope-o"></i> Email: <?php echo get_theme_mod('o_email'); ?></div>
                        </div>
			<div class="social">
				<a class="facebook" href="https://www.facebook.com/ThietKeQuangCaoSNH"></a>
				<!--<a class="twitter" href="<?php echo get_theme_mod('o_twitter'); ?>"></a>-->
				<!--<a class="linkhay" href="<?php echo get_theme_mod('o_linkhay'); ?>"></a>-->
				<a class="youtube" href="https://www.youtube.com/channel/UC_9ng7HZ_LKbUULI-ZxSkTQ"></a>
			</div>
		</div>
		<div class="col-sm-6 col-xs-12">
			<h4>Kiến thức về thiết kế quảng cáo</h4>			
			<?php 
                        $args = array(
                            'showposts' => 5,
                            'post_type' => 'article',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'article-category',                                    
                                    'terms'    => 9
                                )
                            )
                        );

                        $wp_query = new WP_Query($args);
                        if ($wp_query->have_posts()) {            
                            while ($wp_query->have_posts()) : $wp_query->the_post();
                                echo '<li><a href="'.  get_permalink().'"><i class="fa fa-dot-circle-o"></i> '.get_the_title().'</a></li>';
                            endwhile;                       
                        }
                        ?>
		</div>
	</div>
	<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div>	
</footer>
<div id="copy-right"><a href="<?php echo get_permalink(PID_HOME); ?>">SNH</a> © 2014 PRIVACY POLICY</div>

<div id="click-to-call"><a href="tel:0838200772"></a></div>
	<?php wp_footer(); ?>
	
	</div> <!-- for END mmenu wrapper -->
</body>
</html>