<?php
/*
  Template Name: Contact
 */
?>
<?php get_template_part('sherhead'); ?>

<div id="main-area">		
	<div class="container wrapper">		
            <div id="main-content" class="col-sm-12 col-xs-12 page-contact" role="main">
                <?php echo get_template_part('breadcrumb'); ?>
                <h1>Liên hệ</h1>            
                <div class="col-sm-6 col-xs-12">
                        <div itemscope itemtype="http://schema.org/Organization">
                            <h4 itemprop="name">Công ty thiết kế quảng cáo SNH</h4>
                            <div class="item address"  itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><i class="fa fa-home"></i> Địa chỉ: <?php echo get_theme_mod('o_address'); ?></div>
                            <div class="item phone" itemprop="telephone"><i class="fa fa-phone"></i> Điện thoại: <?php echo get_theme_mod('o_phone'); ?></div>
                            <div class="item email"  itemprop="email"><i class="fa fa-envelope-o"></i> Email: <?php echo get_theme_mod('o_email'); ?></div>
                        </div>
			            <br />
                        <iframe width="500" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps/ms?msa=0&amp;msid=201650400187371247474.0004f43d3f6eb5a8d47cc&amp;ie=UTF8&amp;t=m&amp;ll=10.796496,106.690925&amp;spn=0.006323,0.006427&amp;z=17&amp;iwloc=0004f43d445f8229b59f3&amp;output=embed"></iframe>
                        
		</div>
		
                <div class="col-sm-6 col-xs-12">
                    <h4 style="padding-left:30px;">Hãy cho SNH biết bất cứ yêu cầu nào của bạn</h4>
                    <?php echo do_shortcode('[contact-form-7 id="27" title="Contact form 1"]'); ?>
                </div>
            </div>
            
        </div>        
        
</div>

	
<div id="copy-right">SNH © 2014 PRIVACY POLICY</div>

	<?php wp_footer(); ?>
</body>
</html>
