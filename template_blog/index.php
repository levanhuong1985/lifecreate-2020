<?php 
if ( ! defined( "ABSPATH" ) ) exit; // Exit if accessed directly
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="description" content="{[#SITE_DESCRIPTION#]}">
<meta name="keywords" content="{[#SITE_KEYWORDS#]}">
<meta name="format-detection" content="telephone=no">
<title>[#SITE_TITLE#]}</title>
<script type="text/javascript">
	if ((navigator.userAgent.indexOf('iPhone') > 0) || navigator.userAgent.indexOf('iPod') > 0 || navigator.userAgent.indexOf('Android') > 0) {
		document.write('<meta name="viewport" content="width=device-width, initial-scale=1">');
	}else{
		document.write('<meta name="viewport" content="width=1400">');
	}
</script>
<link rel="stylesheet" href="<?php echo home_url('css/normalize.css');?>" media="all">
<link rel="stylesheet" href="<?php echo home_url('css/style.css');?>" media="all">
<link rel="stylesheet" href="<?php echo home_url('css/news.css');?>" media="all">
<link rel="index contents" href="/" title="ホーム">
<?php wp_head(); ?>
</head>
<body>
	<?php include ("inc/header.php") ?>

	<section class="main-page">
		<div class="main-ttl">
			<h2 class="fadeup"><span class="en poppins">NEWS</span><span class="jp">新着情報</span></h2>
		</div>
		<figure><img src="<?php echo home_url('imgs/news/img_main.jpg'); ?>" alt="NEWS 新着情報" class="imgfull"></figure>
	</section><!-- .main-page -->

	<main id="contents">
		<section class="sec-news">
			<div class="container">
				<h3 class="headline01 fadeup"><span class="en poppins">CATEGORY</span><span class="jp">お知らせカテゴリー</span></h3>
				<ul class="tabs fadeup">
					<?php
				    global $URL_G;
					$term_id_parent = 0;					
					$term_id_sub = 0;					
					if(isset($URL_G[1]))
					{
						$taxonomy_details = get_term_by( "slug",$URL_G[1],"category_news" );
						
						/*printf("<pre>%s</pre>",print_r($taxonomy_details,true));*/
						if($taxonomy_details->parent)
						{
							$term_id_parent = $taxonomy_details->parent;
							$term_id_sub = $taxonomy_details->term_id;								
							
							$args_parent = array('hide_empty' => 0, 'parent' => $taxonomy_details->parent);
					        $terms_parent = get_terms('category_news', $args_parent);
						}else
						{
							$term_id_parent = $taxonomy_details->term_id;
							$term_id_sub = 0;		
						}
					}
				?>
				<li class="<?php echo (($URL_G[0] == 'news')?"active":"")?>"><a href="<?php echo home_url('news/#contents'); ?>">すべて</a></li>
					
				<?php
					
					$args = array('hide_empty' => 0, 'parent' => 0);
					$terms = get_terms('category_news', $args);
					if (!empty($terms) && !is_wp_error($terms)) {
						foreach ($terms as $term) {						
							
							$term_link = get_term_link( $term );							
							$term_id = $term->term_id;
				?>
                <li class="<?php echo (($term_id_parent == $term->term_id)?"active":"")?>"><a href="<?php echo $term_link;?>#contents"><?php echo $term->name;?></a>
                   
                </li>
				
				<?php } ?>
				<?php } ?>
				
				</ul>
				<div class="tab-contents fadeup">
					<div class="tab-box" id="tab01">
						<ul class="list-news">
						<?php 
							if ( have_posts() ) { while ( have_posts() ) {
									the_post(); 
									$date_post = date("Y.m.d",strtotime($post->post_date));
									$thePostUrl=get_the_permalink();
									$slug = get_post_field( 'post_name', $post->ID );
									$cat_blog = wp_get_object_terms($post->ID,"category_news");
									$url_img 	  = get_the_post_thumbnail_url($post->ID,'thumb-news');	
									$content 	= get_the_content();
									$listtags= get_the_terms( $post->ID, 'post_tag');
									
							?> 

							<li>
								<a href="<?php the_permalink(); ?>">
								<?php if($url_img) { ?>
										<figure class="img"><img class="imgfull" src="<?php echo $url_img;?>" alt="<?php echo $post->post_title; ?>"></figure>					
								<?php } ?>
                    
									<div class="info">
										<div class="matchHeight">
											<span class="date"><?php echo $date_post;?></span>
											<span class="ttl bold"><?php echo $post->post_title; ?></span>
											<span class="des"><?php echo et_exceprt($content,70);?></span>
										</div>
										<p><span class="btn black"><span class="poppins">READ MORE</span></span></p>
									</div>
								</a>
							</li>
							<?php
									}
								}else{					
									get_template_part( 'content-none' );
								} 
							?>

						</ul>
						<div class="pagination poppins">
						<?php		
								if( get_option('permalink_structure') ) 
								{
								   $format = 'page/%#%/';
								   
								} else 
								{
								   $format = '&paged=%#%';
								}
								$page_links = paginate_links( array(				
									'prev_text' => 'PREV',
									'next_text' => 'NEXT',
									'total' => $wp_query->max_num_pages,
									'current' => max( 1, $paged ),
									'format'       => $format,	
									'type' => 'array'
								) );

								if ( is_array($page_links) ) {
									//echo '<ul class="pagination">';
									foreach ( $page_links as $page ) {
										echo "$page";
									}
									//echo '</ul>';
								}					
								wp_reset_postdata();
							?>
							<!--
							<a href="#" class="prev">PREV</a>
							<a href="#" class="active">1</a>
							<a href="#">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
							<a href="#">...</a>
							<a href="#">7</a>
							<a href="#" class="next">NEXT</a>
							!-->
						</div>
					</div><!-- #tab01 -->
					
				</div><!-- .tab-contents -->
			</div><!-- .container -->
		</section><!-- .sec-news -->
	</main><!-- #contents -->

	<?php include("inc/footer.php");?>

	<script src="<?php echo home_url('js/jquery-3.5.1.min.js');?>"></script>
	<script>
		$(".tabs li a").click(function(){
			var url_link = $(this).attr('href');
			window.location.href= url_link;
			return;
		})
	</script>

	<script src="<?php echo home_url('js/jquery.matchHeight-min.js');?>"></script>
	<script src="<?php echo home_url('js/script.js');?>"></script>
	
</body>
</html>