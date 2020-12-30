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
<link rel="stylesheet" href="css/normalize.css" media="all">
<link rel="stylesheet" href="css/style.css" media="all">
<link rel="stylesheet" href="css/top.css" media="all">
<link rel="index contents" href="/" title="ホーム">
<?php wp_head(); ?> 
</head>
<body>
<?php include ("inc/header.php") ?>

	<div id="keyv">
		<img src="imgs/top/keyv.jpg" alt="HUMAN LIFE SUPPORT COMPANY" class="pc-only">
		<img src="imgs/top/keyv_sp.jpg" alt="HUMAN LIFE SUPPORT COMPANY" class="sp-only">
		<div class="ttl"><img src="imgs/top/txt_keyv.svg" alt="HUMAN LIFE SUPPORT COMPANY"></div>
		<div class="scroll pc-only"><img src="imgs/top/scroll.png" alt="SCROLL"></div>
	</div><!-- #keyv -->

	<main id="contents">
		<section class="sec-about">
			<div class="container">
				<h2 class="headline01 fadeup"><span class="en poppins">ABOUT US</span><span class="jp">ライフクリエイトを知る</span></h2>
				<p class="txt-slogan noto fadeup">"人の笑顔の先にある自分の笑顔"<br>そんな想いを共感できる仲間と<br class="sp-only">一緒に成長してきたい！</p>
			</div><!-- .container -->
			<div class="target">
				<figure class="img fadeup">
					<img src="imgs/top/img_about_01.jpg" alt="日本一の御用聞き会社を目指す！" class="pc-only">
					<img src="imgs/top/img_about_01_sp.jpg" alt="日本一の御用聞き会社を目指す！" class="sp-only">
				</figure>
				<div class="info fadeup">
					<h3 class="ttl noto">日本一の御用聞き会社を目指す！</h3>
					<p class="txt">少子高齢化になっている現代社会において、どこに何を頼んでいいかわからない皆様が弊社に頼んでいただければ全て解決してあげられる(地域や社会に必要とされる)会社でありたいと思っています。<br>
					弊社では作業のなんでも屋の便利屋さんと、物のなんでも屋のリサイクルショップを融合したビジネスを『御用聞きビジネス』 ヒューマンライフサポートカンパニーと言っています。<br>この『御用聞きビジネス』で日本一を目指します！</p>
					<p><a href="about/" class="btn red"><span>経営ビジョンはこちら</span><span class="arrow">&nbsp;</span></a></p>
				</div>
			</div><!-- .target -->
			<div class="philosophy">
				<div class="container">
					<ul class="list-philosophy">
						<li class="fadeup">
							<h3 class="ttl01"><span class="jp">基本理念</span><span class="en poppins">BASIC PHILOSOPHY</span></h3>
							<h4 class="ttl02 noto">経営を通じて縁ある全ての人を<br class="sp-only">幸せにする</h4>
							<p class="txt">仕事の中で、お客様、従業員、お取引企業、トリプルWINの関係を築く。<br>
							各自が他人に喜んでもらうこと（幸せになってもらうこと）を考えて行動することで、物心共に豊かにする。<br>
							結果、私たちも物心共に豊かになり、幸せになる。<br>
							この考え方を迷ったときの指針とする。</p>
						</li>
						<li class="fadeup">
							<h3 class="ttl01"><span class="jp">経営理念</span><span class="en poppins">MANAGEMENT PHILOSOPHY</span></h3>
							<h4 class="ttl02 noto">和を紡ぐ</h4>
							<p class="txt">我々はスタッフ同士の繋がりを大切にし、和を以って仕事に取組み和を以って助け合う。<br>
							その行動を通じて問題を解決し、人間性を高め、顧客第一主義を掲げ、社会に貢献していく。</p>
						</li>
						<li class="fadeup">
							<h3 class="ttl01"><span class="jp">企業理念</span><span class="en poppins">CORPORATE PHILOSOPHY</span></h3>
							<p class="txt corporate noto">わが社は便利業、リユース業を統合した、高品質なサービスを通して、<br class="pc-only">
							世の中の全ての「困った」を解決する。<br>
							そして環境と地域に貢献する事で社会に必要とされるプロの御用聞き会社を目指す。</p>
						</li>
					</ul>
				</div><!-- .container -->
			</div><!-- .philosophy -->
			<div class="greeting">
				<div class="container">
					<h3 class="ttl fadeup"><span class="jp">代表あいさつ</span><span class="en poppins">GREETINGS FROM THE PRESIDENT</span></h3>
					<div class="video fadeup">
						<?php echo $youtube;?>
					</div>
				</div><!-- .container -->
			</div><!-- .greeting -->
		</section><!-- .sec-about -->

		<section class="sec-business">
			<div class="container">
				<h2 class="headline01 fadeup"><span class="en poppins">BUSINESS</span><span class="jp">仕事を知る</span></h2>
				<ul class="list-business">
					<li class="fadeup">
						<figure class="img"><img src="imgs/common/img_business_01.jpg" alt="エコプラス"></figure>
						<div class="info matchHeight">
							<p class="ttl">エコプラス</p>
							<p class="txt">ブランド品・貴金属を<br class="sp-only">中心とした<br>総合リサイクルショップ事業</p>
						</div>
						<p><a href="business/#anc01" class="btn white poppins"><span>READ MORE</span><span class="arrow">&nbsp;</span></a></p>
					</li>
					<li class="fadeup">
						<figure class="img"><img src="imgs/common/img_business_02.jpg" alt="ハンズクラフト"></figure>
						<div class="info matchHeight">
							<p class="ttl">ハンズクラフト</p>
							<p class="txt">工具・家電を中心とした<br>総合リサイクルショップ事業</p>
						</div>
						<p><a href="business/#anc02" class="btn white poppins"><span>READ MORE</span><span class="arrow">&nbsp;</span></a></p>
					</li>
					<li class="fadeup">
						<figure class="img"><img src="imgs/common/img_business_03.jpg" alt="株式会社ハンズクラフトライフサポート事業部"></figure>
						<div class="info matchHeight">
							<p class="ttl">株式会社ハンズクラフト<br>ライフサポート事業部</p>
						</div>
						<p><a href="business/#anc03" class="btn white poppins"><span>READ MORE</span><span class="arrow">&nbsp;</span></a></p>
					</li>
					<li class="fadeup">
						<figure class="img"><img src="imgs/common/img_business_04.jpg" alt="工具研修生募集"></figure>
						<div class="info matchHeight">
							<p class="ttl">工具研修生募集</p>
							<p class="txt">工具の取扱・メンテナンスの<br>技能習得から販売・査定に<br class="sp-only">関する<br class="pc-only">ノウハウ教えます！</p>
						</div>
						<p><a href="training/" class="btn white poppins"><span>READ MORE</span><span class="arrow">&nbsp;</span></a></p>
					</li>
				</ul>
				<p class="fadeup"><a href="business/" class="btn red"><span>事業紹介はこちら</span><span class="arrow">&nbsp;</span></a></p>
			</div><!-- .container -->
		</section><!-- .sec-business -->

		<section class="sec-recruit">
			<div class="employeer">
				<div class="container">
					<h2 class="headline01 fadeup"><span class="en poppins">RECRUIT</span><span class="jp">採用情報を知る</span></h2>
					<div class="employeer-inner">
						<div class="info fadeup">
							<h3 class="ttl">求める人材</h3>
							<p class="txt noto">一緒に働きたいのは人を喜ばせ、<br>人が喜んでいる姿を見ることで<br class="sp-only">自分が喜べる人！</p>
							<p><a href="recruit/" class="btn red"><span>ライフクリエイトが求める人物像はこちら</span><span class="arrow">&nbsp;</span></a></p>
						</div>
						<div class="director">
							<figure class="fadeup"><img src="imgs/common/img_director.png" alt="代表取締役有冨　修"></figure>
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
			<div class="recruitment">
				<div class="container">
					<h3 class="ttl fadeup">募集職種</h3>
					<ul class="list-buttons fadeup">
						<li><a href="recruit/information.html" class="btn02 black"><span>幹部候補</span><span class="click poppins">CLICK</span></a></li>
						<li><a href="recruit/information.html" class="btn02 black"><span>店長・SV(スーパーバイザー)候補</span><span class="click poppins">CLICK</span></a></li>
						<li><a href="recruit/information.html" class="btn02 black"><span>店舗スタッフ</span><span class="click poppins">CLICK</span></a></li>
						<li><a href="recruit/information.html" class="btn02 black"><span>広報・Web・デザイン</span><span class="click poppins">CLICK</span></a></li>
						<li><a href="recruit/information.html" class="btn02 black"><span>通販管理・データ入力・事務</span><span class="click poppins">CLICK</span></a></li>
						<li><a href="recruit/information.html" class="btn02 black"><span>輸出事業サポート</span><span class="click poppins">CLICK</span></a></li>
						<li><a href="recruit/information.html" class="btn02 black"><span>総務・人事・経理</span><span class="click poppins">CLICK</span></a></li>
						<li><a href="recruit/information.html" class="btn02 black"><span>家電・工具の修理スタッフ</span><span class="click poppins">CLICK</span></a></li>
						<li><a href="recruit/information.html" class="btn02 black"><span>ライフサポート　作業スタッフ</span><span class="click poppins">CLICK</span></a></li>
					</ul>
					<ul class="list-banners">
						<li class="fadeup"><img src="imgs/top/bnr_01.jpg" alt="募集職種"></li>
						<li class="fadeup"><img src="imgs/top/bnr_02.jpg" alt="募集職種"></li>
					</ul>
				</div><!-- .container -->
			</div><!-- .recruitment -->
		</section><!-- .sec-recruit -->

		<section class="sec-interview">
			<div class="main-interview">
				<figure class="fadeup"><img src="imgs/top/main_interview.jpg" alt="INTERVIEW インタビュー" class="imgfull"></figure>
			</div>
			<div class="container">
				<div class="head-interview fadeup">
					<h2 class="headline01"><span class="en poppins">INTERVIEW</span><span class="jp">インタビュー</span></h2>
					<p class="center">仕事もプライベートも充実した日々を過ごす、<br class="sp-only">ライフクリエイトの社員インタビュー<br class="sp-only">がご覧いただけます。</p>
				</div>
				<ul class="list-interviewers">
					<li class="fadeup">
						<figure class="pos-rel">
							<img src="imgs/top/img_interview_01.jpg" alt="ハンズクラフトマネージャー 中村 鎌人" class="imgfull">
							<div class="box">
								<span class="position">ハンズクラフトマネージャー</span>
								<span class="name">中村 鎌人</span>
							</div>
						</figure>
						<div class="info">
							<p class="ttl matchHeight"><span>店長という仕事の面白さ</span></p>
							<p><a href="interview/#anc01" class="btn white poppins"><span>READ MORE</span><span class="arrow">&nbsp;</span></a></p>
						</div>
					</li>
					<li class="fadeup">
						<figure class="pos-rel">
							<img src="imgs/top/img_interview_02.jpg" alt="ハンズクラフトライフサポート主任 香川 洋介" class="imgfull">
							<div class="box">
								<span class="position">ハンズクラフトライフサポート主任</span>
								<span class="name">香川 洋介</span>
							</div>
						</figure>
						<div class="info">
							<p class="ttl matchHeight"><span>『何でも自分でやろう』という<br>考えが持てる</span></p>
							<p><a href="interview/#anc02" class="btn white poppins"><span>READ MORE</span><span class="arrow">&nbsp;</span></a></p>
						</div>
					</li>
					<li class="fadeup">
						<figure class="pos-rel">
							<img src="imgs/top/img_interview_03.jpg" alt="ライフクリエイト人事部副主任 白川 智巳" class="imgfull">
							<div class="box">
								<span class="position">ライフクリエイト人事部副主任</span>
								<span class="name">白川 智巳</span>
							</div>
						</figure>
						<div class="info">
							<p class="ttl matchHeight"><span>辛いときも人間関係で救われる</span></p>
							<p><a href="interview/#anc03" class="btn white poppins"><span>READ MORE</span><span class="arrow">&nbsp;</span></a></p>
						</div>
					</li>
				</ul>
				<p class="fadeup"><a href="interview/" class="btn red"><span>先輩インタビューはこちら</span><span class="arrow">&nbsp;</span></a></p>
			</div><!-- .container -->
		</section><!-- .sec-interview -->

		<section class="sec-news">
			<div class="container">
				<h2 class="headline01 fadeup"><span class="en poppins">NEWS</span><span class="jp">お知らせ</span></h2>
				<ul class="tabs fadeup">
					<li class="active"><a href="#tab01">すべて</a></li>
					<?php
					$args = array('hide_empty' => 0, 'parent' => 0);
					$terms = get_terms('category_news', $args);
					if (!empty($terms) && !is_wp_error($terms)) {
						$i=2;
						foreach ($terms as $term) {						
							
							$term_link = get_term_link( $term );							
							$term_id = $term->term_id;
						?>
						<li><a href="#tab0<?php echo $i;?>"><?php echo $term->name;?></a></li>
						
						<?php  $i++;
							} ?>
					<?php } ?>
					
				</ul>
				<div class="tab-contents fadeup">
					<div class="tab-box" id="tab01">
						<ul class="list-news">
							<?php 
							    $paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );
								$args = array( 				
                                    'post_type' => 'news',
                                    'posts_per_page' => 1,
                                    'paged' => 1,
                                    'post_status'   => 'publish',				
                                    'orderby' => 'date',
                                    'order' => 'DESC'
                                );
                                    
                                $the_query = new WP_Query( $args );
                                if ( $the_query->have_posts() ) {						
                                    while ( $the_query->have_posts() ) {
                                        $the_query->the_post();
                                        $date_post = date("Y.m.d",strtotime($post->post_date));
                                        $url_img = get_the_post_thumbnail_url($post->ID,'thumb-news');
                                        $thePostUrl=get_the_permalink();
                                        $slug = get_post_field( 'post_name', $post->ID );
                                        $post_categories = get_the_terms($post->ID,'category_news');
                                        
							?>
							<li>
								<a href="<?php the_permalink(); ?>">
								<?php if($url_img) { ?>
									<figure class="img"><img src="<?php echo $url_img;?>" alt="" class="imgfull"></figure>
								<?php } ?>
									<div class="info">
										<span class="date"><?php echo $date_post;?></span>
										<span class="ttl bold"><?php echo $post->post_title; ?></span>
									</div>
								</a>
							</li>
                            <?php 
                                    } 
                                    wp_reset_postdata();
                                }
                                ?>   
					</ul>
					</div><!-- #tab01 -->
                    <?php
                    if (!empty($terms) && !is_wp_error($terms)) {
						$i=2;
						foreach ($terms as $term) {						
							
							$term_link = get_term_link( $term );							
							$term_id = $term->term_id;
						?>
						
						<div class="tab-box" id="tab0<?php echo $i;?>">
						<ul class="list-news">
								<?php 
									/* get list by category */
									$args = array( 				
										'post_type' => 'news',					
										'post_status'   => 'publish',				
										'orderby' => 'date',
										'posts_per_page' => 4,
										'order' => 'DESC',
										'tax_query' => array(
											array(
												'taxonomy' => 'category_news',
												'field' => 'name',
												'terms' => $term->name
											)
										)				
									);	
									
									$the_query = new WP_Query( $args );               			
									if ( $the_query->have_posts() ) {						
										while ( $the_query->have_posts() ) {
											$the_query->the_post();
											$date_post = date("Y.m.d",strtotime($post->post_date));					
											$thePostUrl=get_the_permalink();									
											$slug    = get_post_field( 'post_name', $post->ID );
											$title   = $post->post_title;
											$content = $post->post_content;	
											$url_img = get_the_post_thumbnail_url($post->ID,'thumb-news');
								?>
							<li>
								<a href="<?php echo $thePostUrl;?>">
								<?php if($url_img) { ?>
									<figure class="img"><img src="<?php echo $url_img;?>" alt="" class="imgfull"></figure>
								<?php } ?>
									<div class="info">
										<span class="date"><?php echo $date_post;?></span>
										<span class="ttl bold"><?php echo $title;?></span>
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
					</div><!-- #tab02 -->
						
						<?php  $i++;
						} /* end foreach */?>
					<?php } /* end if */?>
			</div><!-- .tab-contents -->
				<p class="fadeup"><a href="news/" class="btn red"><span class="poppins">READ MORE</span><span class="arrow">&nbsp;</span></a></p>
				
			</div><!-- .container -->
		</section><!-- .sec-news -->
	</main><!-- #contents -->

	<?php include ("inc/footer.php") ?>

	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/jquery.matchHeight-min.js"></script>
	<script src="js/script.js"></script>
    <script>
		$(window).on('resize load', function() {
			var $this = $(this);
			var $winW = $this.width();
			var $containerW = $('.container').width();
			var $margin = ( $winW - $containerW ) / 2 ;
			$('.target').css({
				'padding-right': $margin
			});
		});
	</script>
</body>
</html>