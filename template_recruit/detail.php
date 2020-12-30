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
		<section class="sec-detail">
			<div class="container">
			<?php
					if ( have_posts() ) { while ( have_posts() ) {
							the_post(); 
							$date_post = date("Y/m/d",strtotime($post->post_date));
							$date_modified_post = get_the_modified_date( 'Y-m-d' );						
							$thePostUrl=get_the_permalink();											
							$slug = get_post_field( 'post_name', $post->ID );

							$cat_service  = wp_get_object_terms($post->ID,"service");
							$cat_job      = wp_get_object_terms($post->ID,"job");
							$cat_store    = wp_get_object_terms($post->ID,"store");

							$url_img 	  = get_the_post_thumbnail_url($post->ID,'thumb-cruit');	
							$content 	  = get_the_content();
							$description  = get_field("description",$post->ID);
							$code_recruit = get_field("code_recruit",$post->ID);
							$name1 = get_field("name1",$post->ID);
							$name2 = get_field("name2",$post->ID);
							$birthday = get_field("birthday",$post->ID);
							$youtube_recruit = get_field("youtube_recruit",$post->ID);
							$job_kind = get_field("job_kind",$post->ID);
							$job_description = get_field("job_description",$post->ID);
							$qualification_requirements = get_field("qualification_requirements",$post->ID);
							$work_location = get_field("work_location",$post->ID);
							$remarks = get_field("remarks",$post->ID);	
							$working_hours = get_field("working_hours",$post->ID);
							$holidays = get_field("holidays",$post->ID);
							$salary = get_field("salary",$post->ID);
							$treatment = get_field("treatment",$post->ID);
							

				?>	

				<div class="introduce">
					<div class="box fadeup">
					<?php		
						if(count($cat_job)>0){ 
						foreach($cat_job as $item_cat){
							$term_link = get_term_link( $item_cat ); 
							echo $item_cat->name."<br>";
							break;
						}
					} 
					?>
					   <span class="name"><?php echo $name1;?>　<?php echo $name2;?></span>
						<?php echo $birthday;?>
					</div>
					<div class="video fadeup"><?php echo $youtube_recruit;?></div>
				</div><!-- .introduce -->
				<div class="detail bg-gray">
					<div class="detail-inner">
					<?php		
						if(count($cat_service)>0){ 
						foreach($cat_service as $item_cat){
							$term_link = get_term_link( $item_cat ); 
							echo '<h3 class="ttl fadeup"><span> '.$item_cat->name.'</span></h3>';
							break;
						}
					} 
					?>
						
						<ul class="list-topic fadeup">
						<?php		
							if(count($cat_service)>0){ 
							foreach($cat_service as $item_cat){
								$term_link = get_term_link( $item_cat ); 
								echo '<li>'.$item_cat->name.'</li>';
								break;
							}
						} 
						?>
							<?php		
							if(count($cat_job)>0){ 
							foreach($cat_job as $item_cat){
								$term_link = get_term_link( $item_cat ); 


								if($item_cat->parent){
									$parent_term = get_term( $item_cat->parent, 'job' );
									/*print_r($parent_term);*/
									
									if($parent_term->name){ 
										echo '<li>'.$parent_term->name.'</li>';
									
								   }
									
								}
								echo '<li><span class="large">'.$item_cat->name.'</span></li>';
								break;
								}
							} 
							?>
							
							<?php		
							if(count($cat_store)>0){ 
								foreach($cat_store as $item_cat){
									$term_link = get_term_link( $item_cat ); 
									echo '<li>'.$item_cat->name.'</li>';
									break;
								}
							} 
							?>
						</ul>
						<div class="tbl fadeup">
							<table class="tbl-style">
								<tr>
									<th class="red">職　　種</th>
									<td><?php echo $job_kind;?></td>
								</tr>
								<tr>
									<th class="red">仕事内容</th>
									<td>
									<?php echo $job_description;?>
									</td>
								</tr>
								<tr>
									<th class="red">応募資格</th>
									<td><?php echo $qualification_requirements;?></td>
								</tr>
								<tr>
									<th class="red">勤務地</th>
									<td><?php echo $work_location;?></td>
								</tr>
								<tr>
									<th class="red">備考</th>
									<td><span class="remark poppins"><?php echo $remarks;?></span></td>
								</tr>
								<tr>
									<th class="red">勤務時間</th>
									<td><?php echo $working_hours;?></td>
								</tr>
								<tr>
									<th class="red">休日・休暇</th>
									<td><?php echo $holidays;?></td>
								</tr>
								<tr>
									<th class="red">給与</th>
									<td><?php echo $salary;?></td>
								</tr>
								<tr>
									<th class="red">待遇</th>
									<td><?php echo $treatment;?></td>
								</tr>
							</table>
						</div>
					</div>
				</div><!-- .detail -->
				<p><a href="<?php echo home_url('entry/?code='.$code_recruit); ?>" class="btn red"><span class="poppins">ENTRY</span><span class="arrow">&nbsp;</span></a></p>

				<?php } ?>
			<?php } ?>
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
