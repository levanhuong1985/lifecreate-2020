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
				</div><!-- contact-wrap -->
			</div><!-- .container -->
		</section><!-- .sec-contact -->
		<ul class="list-guide">
		<ul class="list-guide">
			<li><a href="<?php echo home_url('recruit/information/?s_job=6#type-recruit'); ?>"><img src="<?php echo home_url('imgs/common/img_guide_01.jpg'); ?>" alt="新卒採用募集要項" class="imgfull"><span>新卒採用募集要項</span></a></li>
			<li><a href="<?php echo home_url('recruit/information/?s_job=7#type-recruit'); ?>"><img src="<?php echo home_url('imgs/common/img_guide_02.jpg'); ?>" alt="中途採用募集要項" class="imgfull"><span>中途採用募集要項</span></a></li>
			<li><a href="<?php echo home_url('recruit/information/?s_job=8#type-recruit'); ?>"><img src="<?php echo home_url('imgs/common/img_guide_03.jpg'); ?>" alt="アルバイト・パート週末ワーカー募集要項" class="imgfull"><span>アルバイト・パート<br>週末ワーカー<br class="sp-only">募集要項</span></a></li>
		</ul>
	</main><!-- #contents -->

	<?php include("inc/footer.php");?>

	<script src="<?php echo home_url('js/jquery-3.5.1.min.js'); ?>"></script>
	<script src="<?php echo home_url('js/jquery.matchHeight-min.js'); ?>"></script>
	<script src="<?php echo home_url('js/script.js'); ?>"></script>
	
	<script type='text/javascript' src='https://ajaxzip3.github.io/ajaxzip3.js?ver=1'></script>

	<?php
		if(isset($_GET["code"])) {
			$recruit_code = $_GET["code"];
			echo "<script> $('input[name=recruit_code]').val('".$recruit_code."');</script>";
		}
	?>
  <script>
    /*zipcode*/       
         $(".zipcode").on('change',function(){
			AjaxZip3.zip2addr(this,'','address01','address02');
          });
          $( ".wpforms-container form .btn-submit").click(function() {	
			 
			var ck_email = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
			var ck_tel1 = /^[0-9]+$/;
			var ck_tel2 = /^(\([0-9]{2,3}\) |[0-9]{2,5}-)[0-9]{2,5}-[0-9]{2,4}/;
			var ck_tel3 = /^[\+]?[(]?[0-9]{1,5}[)]?[-\s\.]?[0-9]{1,5}[-\s\.]?[0-9]{4,9}$/;
			var ck_hiragana = /^([ぁ-ん]+)$/;
			
			var isRequired = 0;
			
			var myArrayMsg = [];
			myArrayMsg["name"]="お名前 は必ずご入力ください。";
			myArrayMsg["kana"]="お名前(フリガナ) は必ずご入力ください。";
			myArrayMsg["sex"]="性別 は必ずご入力ください。";
			myArrayMsg["birthday"]="生年月日 は必ずご入力ください。";
			myArrayMsg["academic"]="学　歴 は必ずご入力ください。";
			myArrayMsg["history"]="職　歴 は必ずご入力ください。";
			myArrayMsg["motivation"]="志望動機 は必ずご入力ください。";
			myArrayMsg["store"]="勤務希望店舗 は必ずご入力ください。";
			
			myArrayMsg["lastname"]="お名前 は必ずご入力ください。";
			myArrayMsg["firstname"]="ふりがな は必ずご入力ください。";
			myArrayMsg["phone"]="お電話番号 は必ずご入力ください。";
			myArrayMsg["email"]="メールアドレス は必ずご入力ください。";			
			myArrayMsg["re_email"]="メールアドレス確認 は必ずご入力ください。";
			myArrayMsg["zipcode"]="郵便番号 は必ずご入力ください。";
            myArrayMsg["stage"]="住所 は必ずご入力ください。";	
			myArrayMsg["address01"]="住所 は必ずご入力ください。";			
			myArrayMsg["message"]="お問い合わせ内容 は必ずご入力ください。";			
			
      //エラーの初期化
      //$("span.error").remove();
			$("div.err_box").remove();
			$(".wpforms-container form").removeClass("error_input");
            $(".wpforms-container form .requiredf").each(function () {
				//必須項目のチェック
				$(this).filter(".requiredf").each(function () {
					
					if($(this).is(':enabled'))
					{	
						if ($(this).val() == "") {
							
							var nameinput = $(this).attr("name");
							var msg = "必ずご入力ください";
							if(myArrayMsg[nameinput] && typeof myArrayMsg[nameinput] !== 'undefined')
							{
								msg = myArrayMsg[nameinput];
							}
					
							$(this).addClass("error_input");
							$(this).parent().append("<div class='err_box'><span style='color:#C00;font-weight:bold'>"+msg+"</span></div>");
						} else
						{						
							
							
							$(this).filter(".ck_hiragana").each(function () {
								var value_text = $(this).val();
								var result = value_text.replace(/　/g, "");	
								result = result.replace(/ /g, "");								
								if (!ck_hiragana.test(result)) {
									$(this).addClass("error_input");
									$(this).parent().append("<div class='err_box'><span style='color:#C00;font-weight:bold'>ひらがなで入力してください。</span></div>")
									isRequired = 1;
								}
							});	
							
							$(this).filter(".email").each(function () {
								if (!ck_email.test($(this).val())) {
									$(this).addClass("error_input");
									$(this).parent().append("<div class='err_box'><span style='color:#C00;font-weight:bold'>メール形式に誤りがあります。</span></div>")
									isRequired = 1;
								}
              });	
              
              jQuery(this).filter(".re_email").each(function () {
                if (jQuery(this).val()!=jQuery(".email").val()) {
                    jQuery(this).addClass("error_input");
                    $(this).parent().append("<div class='err_box'><span style='color:#C00;font-weight:bold'>Eメール·は違いました。</span></div>")
                    isRequired = 0;
                }
            });
							
							
							$(this).filter(".tel").each(function(){
								  if (!ck_tel3.test($(this).val())) {
									   $(this).addClass("error_input");
									   $(this).parent().append("<div class='err_box'><p style='color:#C00;font-weight:bold'>電話番号の形は違います。</p></div>")
									   isRequired = 1;
								  }
							});

						}
					}
				});
			});

		   
		   var brand = $(":input[name='sex']:checked").length;
			if(brand == 0)
			{
			$(":input[name='sex']").addClass("error_input");
				$("#box_sex").prepend("<div class='err_box'><p style='color:#C00;font-weight:bold'>性別されておりません。</p></div>");
				isRequired = 0; 
			}

			var store = $(":input[name='store']:checked").length;
			if(store == 0)
			{
			$(":input[name='store']").addClass("error_input");
				$("#box_store").prepend("<div class='err_box'><p style='color:#C00;font-weight:bold'>勤務希望店舗されておりません。</p></div>");
				isRequired = 0; 
			}

			
			
		var chk_agree = $("input.chk_agree:checked").length;
		if(chk_agree == 0)
			{
				$(":input[class='chk_agree']").addClass("error_input");
				$("#box_agree").prepend("<div class='err_box'><p style='color:#C00;font-weight:bold'>「プライバシーポリシー」に同意されておりません。</p></div>");
				isRequired = 0; 
		}
			
			
			//エラーの際の処理
			var numItems_err_box = $('div.err_box').length;
			if (numItems_err_box > 0) {				
				$('html,body').animate({scrollTop: $("div.err_box:first").offset().top - 250}, 'slow');
				return false;
			}       
			
			
			if (!isRequired)
			{
				return true;
				e.preventDefault();
			} else
			{
				return false;
				e.preventDefault();
			}
		});	

</script>

	<?php wp_footer(); ?>
</body>
</html>