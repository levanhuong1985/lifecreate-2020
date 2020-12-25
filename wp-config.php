<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'lifecreatekc_wprec' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '  EEFTF_ZKh^KR)<_YcMhs^dAL#{W++dwyZcK5=sCKjDAUnm+qHw|:e1L{)uC~N8');
define('SECURE_AUTH_KEY',  'p](9|Frx;K)88crzvwS~f8k4L>![kgy){pn|P2=f+>v5Y)hhHv6c&aeBDPWaQOCl');
define('LOGGED_IN_KEY',    'kiZWN:XS&XSo0R-|lb+aT4j]hMoSdK@StI8+rt{7:v>9Dk+yZUTcM7OT, rgjFD-');
define('NONCE_KEY',        ':9]drw]Aw}4;5WZ*sFH%4)T$-bI,]mM91OBGM&D|#DTb3{aA$x& eaB-hjsfAUL>');
define('AUTH_SALT',        '7lTqtD+Wcu `(=|/pmKfihA)A*Je8Xl-oQ^7jRgg|+<B&|X3xeYEg|C_>*+Q;-8-');
define('SECURE_AUTH_SALT', 'wWi_}m7V>GezM&14bc?Lp$a)D2W[.U<VtE0hZ}q*>6U-98*yRwwbanXzC]C|F3?s');
define('LOGGED_IN_SALT',   '=!q$ 4}h2n*ICBe}V%W**j`?|_VO;cjB]JV}v%P$wt%!J`:>q?qgCo%g03[?A[`0');
define('NONCE_SALT',       'sg{]J>LM!MtJ|*E/:?+/!jt N?dz3%K1?Ii=lh~AXPV_>xA|;Nz-pyw=a*{K(w?4');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'lkc_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
