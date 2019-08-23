<?php get_template_part('sherhead'); ?>
<div id="main-area">		
	<div class="container wrapper">		
		<?php $has_sidebar = true;
			$col = 'col-sm-9';
			if(get_the_ID()==559 || get_the_ID()==137){
				$has_sidebar = false;
				$col = 'col-sm-12';
			}
		?>
		<div id="main-content" class="<?php echo $col; ?> col-xs-12" role="main">		
			<?php get_template_part('breadcrumb');?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article itemscope itemtype="http://schema.org/NewsArticle"  id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<h1 class="entry-title"  itemprop="headline"><?php the_title(); ?></h1>
                                        <div id="article-social">
                                            <span class="post-date"><span class="author" itemprop="author" ><span itemprop="name">Thiết kế quảng cáo SNH</span></span> - <span class="updated" itemprop="datePublished"><?php echo get_the_date('d/m/Y', get_the_ID());?></span></span>
											<meta itemprop="dateModified" content="<?php  the_modified_date('d/m/Y'); ?>" />
                                            <?php echo theme_social_share(); ?>
                                        </div>
					<?php 
						$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($postID), 'thumbnail_size' );
						if($thumb && !empty($thumb)){
							$url = $thumb['0']; 
							
							echo' <div class="s-hidden" itemprop="image" itemscope itemtype="https://schema.org/ImageObject">
								<amp-img src="'.$thumb[0].'" width="'.$thumb[1].'" height="'.$thumb[2].'"></amp-img>
								<meta itemprop="url" content="'.$thumb[0].'">
								<meta itemprop="width" content="'.$thumb[1].'">
								<meta itemprop="height" content="'.$thumb[2].'">
							</div>';
						}
					?>
					
					<div class="entry-content" itemprop="articleBody">
						<?php the_content(); ?>
					</div>
					<div class="vcard author post-author">Posted by <a href="http://snh.vn/dich-vu/thiet-ke-catalogue/">Thiết kế catalogue chuyên nghiệp</a> </div>
					<div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
						<div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
						  <amp-img src="http://snh.vn/wp-content/themes/thsnh_mb/images/snhlogo2.jpg" alt="Cong ty thiet ke quang cao SNH" height="100" width="100"></amp-img>
						  <meta itemprop="url" content="http://snh.vn/wp-content/themes/thsnh_mb/images/snhlogo2.jpg">
						  <meta itemprop="width" content="233">
						  <meta itemprop="height" content="233">
						</div>
						<meta itemprop="name" content="Công ty Thiết Kế Quảng Cáo SNH">
					</div>
					<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>					
				</article>

				<?php // comments_template(); ?>
			<?php endwhile; ?>
			
		</div>
		
		
		<?php 
			if($has_sidebar){
		?>
		<div id="sidebar" class="col-sm-3 col-xs-12">
			<?php get_sidebar(); ?>
		</div>
		<?php } ?>
		
	</div>
</div>
<?php get_footer(); ?>