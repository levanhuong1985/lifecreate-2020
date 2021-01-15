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
<link rel="stylesheet" href="<?php echo home_url('css/recruit.css');?>" media="all">
<link rel="index contents" href="/" title="ホーム">
<?php wp_head(); ?>
</head>
<body>
<?php include ("inc/header.php") ?>

	<section class="main-page">
		<div class="main-ttl">
			<h2 class="fadeup"><span class="en poppins">RECRUIT</span><span class="jp">採用情報を知る</span></h2>
		</div>
		<figure><img src="<?php echo home_url('imgs/recruit/img_main.jpg');?>" alt="RECRUIT 採用情報を知る" class="imgfull"></figure>
	</section><!-- .main-page -->

	<main id="contents">
		<section class="sec-information">
			<div class="container">
				<h3 class="headline01 fadeup on"><span class="en poppins">JOB INFORMATION LIST</span><span class="jp">求人情報一覧</span></h3>
				<form name = "search_job" action="<?php echo home_url('recruit/information#type-recruit');?>" method="GET">
					<div class="info-block bg-gray mb50">
						<div class="info-block-inner">
							<h4 class="ttl">求人を検索！</h4>
							<ul class="list-jobs">
								<?php 
									$s_job = (int)$_GET["s_job"];
									$args = array('hide_empty' => 0, 'parent' => 0);
									$terms = get_terms('service', $args);
									if (!empty($terms) && !is_wp_error($terms)) {
										$no= 1;
										foreach ($terms as $term) {						
											
											$term_link = get_term_link( $term );							
											$term_id = $term->term_id;
								?>
								<li>
									<input type="radio" name="s_job" id="job0<?php echo $no;?>" class="ra-ctrl" value=<?php echo $term_id;?> <?php echo (($s_job==$term_id)?"checked='checked'":"")?>>
									<label for="job0<?php echo $no;?>" class="lbl"><?php echo $term->name;?></label>
								</li>
								<?php 
										$no++;
										} /* end foreach */
									} /*end if */ 
								?>

							</ul>
						</div>
					</div><!-- .info-block -->
					<div class="info-block bg-gray mb100">
						<div class="info-block-inner">
							<h4 class="ttl">職種を選択する</h4>
							<dl class="list-types">

								<?php 
									$s_type = (int)$_GET["s_type"];
									$args = array('hide_empty' => 0, 'parent' => 0);
									$terms = get_terms('job', $args);
									if (!empty($terms) && !is_wp_error($terms)) {
										$no= 1;
										foreach ($terms as $term) {						
											
											$term_link = get_term_link( $term );							
											$term_id = $term->term_id;
								
								?>
								<dt class="open-acc"><span><?php echo $term->name;?></span></dt>
								<dd>
									<ul class="list-btn-type">
											<?php 
												$args_sub = array('hide_empty' => 0, 'parent' => $term_id);
												$terms_sub = get_terms('job', $args_sub);
												if (!empty($terms_sub) && !is_wp_error($terms_sub)) {
													
													foreach ($terms_sub as $term_sub) {						
														
														$term_sub_link = get_term_link( $term_sub );							
														$term_sub_id = $term_sub->term_id;
											?>
												<li>
													<input type="radio" name="s_type" id="type<?php echo $no;?>" class="ra-ctrl" value="<?php echo $term_sub_id;?>" <?php echo (($s_type==$term_sub_id)?"checked='checked'":"")?>>
													<label for="type<?php echo $no;?>" class="lbl"><?php echo $term_sub->name;?></label>
												</li>
												<?php 
												$no++;
												} /* end foreach */
											} /*end if */ 
										?>		
									</ul>
								</dd>

                                 <?php 
										
										} /* end foreach */
									} /*end if */ 
								?>

								
							</dl>
						</div>
					</div><!-- .info-block --> 
					<div class="info-block bg-gray mb60">
						<div class="info-block-inner">
							<h4 class="ttl">勤務店舗を選択する</h4>
							<ul class="list-stores">
							   <?php
							        $s_store = (int)$_GET["s_store"]; 
									$args = array('hide_empty' => 0, 'parent' => 0);
									$terms = get_terms('store', $args);
									if (!empty($terms) && !is_wp_error($terms)) {
										$no= 1;
										foreach ($terms as $term) {						
											
											$term_link = get_term_link( $term );							
											$term_id = $term->term_id;
								?>
								<li>
									<input type="radio" name="s_store" id="store0<?php echo $no;?>" class="ra-ctrl" value=<?php echo $term_id;?> <?php echo (($s_store==$term_id)?"checked='checked'":"")?>>
									<label for="store0<?php echo $no;?>" class="lbl"><?php echo $term->name;?></label>
								</li>
								<?php 
										$no++;
										} /* end foreach */
									} /*end if */ 
								?>
								
							</ul>
						</div>
					</div><!-- .info-block -->
					<p>
					<button class="btn red submit"><input type="submit" name="submitRecruit" value="この条件で検索する" class="btn-submit"><span class="arrow">&nbsp;</span></button>

					<!--<a href="<?php echo home_url('about'); ?>" class="btn red"><span>この条件で検索する</span><span class="arrow">&nbsp;</span></a></p> !-->

				</form>

				<div class="type-recruit" id="type-recruit">
					<h4 class="ttl01">募集職種</h4>
					<p class="lead">会社の成長と共に自分自身も成長したい方。<br class="sp-only">一緒に成長しませんか？ライフクリエイトは<br class="sp-only">様々な職種で仲間を募集しています。<br>あなたのスキル・経験に応じて、ご活躍い<br class="sp-only">ただけるポジションを柔軟に検討致します。</p>
					
					<?php 
						if($s_job!=0 || $s_type!=0 || $s_store!=0){
                            $paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
							$args = array( 				
								'post_type' => 'recruit',					
								'post_status'   => 'publish',
								'posts_per_page' => 8,	
								'paged' => $paged,			
								'orderby' => 'date',
								'order' => 'DESC',
							);				

							if($s_job!=0){
								$args["tax_query"][]= array(
									'taxonomy' => 'service',
									'field'     => 'term_id',
									'terms'     => array($s_job),
									'operator' => 'IN',
								);
							}

							if($s_type!=0){
								$args["tax_query"][]= array(
									'taxonomy' => 'job',
									'field'     => 'term_id',
									'terms'     => array($s_type),
									'operator' => 'IN',
								);
							}

							if($s_store!=0){
								$args["tax_query"][]= array(
									'taxonomy' => 'store',
									'field'     => 'term_id',
									'terms'     => array($s_store),
									'operator' => 'IN',
								);
							}

							/*printf("<pre>%s</pre>",print_r($args["tax_query"])); */

							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) 
							{						
								while ( $the_query->have_posts() ) 
								{
									$the_query->the_post();
									$date_post = date("Y.m.d",strtotime($post->post_date));
									$thePostUrl=get_the_permalink();
									$slug = get_post_field( 'post_name', $post->ID );

									$cat_service  = wp_get_object_terms($post->ID,"service");
									$cat_job      = wp_get_object_terms($post->ID,"job");
									$cat_store    = wp_get_object_terms($post->ID,"store");

									$url_img 	  = get_the_post_thumbnail_url($post->ID,'thumb-cruit');	
									$content 	  = get_the_content();
									$description  = get_field("description",$post->ID);
									$job_description = get_field("job_description",$post->ID); 
									$code_recruit = get_field("code_recruit",$post->ID);

									$is_show_detail = get_field("is_show_detail",$post->ID);
									
									if(!$is_show_detail){
										$thePostUrl = "javascript:void(0)";
									}



									?> 
				
									<div class="type-recruit-block bg-gray">
										<p class="ttl02"><small>募集職種</small>
										<?php
										if(count($cat_job)>0){ 
											foreach($cat_job as $item_cat){
												$term_link = get_term_link( $item_cat ); 
												
												echo $item_cat->name;
												break;
											}
										} 
										?></p>
										<dl class="description">
											<dt>仕事内容</dt>
											<dd><?php echo $job_description; ?></dd>
										</dl>
										<?php
										if(count($cat_store)>0){ 
											foreach($cat_store as $item_cat){

												$term_link = get_term_link( $item_cat ); 
												$url_img_cat = get_field('image_store', $item_cat);
												
												
                                                ?>
												 	<div class="type-recruit-item">
														<?php if($url_img_cat["sizes"]["thumbnail"]) { ?>
																	<figure class="img"><img class="imgfull" src="<?php echo $url_img_cat["sizes"]["thumbnail"];?>" alt="<?php echo strip_tags( $item_cat->name); ?>"></figure>					
															<?php } ?>
															<div class="info">
															<p class="ttl03"><?php echo $item_cat->name; ?></p>
															<p><?php echo $item_cat->description;?></p>
														</div>
													</div>
												<?php

												break;
											}
										} 
										?>
										

										<?php if($is_show_detail){ ?>
										<ul class="btn-job-lists">
											<li><a href="<?php echo home_url('entry/?code='.$code_recruit); ?>" class="btn02 black"><span>この求人にエントリーする</span><span class="click">CLICK</span></a></li>
											<li><a href="<?php echo $thePostUrl; ?>" class="btn02 red"><span>求人の詳細情報を見る</span><span class="click">CLICK</span></a></li>
										</ul>
										<?php } ?>
									</div><!-- .type-recruit-block -->
											<?php
											} /* end while */
									?>

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
												'total' => $the_query->max_num_pages,
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
										
									</div>
									
									<?php

									} /* end if */
											else{					
												get_template_part( 'content-none' );
											} 
						
						}else{
						
							
							if ( have_posts() ) { while ( have_posts() ) {
									the_post(); 
									$date_post = date("Y.m.d",strtotime($post->post_date));
									$thePostUrl=get_the_permalink();
									$slug = get_post_field( 'post_name', $post->ID );

									$cat_service  = wp_get_object_terms($post->ID,"service");
									$cat_job      = wp_get_object_terms($post->ID,"job");
									$cat_store    = wp_get_object_terms($post->ID,"store");

									$url_img 	  = get_the_post_thumbnail_url($post->ID,'thumb-cruit');	
									$content 	  = get_the_content();
									$description  = get_field("description",$post->ID);
									$code_recruit = get_field("code_recruit",$post->ID);
									$is_show_detail = get_field("is_show_detail",$post->ID);
									$job_description = get_field("job_description",$post->ID); 
									
									if(!$is_show_detail){
										$thePostUrl = "javascript:void(0)";
									}
									
									
					?> 
				
					<div class="type-recruit-block bg-gray">
						<p class="ttl02"><small>募集職種</small>
						<?php
										if(count($cat_job)>0){ 
											foreach($cat_job as $item_cat){
												$term_link = get_term_link( $item_cat ); 
												
												echo $item_cat->name;
												break;
											}
										} 
										?></p>
						<dl class="description">
							<dt>仕事内容</dt>
							<dd><?php echo $job_description; ?></dd>
						</dl>

						<?php
							if(count($cat_store)>0){ 
								foreach($cat_store as $item_cat){
									$term_link = get_term_link( $item_cat ); 
									$url_img_cat = get_field('image_store', $item_cat);
									
												/*print_r($url_img_cat);*/		
									
									?>
										<div class="type-recruit-item">
										<?php if($url_img_cat["sizes"]["thumbnail"]) { ?>
													<figure class="img"><img class="imgfull" src="<?php echo $url_img_cat["sizes"]["thumbnail"];?>" alt="<?php echo strip_tags( $item_cat->name); ?>"></figure>					
											<?php } ?>
											<div class="info">
											<p class="ttl03"><?php echo $item_cat->name; ?></p>
											<p><?php echo $item_cat->description;?></p>
										</div>
									</div>
									<?php

									break;
								}
							} 
							?>

						

						<?php if($is_show_detail){ ?>
						<ul class="btn-job-lists">
							<li><a href="<?php echo home_url('entry/?code='.$code_recruit); ?>" class="btn02 black"><span>この求人にエントリーする</span><span class="click">CLICK</span></a></li>
							<li><a href="<?php echo $thePostUrl; ?>" class="btn02 red"><span>求人の詳細情報を見る</span><span class="click">CLICK</span></a></li>
						</ul>
						<?php } ?>
					</div><!-- .type-recruit-block -->
							<?php
							} /* end while */
					?>

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
							
						</div>
					<?php
						
						
						      }else{					
									get_template_part( 'content-none' );
								} 
							?>



					<?php } ?>

			

				</div><!-- .type-recruit -->
			</div><!-- .container -->
		</section><!-- .sec-information -->
		<ul class="list-guide">
			<li><a href="<?php echo home_url('recruit/information/?s_job=6#type-recruit'); ?>"><img src="<?php echo home_url('imgs/common/img_guide_01.jpg');?>" alt="新卒採用募集要項" class="imgfull"><span>新卒採用募集要項</span></a></li>
			<li><a href="<?php echo home_url('recruit/information/?s_job=7#type-recruit'); ?>"><img src="<?php echo home_url('imgs/common/img_guide_02.jpg');?>" alt="中途採用募集要項" class="imgfull"><span>中途採用募集要項</span></a></li>
			<li><a href="<?php echo home_url('recruit/information/?s_job=8#type-recruit'); ?>"><img src="<?php echo home_url('imgs/common/img_guide_03.jpg');?>" alt="アルバイト・パート週末ワーカー募集要項" class="imgfull"><span>アルバイト・パート<br>週末ワーカー<br class="sp-only">募集要項</span></a></li>
		</ul>
	</main><!-- #contents -->

	<?php include("inc/footer.php");?>
	
	<script src="<?php echo home_url('js/jquery-3.5.1.min.js');?>"></script>
	<script src="<?php echo home_url('js/jquery.matchHeight-min.js');?>"></script>
	<script src="<?php echo home_url('js/script.js');?>"></script>

	
</body>
</html>
