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
		<section class="sec-detail">
			<div class="container">
			<?php
			if ( have_posts() ) { while ( have_posts() ) {
					the_post(); 
					$date_post = date("Y/m/d",strtotime($post->post_date));
					$date_modified_post = get_the_modified_date( 'Y-m-d' );						
					$thePostUrl=get_the_permalink();											
					$slug = get_post_field( 'post_name', $post->ID );
					$cat_blog = wp_get_object_terms($post->ID,"category_news");
					$url_img_full = get_the_post_thumbnail_url($post->ID,'full');
					$listtags= get_the_terms( $post->ID, 'post_tag');

					$image_detail = acf_photo_gallery('gallery', $post->ID);
					/*printf("<pre>%s</pre>",print_r($image_detail,true));	*/	
		?>	
                
				<h3 class="headline01 fadeup">
				<?php 
				if(count($cat_blog)>0){ 
					foreach($cat_blog as $item_cat){
						$term_link = get_term_link( $item_cat ); 
						$cat_english = get_field('english_title', $item_cat);
						echo '<span class="en poppins">'.$cat_english.'</span><span class="jp">'.$item_cat->name.'</span> ';
						break;
					}
				} 
				?>	
				</h3>
				<div class="detail-block">
					<div class="head-block fadeup">
						<h3 class="ttl"><?php echo $post->post_title; ?></h3>
						<p class="date"><?php echo $date_post; ?></p>
					</div>
					<?php 
					if(!empty($image_detail)){
						foreach($image_detail as $item_image_detail)
						{
				
				?>
						<figure class="detail-photo fadeup"><img src="<?php echo $item_image_detail["full_image_url"];?>" alt="" class="imgfull"></figure>
					
				<?php 
					}
					}
				?>
                    <?php the_content();?>
					</div><!-- .detail-block -->

				<ul class="list-buttons">
				<?php
					$prev_post = get_previous_post();
					if($prev_post) {
					   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
					   echo '<li><a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="btn prev"><span class="poppins">PREV</span><span class="arrow">&nbsp;</span></a></li>';
						}
					?>
					<li><a href="<?php echo home_url('news');?>" class="btn"><span class="poppins">NEWS TOP</span></a></li>
					<?php
						$next_post = get_next_post(); 
						if($next_post) {
						   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
						   echo '<li><a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="btn next"><span class="poppins">NEXT</span><span class="arrow">&nbsp;</span></a></li>';
						}
					?>
				</ul>
				<?php } ?>
			<?php } ?>
			</div><!-- .container -->
		</section><!-- .sec-detail -->
	</main><!-- #contents -->

	<?php include("inc/footer.php");?>
	
	<script src="<?php echo home_url('js/jquery-3.5.1.min.js');?>"></script>
	<script src="<?php echo home_url('js/jquery.matchHeight-min.js');?>"></script>
	<script src="<?php echo home_url('js/script.js');?>"></script>
</body>
</html>