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
			<h2 class="fadeup"><span class="en poppins">TOOL TRAINING</span><span class="jp">工具研修生募集</span></h2>
		</div>
		<figure><img src="<?php echo home_url('imgs/training/img_main.jpg'); ?>" alt="TOOL TRAINING 工具研修生募集" class="imgfull"></figure>
	</section><!-- .main-page -->

	<main id="contents">
		<section class="sec-contact">
			<div class="container">
				
			<div class="contact-block wpforms-container">
					
						<?php			
							if ( have_posts() ) {
								while ( have_posts() ) { 
								the_post();
								the_content();
								}
							}
							?>
			</div>
			</div><!-- .container -->
		</section><!-- .sec-contact -->
	</main><!-- #contents -->

	<?php include("inc/footer.php");?>

<script src="<?php echo home_url('js/jquery-3.5.1.min.js'); ?>"></script>
<script src="<?php echo home_url('js/jquery.matchHeight-min.js'); ?>"></script>
<script src="<?php echo home_url('js/script.js'); ?>"></script>



<?php wp_footer(); ?>
</body>
</html>