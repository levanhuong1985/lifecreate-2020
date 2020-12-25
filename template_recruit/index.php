<?php 
if ( ! defined( "ABSPATH" ) ) exit; // Exit if accessed directly

$config_top = get_page_by_path('config-top');
/*print_r($config_top);*/
$youtube = get_field("youtube_home",$config_top->ID);
$youtube_recruit = get_field("youtube_recruit",$config_top->ID);
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
		<figure><img src="<?php echo home_url('imgs/recruit/img_main.jpg'); ?>" alt="RECRUIT 採用情報を知る" class="imgfull"></figure>
	</section><!-- .main-page -->

	<main id="contents">
		<section class="sec-person">
			<div class="container">
				<h3 class="headline01 fadeup"><span class="en poppins">PERSON</span><span class="jp">求める人物像</span></h3>
				<p class="center fadeup">私たちが一緒に働きたい人材は<br class="sp-only">3つのちからを持った人です。<br>
				知識やスキルでなく、人としての人間力の<br class="sp-only">高い人たちと一緒に仕事をしたいと考えています。</p>
				<ol class="list-persons">
					<li>
						<div class="info fadeup">
							<h3 class="ttl noto"><span class="numb poppins">01</span>仲間と喜びを分かち会える人</h3>
							<p>お客様に喜ばれるにはまず社内の仲間に喜んでもらうことが第一歩。<br>
							社内の仲間にどうすれば喜ばれるか考え、行動し、人が喜んでいる姿を見ることで自分が喜べる人。</p>
						</div>
						<figure class="img fadeup"><img src="../imgs/recruit/img_person_01.jpg" alt="仲間と喜びを分かち会える人" class="imgfull"></figure>
					</li>
					<li>
						<div class="info fadeup">
							<h3 class="ttl noto"><span class="numb poppins">02</span>気づきや感謝の気持ちを持てる人</h3>
							<p>ひとは一人では生きていけません。常にだれかに助けられながら生活したり、仕事をしたりしています。周りの仲間やお客様に常に感謝する心をもち、「ありがとうございます」という言葉を伝えられる人を求めています。</p>
						</div>
						<figure class="img fadeup"><img src="../imgs/recruit/img_person_02.jpg" alt="気づきや感謝の気持ちを持てる人" class="imgfull"></figure>
					</li>
					<li>
						<div class="info fadeup">
							<h3 class="ttl noto"><span class="numb poppins">03</span>モノを大切にする心を持つ人</h3>
							<p>お客様に喜ばれるにはまず社内の仲間に喜んでもらうことが第一歩。<br>
							社内の仲間にどうすれば喜ばれるか考え、行動し、人が喜んでいる姿を見ることで自分が喜べる人。</p>
						</div>
						<figure class="img fadeup"><img src="../imgs/recruit/img_person_03.jpg" alt="モノを大切にする心を持つ人" class="imgfull"></figure>
					</li>
				</ol>
			</div><!-- .container -->
		</section><!-- .sec-person -->

		<section class="sec-recruit">
			<div class="employeer">
				<div class="container">
					<h3 class="headline01 fadeup"><span class="en poppins">RECRUIT</span><span class="jp">採用情報を知る</span></h3>
					<div class="employeer-inner">
						<div class="info fadeup">
							<h4 class="ttl">求める人材</h4>
							<p class="txt noto">一緒に働きたいのは人を喜ばせ、<br>人が喜んでいる姿を見ることで<br class="sp-only">自分が喜べる人！</p>
							<p><a href="../recruit/" class="btn red"><span>ライフクリエイトが求める人物像はこちら</span><span class="arrow">&nbsp;</span></a></p>
						</div>
						<div class="director">
							<figure class="fadeup"><img src="../imgs/common/img_director.png" alt="代表取締役有冨　修"></figure>
							<div class="box fadeup">
								<p>株式会社ライフクリエイト</p>
								<p>代表取締役<span class="name">有冨　修</span></p>
							</div>
						</div>
					</div>
				</div><!-- .container -->
			</div><!-- .employeer -->
			<div class="recruit-video">
				<div class="container">
					<div class="video fadeup">
						<?php echo $youtube_recruit;?>
					</div>
				</div>
			</div><!-- .recruit-video -->
			<div class="howto">
				<div class="container">
					<div class="howto-item">
						<div class="manager fadeup">
							<figure><img src="../imgs/recruit/img_director_01.jpg" alt="専務 冨田 直人" class="imgfull"></figure>
							<div class="box">専務<br><span class="name">冨田 直人</span></div>
						</div>
						<div class="info fadeup">
							<h3 class="ttl">求める人材はどんな人？</h3>
							<p>ズバリ、「チームプレーを大切にできる人」です。より良いサービスを提供するには、一人よりも二人、二人よりも三人の方が良いはず。お客様に喜んでいただくため、チームで連携し、動くことができる人を求めています。<br>
							良いチームを作るためには、人に対する気遣いや心配りが大切です。お客様に対しても、どんな困りごとがあるのか？、何を求められているのか？と気持ちをくみ取り、心配りができることが大切になってきます。専門知識などは入社してからでも学ぶことができるので、まずは当社の理念でもある「困った人を助けたい」「問題を解決したい」という想いを持って働くことが大事です。<br>
							当社の事業は不況や緊急時にも必要とされるものなので、コロナ渦でも売り上げを伸ばすことができました。今後も社員一丸となって会社を成長させたいと考えています。成長途中の当社に期待を感じ、一緒に会社の成長を支えてくれる仲間を求めています。ぜひ、一緒に働きましょう！</p>
							<ul class="list-images">
								<li><img src="../imgs/recruit/img_howto_01.jpg" alt="求める人材はどんな人？" class="imgfull"></li>
								<li><img src="../imgs/recruit/img_howto_02.jpg" alt="求める人材はどんな人？" class="imgfull"></li>
							</ul>
						</div>
					</div><!-- .howto-item -->
					<div class="howto-item">
						<div class="manager fadeup">
							<figure><img src="../imgs/recruit/img_director_02.jpg" alt="常務 許田　隆" class="imgfull"></figure>
							<div class="box">常務<br><span class="name">許田　隆</span></div>
						</div>
						<div class="info fadeup">
							<h3 class="ttl">入社を希望する方に<br class="sp-only">伝えたいことは何でしょうか？</h3>
							<p>上記のタイトルにて5～10分程度10のインタビューをさせていただきます。<br>
							インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。インタビュー内容が入ります。</p>
							<ul class="list-images">
								<li><img src="../imgs/recruit/img_howto_03.jpg" alt="入社を希望する方に伝えたいことは何でしょうか？" class="imgfull"></li>
								<li><img src="../imgs/recruit/img_howto_04.jpg" alt="入社を希望する方に伝えたいことは何でしょうか？" class="imgfull"></li>
							</ul>
						</div>
					</div><!-- .howto-item -->
					<p class="pt30"><a href="#" class="btn02 black"><span>求人募集要項</span><span class="click poppins">CLICK</span></a></p>
				</div><!-- .container -->
			</div><!-- .howto -->
		</section><!-- .sec-recruit -->
	</main><!-- #contents -->

	<?php include("inc/footer.php");?>

	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/jquery.matchHeight-min.js"></script>
	<script src="../js/script.js"></script>
</body>
</html>