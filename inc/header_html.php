<?php $home_url = "http://lifecreate.local"; ?>

<header id="header">
		<h1 id="logo"><a href="<?php echo $home_url; ?>/"><img src="<?php echo $home_url; ?>/imgs/common/logo.svg" alt="株式会社ライフクリエイト"></a></h1>
		<nav id="gnav" class="pc-only">
			<ul>
				<li><a href="#sub-gnav-about" class="nav-item"><span class="en poppins">ABOUT US</span><span class="jp">ライフクリエイトを知る</span></a></li>
				<li><a href="<?php echo $home_url; ?>/business/" class="nav-item"><span class="en poppins">BUSINESS</span><span class="jp">仕事を知る</span></a></li>
				<li><a href="#sub-gnav-recruit" class="nav-item"><span class="en poppins">RECRUIT</span><span class="jp">採用情報を知る</span></a></li>
				<li><a href="<?php echo $home_url; ?>/interview/" class="nav-item"><span class="en poppins">INTERVIEW</span><span class="jp">先輩インタビュー</span></a></li>
			</ul>
			<div class="btn-entry"><a href="<?php echo $home_url; ?>/recruit/information" class="nav-item"><span class="en poppins">ENTRY</span><span class="jp">エントリー</span></a></div>
			<div class="sub-gnav" id="sub-gnav-about">
				<div class="sub-gnav-ttl">
					<p><span class="en poppins">ABOUT US</span><span class="jp">ライフクリエイトを知る</span></p>
				</div>
				<div class="sub-gnav-items">
					<ul>
						<li><a href="<?php echo $home_url; ?>/about/index.html" class="sub-nav-item">経営ビジョン</a></li>
						<li><a href="<?php echo $home_url; ?>/about/message.html" class="sub-nav-item">代表メッセージ</a></li>
						<li><a href="<?php echo $home_url; ?>/about/company.html" class="sub-nav-item">会社概要・沿革</a></li>
					</ul>
				</div>
			</div>
			<div class="sub-gnav" id="sub-gnav-recruit">
				<div class="sub-gnav-ttl">
					<p><span class="en poppins">RECRUIT</span><span class="jp">採用情報を知る</span></p>
				</div>
				<div class="sub-gnav-items">
					<ul>
						<li><a href="<?php echo $home_url; ?>/recruit/" class="sub-nav-item">求める人物像</a></li>
					</ul>
					<p class="sub-ttl">求人情報一覧</p>
					<ul>
						<li><a href="<?php echo $home_url; ?>/recruit/information/?s_job=6#type-recruit" class="sub-nav-item">新卒採用</a></li>
						<li><a href="<?php echo $home_url; ?>/recruit/information/?s_job=7#type-recruit" class="sub-nav-item">中途採用</a></li>
						<li><a href="<?php echo $home_url; ?>/recruit/information/?s_job=8#type-recruit" class="sub-nav-item">アルバイト・パート</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div id="open-menu" class="sp-only">
			<span>-</span>
		</div>
		<nav id="sp-nav" class="sp-only">
			<div class="sp-nav-inner">
				<ul class="main-nav">
					<li>
						<p><a href="javascript:void(0);" class="sp-nav-parent has-sub poppins">ABOUT</a></p>
						<ul class="sp-nav-sub">
							<li><a href="<?php echo $home_url; ?>/about/" class="sp-nav-item">経営ビジョン</a></li>
							<li><a href="<?php echo $home_url; ?>/about/message.html" class="sp-nav-item">代表メッセージ</a></li>
							<li><a href="<?php echo $home_url; ?>/about/company.html" class="sp-nav-item">会社概要、沿革</a></li>
						</ul>
					</li>
					<li>
						<p><a href="javascript:void(0);" class="sp-nav-parent has-sub poppins">BUSINESS</a></p>
						<ul class="sp-nav-sub">
							<li><a href="<?php echo $home_url; ?>/business/" class="sp-nav-item">事業紹介</a></li>
							<li><a href="<?php echo $home_url; ?>/business/future.html" class="sp-nav-item">これからのライフクリエイト</a></li>
						</ul>
					</li>
					<li>
						<p><a href="<?php echo $home_url; ?>/interview/" class="sp-nav-parent poppins">INTERVIEW</a></p>
					</li>
					<li>
						<p><a href="javascript:void(0);" class="sp-nav-parent has-sub poppins">RECRUIT</a></p>
						<ul class="sp-nav-sub">
							<li><a href="<?php echo $home_url; ?>/recruit/" class="sp-nav-item">求める人物像</a></li>
							<li><a href="<?php echo $home_url; ?>/recruit/information" class="sp-nav-item">求人情報一覧</a></li>
							<li><a href="<?php echo $home_url; ?>/entry/" class="sp-nav-item">エントリーフォーム</a></li>
						</ul>
					</li>
					<li>
						<p><a href="<?php echo $home_url; ?>/news/" class="sp-nav-parent poppins">NEWS</a></p>
					</li>
				</ul>
				<ul class="other-nav">
					<li><a href="<?php echo $home_url; ?>/contact/" class="sp-nav-other">お問い合せ</a></li>
					<li><a href="<?php echo $home_url; ?>/privacy/" class="sp-nav-other">個人情報保護方針</a></li>
					<li><a href="<?php echo $home_url; ?>/training/" class="sp-nav-other">工具研修声募集</a></li>
				</ul>
				<p class="entry"><a href="<?php echo $home_url; ?>/recruit/information"><span class="en poppins">ENTRY</span><span class="jp">エントリー</span></a></p>
				<p class="close"><a href="javascript:void(0);" id="close-menu" class="poppins">CLOSE</a></p>
			</div>
		</nav>
	</header><!-- #header -->