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
<link rel="stylesheet" href="<?php echo home_url('css/normalize.css'); ?>" media="all">
<link rel="stylesheet" href="<?php echo home_url('css/style.css'); ?>" media="all">
<link rel="index contents" href="/" title="ホーム">
<?php wp_head(); ?>
</head>
<body>
<?php include('inc/header.php'); ?>
    

	<section class="main-page">
		<div class="main-ttl">
			<h2 class="fadeup"><span class="en poppins">ENTRY</span><span class="jp">エントリー</span></h2>
		</div>
		<figure><img src="<?php echo home_url('imgs/entry/img_main.jpg'); ?>" alt="ENTRY エントリー" class="imgfull"></figure>
	</section><!-- .main-page -->

	<main id="contents">
		<section class="sec-contact">
			<div class="container wpforms-container">
            <div class="contact-block">
              <?php			
				if ( have_posts() ) {
					while ( have_posts() ) { 
					the_post();
					the_content();
					}
				}
                ?>
                </div><!-- contact-wrap -->
			</div><!-- .container -->
		</section><!-- .sec-contact -->
		<ul class="list-guide">
			<li><a href="<?php echo home_url('recruit/detail.html'); ?>"><img src="<?php echo home_url('imgs/common/img_guide_01.jpg'); ?>" alt="新卒採用募集要項" class="imgfull"><span>新卒採用募集要項</span></a></li>
			<li><a href="<?php echo home_url('recruit/detail.html'); ?>"><img src="<?php echo home_url('imgs/common/img_guide_02.jpg'); ?>" alt="中途採用募集要項" class="imgfull"><span>中途採用募集要項</span></a></li>
			<li><a href="<?php echo home_url('recruit/detail.html'); ?>"><img src="<?php echo home_url('imgs/common/img_guide_03.jpg'); ?>" alt="アルバイト・パート週末ワーカー募集要項" class="imgfull"><span>アルバイト・パート<br>週末ワーカー<br class="sp-only">募集要項</span></a></li>
		</ul>
	</main><!-- #contents -->

	<?php include("inc/footer.php");?>

	<script src="<?php echo home_url('js/jquery-3.5.1.min.js'); ?>"></script>
	<script src="<?php echo home_url('js/jquery.matchHeight-min.js'); ?>"></script>
	<script src="<?php echo home_url('js/script.js'); ?>"></script>
	
	<?php wp_footer(); ?>
</body>
</html>