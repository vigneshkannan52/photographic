<?php
/**
 * The template for displaying singular post-types: posts, pages and user-defined custom post types.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

while ( have_posts() ) :
	the_post();
	?>

<main id="content" <?php post_class( 'site-main' ); ?>>

	<?php if ( apply_filters( 'hello_elementor_page_title', true ) ) : ?>
		<header class="page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
	<?php endif; ?>

	<div class="page-content">
		<?php the_content(); ?>
		<div class="post-tags">
			<?php the_tags( '<span class="tag-links">' . esc_html__( 'Tagged ', 'hello-elementor' ), null, '</span>' ); ?>
		</div>
		<?php wp_link_pages(); ?>
	</div>

	<?php comments_template(); ?>

</main>

	<?php
endwhile;
<!DOCTYPE html>
<!-- saved from url=(0049)https://blocks.templately.com/max-boom-home-page/ -->
<html lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title>Max Boom Home Page – Templately Demos – For Blocks Templates</title><link rel="preload" as="style" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/css"><link rel="stylesheet" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/css" media="all" onload="this.media=&#39;all&#39;"><noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open%20Sans%3ARegular%20400%26amp%3Bamp%3BOpen%20Sans%7CPoppins%7CNunito%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLibre%20Caslon%20Text%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7COpen%20Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap" /></noscript>
<meta name="robots" content="max-image-preview:large">
<link rel="dns-prefetch" href="https://blocks.templately.com/">
<link rel="dns-prefetch" href="https://stats.wp.com/">
<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
<link href="https://fonts.gstatic.com/" crossorigin="" rel="preconnect">
<link rel="alternate" type="application/rss+xml" title="Templately Demos - For Blocks Templates » Feed" href="https://blocks.templately.com/feed/">
<link rel="alternate" type="application/rss+xml" title="Templately Demos - For Blocks Templates » Comments Feed" href="https://blocks.templately.com/comments/feed/">
<style id="wp-emoji-styles-inline-css" type="text/css">

	img.wp-smiley, img.emoji {
		display: inline !important;
		border: none !important;
		box-shadow: none !important;
		height: 1em !important;
		width: 1em !important;
		margin: 0 0.07em !important;
		vertical-align: -0.1em !important;
		background: none !important;
		padding: 0 !important;
	}
</style>
<link rel="stylesheet" id="wp-block-library-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/style.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="embedpress_blocks-cgb-style-css-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/blocks.style.build.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-components-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/style(1).min.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-block-editor-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/style(2).min.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-reusable-blocks-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/style(3).min.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-patterns-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/style(4).min.css" type="text/css" media="all">
<link rel="stylesheet" id="wp-editor-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/style(5).min.css" type="text/css" media="all">
<link rel="stylesheet" id="embedpress_pro-cgb-style-css-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/blocks.style(1).build.css" type="text/css" media="all">
<style id="classic-theme-styles-inline-css" type="text/css">
/*! This file is auto-generated */
.wp-block-button__link{color:#fff;background-color:#32373c;border-radius:9999px;box-shadow:none;text-decoration:none;padding:calc(.667em + 2px) calc(1.333em + 2px);font-size:1.125em}.wp-block-file__button{background:#32373c;color:#fff;text-decoration:none}
</style>
<style id="global-styles-inline-css" type="text/css">
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);}:where(.is-layout-flex){gap: 0.5em;}:where(.is-layout-grid){gap: 0.5em;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
.wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
:where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}
:where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}
.wp-block-pullquote{font-size: 1.5em;line-height: 1.6;}
</style>
<link rel="stylesheet" id="easyjobsowl-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/owl.carousel.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="easyjobs-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/easyjobs-public.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="embedpress-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/embedpress.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="dashicons-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/dashicons.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="bodhi-svgs-attachment-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/svgs-attachment.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="woocommerce-layout-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/woocommerce-layout.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="woocommerce-smallscreen-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)">
<link data-minify="1" rel="stylesheet" id="woocommerce-general-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/woocommerce.css" type="text/css" media="all">
<style id="woocommerce-inline-inline-css" type="text/css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel="stylesheet" id="learndash_quiz_front_css-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/learndash_quiz_front.min.css" type="text/css" media="all">
<link rel="stylesheet" id="jquery-dropdown-css-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/jquery.dropdown.min.css" type="text/css" media="all">
<link rel="stylesheet" id="learndash_lesson_video-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/learndash_lesson_video.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="flexia-theme-style-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/style.css" type="text/css" media="all">

<link data-minify="1" rel="stylesheet" id="learndash-front-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/learndash.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="plyr-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/plyr.css" type="text/css" media="all">
<link rel="stylesheet" id="eb-block-style-22595-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/eb-style-22595.min.css" type="text/css" media="all">
<link rel="stylesheet" id="eb-reusable-block-style-93178-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/eb-reusable-93178.min.css" type="text/css" media="all">
<link rel="stylesheet" id="eb-reusable-block-style-80683-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/eb-reusable-80683.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-frontend-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/frontend.min.css" type="text/css" media="all">
<link rel="stylesheet" id="eael-general-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/general.min.css" type="text/css" media="all">
<script type="text/javascript" id="www-widgetapi-script" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/www-widgetapi.js.download" async=""></script><script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/wp-polyfill-inert.min.js.download" id="wp-polyfill-inert-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/regenerator-runtime.min.js.download" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/wp-polyfill.min.js.download" id="wp-polyfill-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/hooks.min.js.download" id="wp-hooks-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/w.js.download" id="woo-tracks-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/DOMPurify.min.js.download" id="bodhi-dompurify-library-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/jquery.min.js.download" id="jquery-core-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/jquery-migrate.min.js.download" id="jquery-migrate-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/plyr.polyfilled.js.download" id="plyr.polyfilled-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/svgs-inline-min.js.download" id="bodhi_svg_inline-js"></script>
<script type="text/javascript" id="bodhi_svg_inline-js-after">
/* <![CDATA[ */
cssTarget="img.style-svg";ForceInlineSVGActive="false";frontSanitizationEnabled="on";
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/jquery.blockUI.min.js.download" id="jquery-blockui-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/blocks.templately.com\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/add-to-cart.min.js.download" id="wc-add-to-cart-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/js.cookie.min.js.download" id="js-cookie-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/woocommerce.min.js.download" id="woocommerce-js" defer="defer" data-wp-strategy="defer"></script>
<link rel="https://api.w.org/" href="https://blocks.templately.com/wp-json/"><link rel="alternate" type="application/json" href="https://blocks.templately.com/wp-json/wp/v2/pages/22595"><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://blocks.templately.com/xmlrpc.php?rsd">
<meta name="generator" content="WordPress 6.4.3">
<meta name="generator" content="WooCommerce 8.5.2">
<link rel="canonical" href="https://blocks.templately.com/max-boom-home-page/">
<link rel="shortlink" href="https://blocks.templately.com/?p=22595">
<link rel="alternate" type="application/json+oembed" href="https://blocks.templately.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fblocks.templately.com%2Fmax-boom-home-page%2F">
<link rel="alternate" type="text/xml+oembed" href="https://blocks.templately.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fblocks.templately.com%2Fmax-boom-home-page%2F&amp;format=xml">
	<style type="text/css">

        /*********** Easyjobs dynamic css started *************/
        .easyjobs-frontend-wrapper.easyjobs-landing-page{
            background-color: #f5f7fd;
            width: 100%;
            max-width: 100%;
            padding-top: 50px;
            padding-right: 50px;
            padding-bottom: 50px;
            padding-left: 50px;
        }

        .easyjobs-frontend-wrapper.easyjobs-landing-page .ej-header, .easyjobs-shortcode-wrapper.ej-template-classic .carrier__company, .easyjobs-frontend-wrapper.easyjobs-landing-page .about__company{
            background-color: fff;
            padding-top: 50px;
            padding-right: 50px;
            padding-bottom: 50px;
            padding-left: 50px;
        }

        .easyjobs-landing-page .ej-header .ej-company-info .info .name{
            font-size: 24px;
        }
        .easyjobs-landing-page .ej-header .ej-company-info .info .location{
            font-size: 14px;
        }

        .easyjobs-landing-page .ej-header .ej-header-tools .ej-btn, .easyjobs-shortcode-wrapper.ej-template-classic .carrier__company .button, .easyjobs-shortcode-wrapper.ej-template-elegant .ej-company-info .ej-btn {
            font-size: 14px;
            color: #fff;
            background-color: #2fc1e1;
        }
        .easyjobs-landing-page .ej-header .ej-header-tools .ej-btn:hover, .easyjobs-shortcode-wrapper.ej-template-classic .carrier__company .button:hover, .easyjobs-shortcode-wrapper.ej-template-elegant .ej-company-info .ej-btn:hover{
            color: #fff;
            background-color: #1fb6d7;
        }
        .easyjobs-landing-page .ej-company-description, .easyjobs-landing-page .ej-company-description p, .easyjobs-landing-page .ej-company-description p span, .easyjobs-landing-page .ej-company-description ul li, .easyjobs-landing-page .ej-company-description a{
            font-size: 14px;
            color: #7d8091;
        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-list .ej-job-list-item .ej-job-list-item-inner
        .ej-job-list-item-col{
            padding-top: 25px;
            padding-right: 30px;
            padding-bottom: 25px;
            padding-left: 25px;
            border-color: #f5f7fd;
        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-list .ej-job-list-item .ej-job-list-item-inner
        .ej-job-list-item-col .ej-job-title{
            font-size: 24px;
        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-list .ej-job-list-item .ej-job-list-item-inner
        .ej-job-list-item-col .ej-job-title a{
            color: #212529;
        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-list .ej-job-list-item .ej-job-list-item-inner
        .ej-job-list-item-col .ej-job-title a:hover{
            color: #0056b3;
        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-list .ej-job-list-item .ej-job-list-item-inner
        .ej-job-list-item-col .ej-job-list-info .ej-job-list-info-block{
            font-size: 14px;
        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-list .ej-job-list-item .ej-job-list-item-inner
        .ej-job-list-item-col .ej-job-list-info .ej-job-list-info-block a{
            color: #0056b3        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-list .ej-job-list-item .ej-job-list-item-inner
        .ej-job-list-item-col .ej-job-list-info .ej-job-list-info-block{
            color: #7d8091        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-list .ej-job-list-item .ej-job-list-item-inner
        .ej-job-list-item-col .ej-deadline{
            font-size: 18px;
            color: #7d8091;
        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-list .ej-job-list-item .ej-job-list-item-inner
        .ej-job-list-item-col .ej-list-sub{
            font-size: 14px;
            color: #7d8091;
        }

        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-list .ej-job-list-item .ej-job-list-item-inner
        .ej-job-list-item-col .ej-btn.ej-info-btn-light{
            font-size: 14px;
            color: #2fc1e1;
            background-color: rgba(47,193,225,.1);
        }

        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-list .ej-job-list-item .ej-job-list-item-inner
        .ej-job-list-item-col .ej-btn.ej-info-btn-light:hover{
            color: #fff;
            background-color: #2fc1e1;
        }

        .easyjobs-landing-page .ej-section .ej-section-title .ej-section-title-text{
            color: #2f323e;
            font-size: 32px;
        }
        .easyjobs-landing-page .ej-section .ej-section-title .ej-section-title-icon{
            color: #597dfc;
            background-color: rgba(89,125,252,.1);
        }
        /* Details page */
        
        .easyjobs-frontend-wrapper.easyjobs-single-page{
            background-color: #f5f7fd;
            width: 100%;
            max-width: 1400px;
            padding-top: 50px;
            padding-right: 50px;
            padding-bottom: 50px;
            padding-left: 50px;
        }

        .easyjobs-single-page .easyjobs-details .ej-job-header .ej-job-header-left .ej-job-overview, .easyjobs-shortcode-wrapper.ej-template-classic .job__more__details {
						background-color: #fff;
			            padding-top: 50px;
            padding-right: 50px;
            padding-bottom: 50px;
            padding-left: 50px;
		}
        .easyjobs-single-page .ej-company-info .info .name{
            font-size: 24px;
        }

        .easyjobs-single-page.ej-company-info .info .location{
            font-size: 14px;
        }

        .easyjobs-single-page .easyjobs-details .ej-job-header .ej-job-header-left .ej-job-overview .ej-job-highlights .ej-job-highlights-item, .easyjobs-shortcode-wrapper.ej-template-classic .job__more__details .infos .info span, .easyjobs-shortcode-wrapper.ej-template-classic .job__more__details .infos .info p, .easyjobs-shortcode-wrapper.ej-template-classic .ej-container div.job__more__details > p{
            font-size: 16px;
        }
        .easyjobs-single-page .easyjobs-details .ej-job-header .ej-job-header-left .ej-job-overview .ej-job-highlights .ej-job-highlights-item .ej-job-highlights-item-label, .easyjobs-shortcode-wrapper.ej-template-classic .job__more__details .infos .info p, .easyjobs-shortcode-wrapper.ej-template-classic .ej-container div.job__more__details > p i, .easyjobs-shortcode-wrapper.ej-template-classic .ej-container div.job__more__details > p span{
            color: #1c2238;
        }
        .easyjobs-single-page.easyjobs-details .ej-job-header .ej-job-header-left .ej-job-overview .ej-job-highlights .ej-job-highlights-item .ej-job-highlights-item-value, .easyjobs-shortcode-wrapper.ej-template-classic .job__more__details .infos .info span, .easyjobs-shortcode-wrapper.ej-template-classic .ej-container div.job__more__details > p{
            color: #7d8091;
        }
        .easyjobs-single-page .ej-apply-link .ej-btn.ej-info-btn, .easyjobs-shortcode-wrapper.ej-template-classic .job__more__details > a.button, .ej-template-elegant .ej-hero .job__infos__block .meta .button{
            font-size: 14px;
            background-color: #2fc1e1;
            color: #fff;
        }
        .easyjobs-single-page .ej-apply-link .ej-btn.ej-info-btn:hover, .easyjobs-shortcode-wrapper.ej-template-classic .job__more__details > a.button:hover, .ej-template-elegant .ej-hero .job__infos__block .meta .button:hover{
            background-color: #1fb6d7;
            color: #fff;
        }
        .easyjobs-single-page .easyjobs-details .ej-job-header .ej-job-header-left .ej-job-overview-footer .ej-social-share ul li a, .easyjobs-frontend-wrapper .easyjobs-shortcode-wrapper .job__more__details .share__options ul li a{
            width: 40px;
            height: 40px;
        }
        .easyjobs-single-page .easyjobs-details .ej-job-header .ej-job-header-left .ej-job-overview-footer .ej-social-share ul li a svg{
            width: 18px;
            height: 18px;
        }
        .easyjobs-frontend-wrapper .easyjobs-shortcode-wrapper .job__more__details .share__options ul li a i{
            font-size: 18px;
            line-height: 40px;
        }

        .easyjobs-single-page .easyjobs-details .ej-content-block h1{
            font-size: 32px;
        }
        .easyjobs-single-page .easyjobs-details .ej-content-block h2{
            font-size: 28px;
        }
        .easyjobs-single-page .easyjobs-details .ej-content-block h3{
            font-size: 24px;
        }
        .easyjobs-single-page .easyjobs-details .ej-content-block h4{
            font-size: 21px;
        }
        .easyjobs-single-page .easyjobs-details .ej-content-block h5{
            font-size: 18px;
        }
        .easyjobs-single-page .easyjobs-details .ej-content-block h6{
            font-size: 16px;
        }
        .easyjobs-single-page .easyjobs-details .ej-content-block p,
        .easyjobs-single-page .easyjobs-details .ej-content-block ul li,
        .easyjobs-single-page .easyjobs-details .ej-content-block ol li,
        .easyjobs-single-page .easyjobs-details .ej-label{
            font-size: 14px;
        }
        .easyjobs-single-page .ej-section .ej-section-title .ej-section-title-text{
            font-size: 32px;
        }
                /*Job filter css*/
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-filter-wrap .ej-job-filter-form .ej-info-btn-light {
            font-size: 14px;
            color: #ff9635;
            background-color: rgba(255,150,53,.1);
        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-filter-wrap .ej-job-filter-form .ej-info-btn-light:hover {
            color: #ff9635;
            background-color: rgba(255,150,53,.1);
        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-filter-wrap .ej-job-filter-form .ej-danger-btn {
            font-size: 14px;
            color: #ff5f74;
            background-color: rgba(255,95,116,.1);
        }
        .easyjobs-landing-page .easyjobs-shortcode-wrapper .ej-job-filter-wrap .ej-job-filter-form .ej-danger-btn:hover {
            color: #ff5f74;
            background-color: rgba(255,95,116,.1);
        }
        
        

        /****** end easy jobs dynamic css *******/
	</style>
    	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Elementor 3.19.0; features: e_optimized_assets_loading, additional_custom_breakpoints, block_editor_assets_optimize, e_image_loading_optimization; settings: css_print_method-external, google_font-enabled, font_display-auto">
<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style><style type="text/css" id="flexia-dynamic-css">.flexia-primary-menu .customize-partial-edit-shortcut button {
		margin-left: 50px;
	}

	.site-title a, .site-description {
		color: #F56A6A;
	}
	
	body, button, input, select, optgroup, textarea {
		color: #4d4d4d;
	}
	
	body {
		font-family: "Open Sans", -apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
		font-size: 16px;
		line-height: 1.4;
		text-transform: none;
		background-color: #fff;
		background-image: none;
		background-size: auto;
		background-position: center center;
		background-repeat: no-repeat;
	}
	
	p {
		font-family: "Open Sans", -apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
		font-size: 1em;
		line-height: 1.4;
		text-transform: none;
	}
	
	h1, h2, h3, h4, h5, h6 {
		font-family: "Open Sans", "Helvetica Neue",sans-serif;
		color: #333333;
		line-height: 1.4;
		text-transform: none;
	}
	
	h1 {
		font-size: 2em;
	}
	
	h2 {
		font-size: 1.5em;
	}
	
	h3 {
		font-size: 1.17em;
	}
	
	h4 {
		font-size: 1em;
	}
	
	h5 {
		font-size: .83em;
	}
	
	h6 {
		font-size: .75em;
	}

	.site-content a {
		font-size: 1em;
	}
	
	a {
		color: #F56A6A;
		font-family: "Open Sans", -apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
		line-height: 1;
		text-transform: none;
	}
	
	a:hover, a:focus, a:active {
		color: #ff5544;
	}
	
	input[type=button], button {
		color: #fff;
		background-color: #F56A6A;
		font-family: "Open Sans", -apple-system,BlinkMacSystemFont,"Segoe UI","Roboto","Oxygen","Ubuntu","Cantarell","Fira Sans","Droid Sans","Helvetica Neue",sans-serif;
		font-size: 1em;
		line-height: 1.4;
		text-transform: none;
	}
	
	.flexia-container.width {
		width: 90%;
	}
	
	.flexia-container.max {
		max-width: 1200px;
	}
	
	.single .entry-content-wrapper {
		width: 90%;
		max-width: 1200px;
	}
	
	.flexia-sidebar-left {
		width: 30%;
	}
	
	.flexia-sidebar-right {
		width: 30%;
	}
	
	body.blog, body.archive, body.single-post,
	body.blog.custom-background, body.archive.custom-background, body.single-post.custom-background, body.search,error404 {
		background-color: #F2F3F6;
	}
	
	.flexia-wrapper > .content-area, .entry-content.single-post-entry,
	body.blog .flexia-wrapper > .content-area article.post,
	body.archive .flexia-wrapper > .content-area article.post {
		background-color: #fff;
	}
	
	.single-post .entry-header.single-blog-meta.single-post-meta-large {
		background-color: #fff;
	}
	
	.flexia-sidebar .widget {
		background-color: #fff;
	}
	
	.site-branding .flexia-header-logo > img {
		width: 180px;
	}

	.site-branding .flexia-header-sticky-logo  > img {
		width: 150px;
	}
	
	.header-content .flexia-blog-logo {
		width: 150px;
	}

	.page-header.blog-header, .page-header.single-blog-header {
		background-color: #612ee9;
	}

	/* Archive page header */
	.page-header.archive-header {
		background-color: #612ee9;
	}

	.archive-header .header-content > .page-title {
		font-size: 54px;
		color: #ffffff;
		font-family: Poppins;
	}

	.header-content .archive-description > p {
		font-size: 28px;
		color: #ffffff;
		font-family: Nunito;
	}

	.blog-header .header-content > .page-title {
		font-size: 54px;
		color: #ffffff;
		font-family: Poppins;
	}
	
	.paged .blog-header .header-content > .page-title, .paged .archive-header .header-content > .page-title {
		font-size: calc(54px / 1.2);
	}
	
	.header-content .blog-desc {
		font-size: 28px;
		color: #ffffff;
		font-family: Nunito;
	}
	
	.paged .header-content .blog-desc, .paged .header-content .archive-description > p {
		font-size: calc(28px / 1.2);
	}
	
	.page .entry-header.entry-header-large, .page .entry-header.entry-header-mini, .page-header.error-header, .page-header.search-header {
		background-color: #28292e;
	}
	
	.page .entry-header .entry-title, .page-header.error-header .page-title, .page-header.search-header .page-title {
		color: #333333;
		font-size: 36px;
	}
	
	.flexia-breadcrumb .flexia-breadcrumb-item, .flexia-breadcrumb .flexia-breadcrumb-item a, .flexia-breadcrumb .breadcrumb-delimiter {
		color: #fefefe;
		font-size: 12px;
	}

	.flexia-breadcrumb .flexia-breadcrumb-item, .flexia-breadcrumb .flexia-breadcrumb-item a, .flexia-breadcrumb .breadcrumb-delimiter svg,
	.woocommerce-breadcrumb .breadcrumb-separator svg {
		fill: #fefefe;
		height: 9.6px;
		width: auto;
	}
	
	.flexia-breadcrumb-item.current span, .breadcrumb li a:hover, .breadcrumb li a:focus {
		color: #ffffff;
	}
	
	.flexia-search-overlay {
		background-color: #121738;
	}
	
	.flexia-search-overlay::before, .flexia-search-overlay::after {
		border: 10px solid #121738;
	}
	
	.icon-search-close {
		height: 50px;
		width: 50px;
		fill: #fff;
	}
	
	.btn--search-close:hover .icon-search-close {
		fill: #fff;
	}
	
	.search--input-wrapper .search__input, .search--input-wrapper .search__input:focus {
		color: #fff;
		font-size: 48px;
	}
	
	.search--input-wrapper::after {
		font-size: 48px;
	}
	
	.search--input-wrapper::after {
		border-color: #fff;
	}
	
	.search__info {
		color: #fff;
		font-size: 16px;
	}
	
	.flexia-topbar-content {
		color: #ffffff;
		font-size: .8em;
	}
	
	.flexia-topbar a, .flexia-topbar_contact a {
		color: #ffffff;
		font-size: .8em;
	}

	.flexia-topbar_contact a svg {
		fill: #ffffff;
		height: 0.96em;
		width: auto;
		margin-right: 5px;
	}
	
	.flexia-topbar_contact a:hover {
		color: #eeeeee;
	}
	
	.flexia-social-links li a svg {
		fill: inherit;
		height: 1em;
		width: auto;
	}
	
	.flexia-social-links li a:hover svg {
		fill: inherit;
	}
	
	.flexia-woo-sidebar .widget_price_filter .ui-slider .ui-slider-range,
	.flexia-woo-sidebar .widget_price_filter .ui-slider .ui-slider-handle,
	.single-product.woocommerce .product .cart .single_add_to_cart_button,
	aside .widget button, 
	.flexia-woo-sidebar .widget button,
	.widget .search-form .search-submit {
		background-color: #F56A6A;
	}

	.single-product.woocommerce .product .woocommerce-tabs ul.wc-tabs > li.active::before,
	input:focus, textarea:focus, select:focus,
	.widget .search-form .search-submit {
		border-color: #F56A6A;
	}

	.single-blog-meta .entry-meta svg {
		fill: #F56A6A;
		width: auto;
		height: 1em;
		margin-right: 5px;
    	margin-bottom: -3px;
	}

	.flexia-menu.header-icons ul li.navbar-login-menu a button svg {
		fill: #fff;
		height: 1em;
		margin-bottom: -3px;
	}

	.single .entry-footer svg {
		height: 1em;
		margin: 0 5px -3px 0;
		fill: #4d4d4d;
	}

	body.blog .flexia-wrapper > .content-area article .entry-content .more-link {
		color: #fff;
		background-color: #F56A6A;
		border: 1px solid transparent;
    	border-radius: 4px;
	}
	body.blog .flexia-wrapper > .content-area article .entry-content .more-link:hover {
		background: #3f3f46;
		color: #fff;
		border: 1px solid #3f3f46;
	}
	
	@media all and (max-width: 959px) {
		.blog-header .header-content > .page-title, .archive-header .header-content > .page-title {
			font-size: calc(54px * .75);
		}
	
		.header-content .blog-desc, .header-content .archive-description > p {
			font-size: calc(28px * .75);
		}
	}
	
	@media all and (max-width: 480px) {
		.blog-header .header-content > .page-title, .archive-header .header-content > .page-title {
			font-size: calc(54px * .5);
		}
	
		.header-content .blog-desc, .header-content .archive-description > p {
			font-size: calc(28px * .5);
		}
	}
	
	.flexia-header-widget-area {
		background-color: #262625;
	}
	
	.flexia-topbar {
		background-color: #F56A6A;
	}
	
	.flexia-logobar {
		background-color: #fff;
	}
	
	.flexia-navbar {
		background-color: #612ee9;
		padding: 0px 15px 0px 15px;
	}
	
	.flexia-menu.header-icons .nav-menu li > a,
	.flexia-navbar .flexia-navbar-container .flexia-navbar-inner .search-form .search-field,
	.flexia-menu.header-icons {
		color: #ffffff;
	}

	.flexia-navbar .flexia-navbar-container .flexia-navbar-inner .search-form .search-submit svg,
	.flexia-menu.header-icons ul li #btn-search svg,
	.widget .search-form .search-submit svg {
		fill: #ffffff;
		height: .9em;
		width: auto;
	}

	.main-navigation .nav-menu li a svg {
		fill: #ffffff;
		height: .7em;
		width: auto;
		margin-left: 5px;
	}

	.flexia-menu.header-icons .flexia-header-cart a.cart-contents .flexia-header-cart-icon svg {
		fill: #ffffff;
		height: 1em;
		width: auto;
	}

	.flexia-menu .flexia-menu-toggle:after {
		border-color: #ffffff;
	}
	.flexia-menu .flexia-menu-toggle:before, .flexia-menu .flexia-menu-toggle.flexia-menu-toggle-open::after {
		background-color: #ffffff;
	}

	.flexia-social-share-links li a svg {
		height: 2em;
		width: auto;
		fill: #F56A6A;
	}


	.blog .flexia-load-more-button {
		background-color: #444;
		color: #fff;
		font-size: 14px;
	}
	.blog .flexia-load-more-button:hover,
	.blog .flexia-load-more-button.button--loading {
		background-color: #27bdbd;
		color: #fff;
	}

	.archive .flexia-load-more-button {
		background-color: #444444;
		color: #ffffff;
		font-size: 14px;
	}

	.archive .flexia-load-more-button:hover,
	.archive .flexia-load-more-button.button--loading {
		background-color: #27bdbd;
		color: #ffffff;
	}
	
	@media screen and (min-width: 992px) {
		.main-navigation .nav-menu li > a, .flexia-menu.header-icons .nav-menu li > a {
			color: #ffffff;
		}
	
		.main-navigation .nav-menu li:hover > a:not(.cart-contents), 
		.main-navigation .nav-menu li.current-menu-item > a:not(.cart-contents), 
		.main-navigation .nav-menu li.current-menu-ancestor > a:not(.cart-contents) {
			color: #b8b8e0;
		}
	
		.main-navigation .nav-menu > li > a:after {
			color: #b8b8e0;
			background-color: #b8b8e0;
		}
	
		.main-navigation .nav-menu li:hover > a:not(.cart-contents), 
		.main-navigation .nav-menu li.current-menu-item > a:not(.cart-contents), 
		.main-navigation .nav-menu li.current-menu-ancestor > a:not(.cart-contents) {
			background-color: #ffffff;
		}
	
		.main-navigation .nav-menu li ul {
			background-color: #ffffff;
		}
	
		.main-navigation .nav-menu li ul li > a, 
		.main-navigation .nav-menu li ul.flexia-mega-menu li:hover > a:not(.cart-contents) {
			color: #4d4d4d;
		}
	
		.main-navigation .nav-menu li ul.flexia-mega-menu li:hover > a:not(.cart-contents) {
			background-color: initial;
		}
	
		.main-navigation .nav-menu li ul li:hover > a:not(.cart-contents), 
		.main-navigation .nav-menu li ul li.current-menu-item > a:not(.cart-contents), 
		.main-navigation .nav-menu li ul li.current-menu-ancestor > a:not(.cart-contents), 
		.main-navigation .nav-menu li ul.flexia-mega-menu li > a:not(.cart-contents):hover {
			color: #1b1f21;
		}
	
		.main-navigation .nav-menu li ul li:hover > a:not(.cart-contents), 
				.main-navigation .nav-menu li ul li.current-menu-item > a:not(.cart-contents), 
				.main-navigation .nav-menu li ul li.current-menu-ancestor > a:not(.cart-contents), 
				.main-navigation .nav-menu li ul.flexia-mega-menu li > a:not(.cart-contents):hover {
			background-color: #f4f4f4;
		}
	
		.topbar-navigation .nav-menu li > a {
			color: #cbced3;
		}
	
		.topbar-navigation .nav-menu li:hover > a, .topbar-navigation .nav-menu li.current-menu-item > a, .topbar-navigation .nav-menu li.current-menu-ancestor > a {
			color: #ffffff;
		}
	
		.topbar-navigation .nav-menu li:hover > a, .topbar-navigation .nav-menu li.current-menu-item > a, .topbar-navigation .nav-menu li.current-menu-ancestor > a {
			background-color: rgba(0, 0, 0, 0.5);
		}
	
		.topbar-navigation .nav-menu li ul {
			background-color: #262625;
		}
	
		.topbar-navigation .nav-menu li ul li > a {
			color: #cbced3;
		}
	
		.topbar-navigation .nav-menu li ul li:hover > a, .topbar-navigation .nav-menu li ul li.current-menu-item > a, .topbar-navigation .nav-menu li ul li.current-menu-ancestor > a {
			color: #ffffff;
		}
	
		.topbar-navigation .nav-menu li ul li:hover > a, .topbar-navigation .nav-menu li ul li.current-menu-item > a, .topbar-navigation .nav-menu li ul li.current-menu-ancestor > a {
			background-color: rgba(0, 0, 0, 0.5);
		}
	}
	
	.flexia-footer-widget-area {
		background-color: #313131;
	}
	
	.flexia-colophon-inner .widget {
		color: #cfcfcf;
	}
	
	.flexia-colophon-inner .widget a {
		color: #cbced3;
	}
	
	.flexia-colophon-inner .widget a:hover {
		color: #ff5544;
	}
	
	.flexia-site-footer {
		background-color: #262625;
	}
	
	.flexia-site-footer .site-info {
		color: #9a9a9a;
	}
	
	.flexia-site-footer .site-info a, .flexia-footer-menu li a {
		color: #ffffff;
	}
	
	.flexia-site-footer .site-info a:hover, .flexia-footer-menu li a:hover {
		color: #E65A50;
	}
	
	.customize-partial-edit-shortcut-button {
		padding: 3px !important;
		border-radius: 50% !important;
		border: 2px solid #fff !important;
	}</style><link rel="icon" href="https://blocks.templately.com/wp-content/uploads/2021/05/android-chrome-192x192-1-100x100.png" sizes="32x32">
<link rel="icon" href="https://blocks.templately.com/wp-content/uploads/2021/05/android-chrome-192x192-1.png" sizes="192x192">
<link rel="apple-touch-icon" href="https://blocks.templately.com/wp-content/uploads/2021/05/android-chrome-192x192-1.png">
<meta name="msapplication-TileImage" content="https://blocks.templately.com/wp-content/uploads/2021/05/android-chrome-192x192-1.png">
		<style type="text/css" id="wp-custom-css">
			.entry-content {
	font-weight: 400;
}
#hero_section_dark {
	margin: 0;
}
.eb-margin-bottom-none {
	margin-bottom: 0 !important;
}
.transform_to_top {
	transition: all 0.3s;
}
.transform_to_top:hover {
	transform: translate(0,-5px);
}
.ff-btn-submit.ff-btn-md.ff_btn_style {
    width: 174px;
    height: 52px;
    border-radius: 8px;
    color: #ffffff;
    font-size: 13px;
    font-weight: 500;
    background: #f30061;
}

/* EB Landing Page */
.eb_counter_custom_style_1 .eb-counter-wrapper {
	overflow: visible !important;
}
.eb_counter_custom_style_1 .eb-counter-image {
	box-shadow: -10px 20px 30px 0 rgba(248, 127, 92, 0.2);
}
.eb_counter_custom_style_2 .eb-counter-wrapper {
	overflow: visible !important;
}
.eb_counter_custom_style_2 .eb-counter-image {
	box-shadow: -10px 20px 30px 0 rgba(24, 197, 255, 0.2);
}
.eb_counter_custom_style_3 .eb-counter-wrapper {
	overflow: visible !important;
}
.eb_counter_custom_style_3 .eb-counter-image {
	box-shadow: -10px 20px 30px 0 rgba(255, 107, 163, 0.2);
}
.eb_border_radius {
	border-radius: 10px;
	overflow: hidden;
	margin: 0;
}
.eb_border_radius img {
	width: 100%;
}
.eb_z_index .eb-wrapper-outer {
	position: relative;

}
.eb_custom_subscribe_form.fluentform .ff-el-form-control {
	border: 0;
	padding: 28px 50px;
	border-radius: 100px;
	font-family: 'DM Sans';
	font-size: 18px;
	line-height: 1.3;
	font-weight: 400;
	color: #6A72A5;
	width: 600px;
	max-width: unset;
}
.eb_custom_subscribe_form.fluentform .ff-el-group {
	text-align: right;
	margin: 0;
}
.eb_custom_subscribe_form .ff-btn-submit.ff-btn-md.ff_btn_style {
	padding: 23.5px 40px;
	border-radius: 100px;
	font-family: 'DM Sans';
	font-size: 22px;
	line-height: 1.3;
	font-weight: 500;
	color: #ffffff;
	height: auto;
	width: auto;
	min-width: auto !important;
	background: #2673FF;
	border: 2px solid #2673FF;
	transition: all 0.5s;
}
.eb_custom_subscribe_form .ff-btn-submit.ff-btn-md.ff_btn_style:hover {
	color: #ffffff;
	background: transparent;
	border: 2px solid #ffffff;
	opacity: 1;
}
.eb_custom_subscribe_form .ff-btn-submit.ff-btn-md.ff_btn_style::after {
	content: "\f30b";
	color: #ffffff;
	font-family: 'Font Awesome 5 Free';
	font-weight: 600;
	margin-left: 20px;
}
.eb_custom_info_box .info-wrap-link .eb-infobox-wrapper {
	transition: all 0.5s;
}
.eb_custom_info_box .info-wrap-link .eb-infobox-wrapper:hover {
	transform: translate(0, 10px);
}
.eb_custom_info_box div.eb-infobox-wrapper .icon-img-wrapper {
    overflow: visible;
}
.eb_custom_info_box .eb-infobox-num-wrapper {
	transition: all 0.5s;
}
/* .eb_custom_info_box_shadow_1 .eb-infobox-num-wrapper {
	box-shadow: -10px 20px 30px 0px rgba(248, 127, 92, 0.2);
}
.eb_custom_info_box_shadow_2 .eb-infobox-num-wrapper {
	box-shadow: -10px 20px 30px 0px rgba(75, 211, 253, 0.2);
}
.eb_custom_info_box_shadow_3 .eb-infobox-num-wrapper {
	box-shadow: -10px 20px 30px 0px rgba(255, 107, 163, 0.2);
}
.eb_custom_info_box_shadow_4 .eb-infobox-num-wrapper {
	box-shadow: -10px 20px 30px 0px rgba(158, 126, 245, 0.2);
} */
.eb_custom_info_box .info-wrap-link .eb-infobox-wrapper:hover .eb-infobox-num-wrapper {
	box-shadow: none;
}
.eb_custom_overflow_visible div.eb-infobox-wrapper .icon-img-wrapper, .eb_custom_overflow_visible div.eb-infobox-wrapper {
	overflow: visible;
}
#content_blocks,
#creative_blocks,
#marketing_blocks,
#social_blocks {
	margin: 0;
}
.eb-margin-zero {
	margin: 0;
}
.hero-animation {
    margin: 0;
    line-height: 0;
}
.eb_fluent_form_custom .ff-btn-submit.ff-btn-md.ff_btn_style {
    height: auto;
}
.eb_fluent_form_custom .ff-btn-submit.ff-btn-md.ff_btn_style::after {
    content: "\f30b";
    font-family: 'Font Awesome 5 Free';
    font-weight: 600;
    color: #ffffff;
    margin: 0 0 0 20px;
}
.eb_overflow_hidden .eb-wrapper-outer {
    overflow: hidden;
}
.hero-animation video {
    background: #EDF2F8;
    border: 5px solid #FFFFFF;
    box-shadow: 0 35px 100px 0 rgb(0 5 48 / 10%);
    border-radius: 10px;
}

/* EB Demo Landing Page */
.eb-demo-search-form .wp-block-search__inside-wrapper {
	background: #ffffff;
	border: none !important;
	border-radius: 5px;
	height: 68px;
}
.eb-demo-search-form .wp-block-search__inside-wrapper .wp-block-search__input {
	font-family: 'DM Sans';
	font-style: normal;
	font-weight: 400;
	font-size: 18px;
	line-height: 23px;
	letter-spacing: -0.03em;
	color: #6A72A5;
	padding: 0 30px !important;
	margin: 0;
}
.eb-demo-search-form .wp-block-search__inside-wrapper .wp-block-search__input::placeholder {
	color: #6A72A5;
}
.eb-demo-search-form .wp-block-search__inside-wrapper .wp-block-search__button {
	background: transparent;
	border: none;
	font-size: 24px;
	color: #6A72A5;
	transform: rotateZ(270deg);
}



/* Demo css GLOBAL */
.eb-demo-hidden {
	display: none !important;
}
.eb-demo-no-link {
	cursor: not-allowed !important;
}




/* Demo Accordion */
.eb-icon-rotate .eb-button-icon {
    transform: rotate(-45deg);
}
.eb-img-shadow img {
		box-shadow: 0px 35px 75px rgba(0, 5, 48, 0.15);
	border-radius: 10px !important;
}
.eb-demo-hero-image {
    position: absolute;
    left: -40px;
    bottom: 43px;
}
.eb-video-full iframe {
  height: auto;
  width: 100%;
  aspect-ratio: 16 / 9;
}

/* Demo Toggle Content */
.eb-demo-toggle-content-1 .eb-text-switch-content {
    padding: 7px;
    background: #ffffff;
    border-radius: 100px;
}
.eb-demo-toggle-content-1 .eb-pricing-tag {
    background: #374151;
}
.eb-demo-toggle-content-1 ul.eb-pricebox-features {
    text-align: left;
    display: inline-block !important;
    width: auto !important;
}
.eb-demo-toggle-content-2 .eb-toggle-controller {
    box-shadow: 0 7px 7px 0 rgb(15 16 45 / 60%);
}
.eb-demo-toggle-content-pricing-1 .eb-pricing-tag,
.eb-demo-toggle-content-pricing-1 .eb-pricing-tag {
    background: rgba(75, 143, 255, .12) !important;
}
.eb-demo-toggle-content-pricing-3 .eb-pricing-tag {
    background: #3DB85E1F !important;
}
.eb-demo-toggle-content-pricing-2 .eb-pricing-tag,
.eb-demo-toggle-content-pricing-2 .eb-pricing-tag {
    background: #FFC2101f !important;
}
.eb-demo-toggle-content-3 .eb-text-switch-label {
    border-radius: 0;
}

.eb-demo-toggle-content-3 .eb-text-switch-toggle {
    border-radius: 0;
    box-shadow: none;
}

@media (max-width: 767px) {
	.eb-demo-text-center-mobile * {
		text-align: center !important;
	}
}




/* EB Demo Flipbox */
/* flip box style 1  */
.flip-fade .eb-flipbox-icon-wrapper {
    margin-bottom: 25px !important;
}
/* flip box style 2  */
.flip-left-right .eb-flipbox-items-container {
    padding: 20px;
}
/* flip box style 3  */
.flip-up-bottom .eb-flipbox-items-container {
    padding: 40px;
}
/* flip box style 4  */
.flip-zoom-in-out .eb-flipbox-items-container {
    align-items: flex-start !important;
    padding: 50px;
}
.flip-zoom-in-out .eb-flipbox-front-content {
    text-align: left !important;
}
@media screen and (max-width: 1024px) {
    /* flip box style 1  */
    .flip-fade .eb-flipbox-icon-wrapper {
        margin-bottom: 10px !important;
    }
    /* flip box style 3  */
    .flip-up-bottom .eb-flipbox-items-container {
        padding: 20px;
    }
    /* flip box style 4  */
    .flip-zoom-in-out .eb-flipbox-items-container{
        padding: 20px;
    }
     /* flip box style 5  */
     .flip-glance .eb-flipbox-front,
     .flip-glance .eb-flipbox-back {
         min-height: 220px !important;
     }
}

/* EB Demo Testimonial */
.eb-testimonial-description {
	padding: 0 !important;
	margin-top: 0;
}
.eb-testimonial-container .eb-userinfo-container {
	margin: 0 !important;
}
.eb-demo-testimonial-demo-3 .eb-testimonial-description {padding: 0 !important;}

.eb-demo-testimonial-demo-3 .eb-userinfo-container {margin: 0 !important;}
.eb-demo-testimonial-demo-3 .eb-testimonial-quote-style {
    margin-top: -20px;
}

.eb-demo-testimonial-demo-4 .eb-testimonial-description {padding: 0 !important;}
.eb-demo-testimonial-demo-4 .eb-userinfo-container {margin: 0 !important;}
.eb-demo-testimonial-demo-4 .eb-testimonial-quote-style {
    padding: 0;
    text-align: left;
}
.eb-demo-testimonial-demo-4 .eb-avatar-style {
    width: 56px;
    height: 56px;
}

/* EB Demo Footer CTA */
/* .eb-footer-gradient-text-button */
.eb-footer-gradient-text {
	background: #FF5AA7;
	background: -webkit-linear-gradient(to right, #FF5AA7 0%, #DB00FF 100%);
	background: -moz-linear-gradient(to right, #FF5AA7 0%, #DB00FF 100%);
	background: linear-gradient(to right, #FF5AA7 0%, #DB00FF 100%);
	-webkit-background-clip: text;
	-webkit-text-fill-color: transparent;
}


/* EB Demo Parallax Slider */
.eb-parallax-slider-wrapper.eb-slider-ehbwmkh .slide__content {
	text-align: left;
}
.eb-parallax-slider .eb-parallax-wrapper li {
	margin-top: 0 !important;
	margin-bottom: 0 !important;
}

/* @media (max-width: 767px) {
	.eb-parallax-slider .eb-parallax-wrapper li {
		margin: 0 !important;
	}
}
 */


/* EB Demo Social Icons */
.eb-social-links-wrapper ul.socials li a {
	transition: all 0.4s;
}

/* Interective Promo */
.promo-block-custom .eb-interactive-promo-wrapper {
	margin: 0 !important;
}
.style-tab-custom .eb-interactive-promo-content {
	text-align: left !important;
}
@media (max-width: 1024px){
	.promo-block-custom .effect-goliath,
	.promo-block-custom .effect-julia,
	.promo-block-custom .effect-layla,
	.promo-block-custom .effect-lexi  {
		height: 500px !important;
		max-width: 100%;
	}
	.attractive-layouts-custom figcaption {
		padding: 30px
	}
}


@media (max-width: 1024px) {

    .eb-interactive-promo-wrapper.eb-interactive-promo-ch80xtb .hover-effect figure figcaption {
        padding: 30px
    }
}


/* EB Demo notice */
.notice-align-center .eb-notice-title-wrapper {
	justify-content: center !important;
}
.notice-align-center .eb-notice-text {
	text-align: center !important;
}
.notice-cross-icon .eb-notice-dismiss {
	top: 14px !important;
	right: 14px !important;
}



/* EB Demo Team Member */
.team-preset-4 .eb-wrapper-outer {
	position: relative;
	top: -200px;
}
@media (max-width: 1024px){
	.team-preset-4 .eb-wrapper-outer {
		position: relative;
		top: -80px;
	}
}




/* general */
.eb-advanced-navigation-wrapper {
    margin-bottom: 0 !important;
}
@media (max-width: 1024px) {
	.eb_custom_subscribe_form.fluentform .ff-el-form-control {
		border: 0;
		padding: 28px 30px;
		width: 390px;
	}
	.eb_custom_subscribe_form .ff-t-container {
		max-width: 628px;
		margin: 0 auto;
	}
	.eb-demo-hero-image {
    max-width: 70%;
    left: -20px;
    bottom: 20px;
	}
}

@media (max-width: 767px) {
	.eb_row_reverse_mobile .eb-row-inner {
		flex-direction: column-reverse;
	}
	.eb_custom_subscribe_form.fluentform .ff-el-form-control {
		width: 100%;
		margin-bottom: 15px;
	}
	.eb_custom_subscribe_form .ff-btn-submit.ff-btn-md.ff_btn_style {
		width: 100%;
	}
}

/* css for Advanced Video */
.player-placeholder {
    z-index: 1;
    position: relative;
}

/*  */
.hentry {
	margin: 0;
}
.entry-content {
	padding-bottom: 0;
}
		</style>
		</head>

<body class="page-template page-template-template-no-container-4 page-template-template-no-container-4-php page page-id-22595 page-parent wp-custom-logo theme-flexia woocommerce-js flexia-2.3.1  elementor-default elementor-kit-11">

<div id="page" class="site">


<div id="page" class="site">
	<div id="content" class="site-content">
				<div class="flexia-wrapper flexia-blank-container">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

					
<article id="post-22595" class="post-22595 page type-page status-publish hentry">

	
	<div class="entry-content">
		
<div class="wp-block-essential-blocks-wrapper alignfull"><div class="eb-parent-wrapper eb-parent-eb-wrapper-xmz2ot8 "><div class="eb-wrapper-outer eb-wrapper-xmz2ot8"><div class="eb-wrapper-inner"><div class="eb-wrapper-inner-blocks eb-wrapper-align-center">
<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-gfv45to "><div class="eb-row-root-container eb-row-gfv45to" data-id="eb-row-gfv45to"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-gab9xws  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-gab9xws"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-image"><div class="eb-parent-wrapper eb-parent-eb-advanced-image-7ngjpx7 "><figure class="eb-advanced-image-wrapper eb-advanced-image-7ngjpx7 img-style-rounded caption-style-1 caption-horizontal-center caption-vertical-bottom bottom no-effect" data-id="eb-advanced-image-7ngjpx7"><div class="image-wrapper"><a class="eb-advimg-link" href="https://blocks.templately.com/max-boom-home-page/"></a><img decoding="async" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/994376d9-mx-boom.png" alt=""></div></figure></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-0z180ez  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-0z180ez"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-navigation"><div class="eb-parent-wrapper eb-parent-eb-advanced-navigation-m48uq42 "><div class="eb-advanced-navigation-m48uq42 eb-advanced-navigation-wrapper is-horizontal preset-1 items-justified-left responsive-icon close-icon-right"><div class="eb-nav-contents"><nav class="is-responsive items-justified-right is-horizontal items-justified-left  wp-block-navigation is-content-justification-right is-layout-flex wp-container-core-navigation-layout-1 wp-block-navigation-is-layout-flex" aria-label="Max Boom Menu" data-wp-interactive="" data-wp-context="{&quot;core&quot;:{&quot;navigation&quot;:{&quot;overlayOpenedBy&quot;:[],&quot;type&quot;:&quot;overlay&quot;,&quot;roleAttribute&quot;:&quot;&quot;,&quot;ariaLabel&quot;:&quot;Menu&quot;}}}"><button aria-haspopup="true" aria-label="Open menu" class="wp-block-navigation__responsive-container-open " data-wp-on--click="actions.core.navigation.openMenuOnClick" data-wp-on--keydown="actions.core.navigation.handleMenuKeydown"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><rect x="4" y="7.5" width="16" height="1.5"></rect><rect x="4" y="15" width="16" height="1.5"></rect></svg></button>
			<div class="wp-block-navigation__responsive-container" style="" id="modal-1" data-wp-class--has-modal-open="selectors.core.navigation.isMenuOpen" data-wp-class--is-menu-open="selectors.core.navigation.isMenuOpen" data-wp-effect="effects.core.navigation.initMenu" data-wp-on--keydown="actions.core.navigation.handleMenuKeydown" data-wp-on--focusout="actions.core.navigation.handleMenuFocusout" tabindex="-1">
				<div class="wp-block-navigation__responsive-close" tabindex="-1">
					<div class="wp-block-navigation__responsive-dialog" data-wp-bind--aria-modal="selectors.core.navigation.ariaModal" data-wp-bind--aria-label="selectors.core.navigation.ariaLabel" data-wp-bind--role="selectors.core.navigation.roleAttribute" data-wp-effect="effects.core.navigation.focusFirstElement">
							<button aria-label="Close menu" class="wp-block-navigation__responsive-container-close" data-wp-on--click="actions.core.navigation.closeMenuOnClick"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" aria-hidden="true" focusable="false"><path d="M13 11.8l6.1-6.3-1-1-6.1 6.2-6.1-6.2-1 1 6.1 6.3-6.5 6.7 1 1 6.5-6.6 6.5 6.6 1-1z"></path></svg></button>
						<div class="wp-block-navigation__responsive-container-content" id="modal-1-content">
							<ul class="wp-block-navigation__container is-responsive items-justified-right is-horizontal items-justified-left  wp-block-navigation"><li class="wp-block-navigation-item current-menu-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="https://blocks.templately.com/max-boom-home-page/" aria-current="page"><span class="wp-block-navigation-item__label">Home</span></a></li><li class="wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="https://blocks.templately.com/max-boom-home-page/max-boom-about-page/"><span class="wp-block-navigation-item__label">About</span></a></li><li class="wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="https://blocks.templately.com/max-boom-home-page/max-boom-service-page/"><span class="wp-block-navigation-item__label">Service</span></a></li><li data-wp-context="{ &quot;core&quot;: { &quot;navigation&quot;: { &quot;submenuOpenedBy&quot;: {}, &quot;type&quot;: &quot;submenu&quot; } } }" data-wp-effect="effects.core.navigation.initMenu" data-wp-interactive="" data-wp-on--focusout="actions.core.navigation.handleMenuFocusout" data-wp-on--keydown="actions.core.navigation.handleMenuKeydown" data-wp-on--mouseenter="actions.core.navigation.openMenuOnHover" data-wp-on--mouseleave="actions.core.navigation.closeMenuOnHover" tabindex="-1" class="wp-block-navigation-item has-child open-on-hover-click wp-block-navigation-submenu"><a class="wp-block-navigation-item__content" href="https://blocks.templately.com/max-boom-home-page/max-boom-my-project-page/">Projectt</a><button data-wp-bind--aria-expanded="selectors.core.navigation.isMenuOpen" data-wp-on--click="actions.core.navigation.toggleMenuOnClick" aria-label="Projectt submenu" class="wp-block-navigation__submenu-icon wp-block-navigation-submenu__toggle" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true" focusable="false"><path d="M1.50002 4L6.00002 8L10.5 4" stroke-width="1.5"></path></svg></button><ul data-wp-on--focus="actions.core.navigation.openMenuOnFocus" class="wp-block-navigation__submenu-container wp-block-navigation-submenu"><li class="wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="https://blocks.templately.com/max-boom-home-page/max-boom-project-details/"><span class="wp-block-navigation-item__label">Project Details</span></a></li></ul></li><li class="wp-block-navigation-item wp-block-navigation-link"><a class="wp-block-navigation-item__content" href="https://blocks.templately.com/max-boom-home-page/max-boom-contact-page/"><span class="wp-block-navigation-item__label">Contact</span></a></li></ul>
						</div>
					</div>
				</div>
			</div></nav></div></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-wrapper alignfull"><div class="eb-parent-wrapper eb-parent-eb-wrapper-nwp67k4 "><div class="eb-wrapper-outer eb-wrapper-nwp67k4"><div class="eb-wrapper-inner"><div class="eb-wrapper-inner-blocks eb-wrapper-align-center">
<div class="wp-block-essential-blocks-row alignfull" id="hero_section"><div class="eb-parent-wrapper eb-parent-eb-row-c8nawcv "><div class="eb-row-root-container eb-row-c8nawcv" data-id="eb-row-c8nawcv"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-47zpvrh  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-47zpvrh"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-image"><div class="eb-parent-wrapper eb-parent-eb-advanced-image-e5n5otl "><figure class="eb-advanced-image-wrapper eb-advanced-image-e5n5otl img-style-square caption-style-1 caption-horizontal-center caption-vertical-bottom bottom no-effect" data-id="eb-advanced-image-e5n5otl"><div class="image-wrapper"><img decoding="async" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Arrow-3.png" alt=""></div></figure></div></div>



<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-z67uboq "><div class="eb-advance-heading-wrapper eb-advance-heading-z67uboq button-1" data-id="eb-advance-heading-z67uboq"><h3 class="eb-ah-title">Hello, I’m Max</h3></div></div></div>



<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-o7wntga "><div class="eb-advance-heading-wrapper eb-advance-heading-o7wntga button-1" data-id="eb-advance-heading-o7wntga"><h1 class="eb-ah-title">Catch your life moment</h1><p class="eb-ah-subtitle">Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever… it remembers little things, long after you have forgotten everything.</p></div></div></div>



<div class="wp-block-essential-blocks-button"><div class="eb-parent-wrapper eb-parent-eb-button-swgc3yl "><div class="eb-button-wrapper eb-button-alignment eb-button-swgc3yl"><div class="eb-button"><a class="eb-button-anchor" href="https://blocks.templately.com/max-boom-home-page/#" rel="noopener">Book Now</a></div></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-355mvmo  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-355mvmo"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-hvxz2et "><div class="eb-row-root-container eb-row-hvxz2et" data-id="eb-row-hvxz2et"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-t8fcs08  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-t8fcs08"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-slider"><div class="eb-parent-wrapper eb-parent-eb-slider-yt5dzd1 "><div class="eb-slider-wrapper eb-slider-yt5dzd1" data-settings="{&quot;arrows&quot;:false,&quot;adaptiveHeight&quot;:false,&quot;autoplay&quot;:true,&quot;autoplaySpeed&quot;:3000,&quot;dots&quot;:false,&quot;fade&quot;:false,&quot;infinite&quot;:true,&quot;pauseOnHover&quot;:true,&quot;slidesToShow&quot;:1,&quot;speed&quot;:500,&quot;initialSlide&quot;:0,&quot;vertical&quot;:false,&quot;responsive&quot;:[{&quot;breakpoint&quot;:1025,&quot;settings&quot;:{&quot;slidesToShow&quot;:1}},{&quot;breakpoint&quot;:767,&quot;settings&quot;:{&quot;slidesToShow&quot;:1}}]}" data-images="[{&quot;url&quot;:&quot;https://static.live.templately.com/woocommerce/2022/03/Banner-Slider-1.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;id&quot;:0,&quot;imageId&quot;:22615,&quot;title&quot;:&quot;Slider 1&quot;,&quot;subtitle&quot;:&quot;Essential Blocks Slider Subtitle&quot;,&quot;showButton&quot;:true,&quot;buttonText&quot;:&quot;See More&quot;,&quot;buttonUrl&quot;:&quot;&quot;,&quot;openNewTab&quot;:false,&quot;isValidUrl&quot;:true},{&quot;url&quot;:&quot;https://static.live.templately.com/woocommerce/2022/03/Banner-Slider-2.jpg&quot;,&quot;alt&quot;:&quot;&quot;,&quot;id&quot;:1,&quot;imageId&quot;:22616,&quot;title&quot;:&quot;Slider 2&quot;,&quot;subtitle&quot;:&quot;Essential Blocks Slider Subtitle&quot;,&quot;showButton&quot;:true,&quot;buttonText&quot;:&quot;See More&quot;,&quot;buttonUrl&quot;:&quot;&quot;,&quot;openNewTab&quot;:false,&quot;isValidUrl&quot;:true}]" data-slidercontenttype="content-1" data-slidertype="image" data-textalign="left"><div class="slick-slider image slick-initialized" dir="ltr"><div class="slick-list"><div class="slick-track" style="width: 2435px; opacity: 1; transform: translate3d(-487px, 0px, 0px);"><div data-index="-1" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 487px;"><div><div class="eb-slider-item content-1" tabindex="-1" style="width: 100%; display: inline-block;"><img class="eb-slider-image" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Banner-Slider-2.jpg" alt="Slider 2"></div></div></div><div data-index="0" class="slick-slide slick-active slick-current" tabindex="-1" aria-hidden="false" style="outline: none; width: 487px;"><div><div class="eb-slider-item content-1" tabindex="-1" style="width: 100%; display: inline-block;"><img class="eb-slider-image" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Banner-Slider-1.jpg" alt="Slider 1"></div></div></div><div data-index="1" class="slick-slide" tabindex="-1" aria-hidden="true" style="outline: none; width: 487px;"><div><div class="eb-slider-item content-1" tabindex="-1" style="width: 100%; display: inline-block;"><img class="eb-slider-image" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Banner-Slider-2.jpg" alt="Slider 2"></div></div></div><div data-index="2" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 487px;"><div><div class="eb-slider-item content-1" tabindex="-1" style="width: 100%; display: inline-block;"><img class="eb-slider-image" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Banner-Slider-1.jpg" alt="Slider 1"></div></div></div><div data-index="3" tabindex="-1" class="slick-slide slick-cloned" aria-hidden="true" style="width: 487px;"><div><div class="eb-slider-item content-1" tabindex="-1" style="width: 100%; display: inline-block;"><img class="eb-slider-image" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Banner-Slider-2.jpg" alt="Slider 2"></div></div></div></div></div></div></div></div></div>



<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-isvwsd4 "><div class="eb-row-root-container eb-row-isvwsd4" data-id="eb-row-isvwsd4"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-0lwbdx0  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-0lwbdx0"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-okpuxkc "><div class="eb-advance-heading-wrapper eb-advance-heading-okpuxkc button-1" data-id="eb-advance-heading-okpuxkc"><h5 class="eb-ah-title">Follow me ——————–</h5></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-n8zuews  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-n8zuews"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-social"><div class="eb-parent-wrapper eb-parent-eb-social-links-7l2wja9 "><div class="eb-social-links-7l2wja9 eb-social-links-wrapper"><ul class="eb-socials"><li><a class="facebook-f-original hvr-grow" href="https://blocks.templately.com/max-boom-home-page/#" target="_self" rel="noopener"><i class="hvr-icon eb-social-icon fab fa-facebook-f"></i></a></li><li><a class="instagram-original hvr-grow" href="https://blocks.templately.com/max-boom-home-page/#" target="_self" rel="noopener"><i class="hvr-icon eb-social-icon fab fa-instagram"></i></a></li><li><a class="twitter-original hvr-grow" href="https://blocks.templately.com/max-boom-home-page/#" target="_self" rel="noopener"><i class="hvr-icon eb-social-icon fab fa-twitter"></i></a></li></ul></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-wrapper alignfull"><div class="eb-parent-wrapper eb-parent-eb-wrapper-p0bn2vf "><div class="eb-wrapper-outer eb-wrapper-p0bn2vf"><div class="eb-wrapper-inner"><div class="eb-wrapper-inner-blocks eb-wrapper-align-center">
<div class="wp-block-essential-blocks-row alignfull" id="about_section"><div class="eb-parent-wrapper eb-parent-eb-row-ivnzo3n "><div class="eb-row-root-container eb-row-ivnzo3n" data-id="eb-row-ivnzo3n"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-620gnbi  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-620gnbi"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-9crz5dn eb_animation eb__animated eb__fadeInLeft"><div class="eb-advance-heading-wrapper eb-advance-heading-9crz5dn button-1" data-id="eb-advance-heading-9crz5dn"><h2 class="eb-ah-title">I’m an award<br>winning photographer</h2></div></div></div>



<div class="wp-block-essential-blocks-advanced-image"><div class="eb-parent-wrapper eb-parent-eb-advanced-image-t7ujtuv eb_animation eb__animated eb__fadeInLeft"><figure class="eb-advanced-image-wrapper eb-advanced-image-t7ujtuv img-style-square caption-style-1 caption-horizontal-center caption-vertical-bottom bottom no-effect" data-id="eb-advanced-image-t7ujtuv"><div class="image-wrapper"><img decoding="async" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/awp-image.jpg" alt=""></div></figure></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-olmuk61 eb_animation wp-block-essential-blocks-column eb__animated eb__fadeInRight"><div class="eb-column-wrapper eb-column-olmuk61"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-3bg0a3m "><div class="eb-advance-heading-wrapper eb-advance-heading-3bg0a3m button-1" data-id="eb-advance-heading-3bg0a3m"><h2 class="eb-ah-title"></h2><p class="eb-ah-subtitle">Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever… it remembers little things, long after you have forgotten everything. Vivamus sit amet faucibus nisi. Quisque justo augue, aliquet non quam sit amet, varius rutrum arcu. Fusce nisi nulla, interdum a orci
quis, facilisis mollis lorem.  Nullam finibus placerat lacus quis scelerisque. Nullam a dictum sapien, ut ultrices arcu.</p></div></div></div>



<div class="wp-block-essential-blocks-advanced-image"><div class="eb-parent-wrapper eb-parent-eb-advanced-image-4pmlzpo "><figure class="eb-advanced-image-wrapper eb-advanced-image-4pmlzpo img-style-square caption-style-1 caption-horizontal-center caption-vertical-bottom bottom no-effect" data-id="eb-advanced-image-4pmlzpo"><div class="image-wrapper"><img decoding="async" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Signeture2.png" alt=""></div></figure></div></div>



<div class="wp-block-essential-blocks-button"><div class="eb-parent-wrapper eb-parent-eb-button-sg9723b "><div class="eb-button-wrapper eb-button-alignment eb-button-sg9723b"><div class="eb-button"><a class="eb-button-anchor" href="https://blocks.templately.com/max-boom-home-page/#" rel="noopener">Know more</a></div></div></div></div>



<div class="wp-block-essential-blocks-advanced-image"><div class="eb-parent-wrapper eb-parent-eb-advanced-image-3p2ygkw "><figure class="eb-advanced-image-wrapper eb-advanced-image-3p2ygkw img-style-square caption-style-1 caption-horizontal-center caption-vertical-bottom bottom no-effect" data-id="eb-advanced-image-3p2ygkw"><div class="image-wrapper"><img decoding="async" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Arrow-1.png" alt=""></div></figure></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-wrapper alignfull"><div class="eb-parent-wrapper eb-parent-eb-wrapper-twiwg72 "><div class="eb-wrapper-outer eb-wrapper-twiwg72"><div class="eb-wrapper-inner"><div class="eb-wrapper-inner-blocks eb-wrapper-align-center">
<div class="wp-block-essential-blocks-row alignfull" id="service_section"><div class="eb-parent-wrapper eb-parent-eb-row-ps71mqk "><div class="eb-row-root-container eb-row-ps71mqk" data-id="eb-row-ps71mqk"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-wde7zoq  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-wde7zoq"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-t834bvj eb_animation eb__animated eb__fadeInUp"><div class="eb-advance-heading-wrapper eb-advance-heading-t834bvj button-1" data-id="eb-advance-heading-t834bvj"><h2 class="eb-ah-title">My services</h2><p class="eb-ah-subtitle">Photography is a way of feeling, of touching, of loving. What you have caughton film is captured forever… it remembers little things.</p></div></div></div>
</div></div></div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-d6c6zmx "><div class="eb-row-root-container eb-row-d6c6zmx" data-id="eb-row-d6c6zmx"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-b4es56j  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-b4es56j"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-infobox"><div class="eb-parent-wrapper eb-parent-eb-infobox-s1r4wpk eb_animation eb__animated eb__fadeInLeft"><div class="eb-infobox-s1r4wpk eb-infobox-wrapper"><div class="infobox-wrapper-inner"><div class="icon-img-wrapper"><div class="eb-infobox-image-wrapper"><img decoding="async" class="eb-infobox-image" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Service-icon-1-1.png" alt="macbook"></div></div><div class="contents-wrapper"><h3 class="title">Product photography</h3><p class="description">Photography is a way of feeling, of touching, of loving.</p></div></div></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-bcxcpcw  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-bcxcpcw"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-infobox"><div class="eb-parent-wrapper eb-parent-eb-infobox-ca9w7gz eb_animation eb__animated eb__fadeInUp"><div class="eb-infobox-ca9w7gz eb-infobox-wrapper"><div class="infobox-wrapper-inner"><div class="icon-img-wrapper"><div class="eb-infobox-image-wrapper"><img decoding="async" class="eb-infobox-image" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Service-icon-2-1.png" alt="macbook"></div></div><div class="contents-wrapper"><h3 class="title">Sports photography</h3><p class="description">Photography is a way of feeling, of touching, of loving.</p></div></div></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-9cc4wn5  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-9cc4wn5"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-infobox"><div class="eb-parent-wrapper eb-parent-eb-infobox-8jt460z eb_animation eb__animated eb__fadeInRight"><div class="eb-infobox-8jt460z eb-infobox-wrapper"><div class="infobox-wrapper-inner"><div class="icon-img-wrapper"><div class="eb-infobox-image-wrapper"><img decoding="async" class="eb-infobox-image" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Service-icon-3-1.png" alt="macbook"></div></div><div class="contents-wrapper"><h3 class="title">Wedding photography</h3><p class="description">Photography is a way of feeling, of touching, of loving.</p></div></div></div></div></div>
</div></div></div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-o4mhu4y "><div class="eb-row-root-container eb-row-o4mhu4y" data-id="eb-row-o4mhu4y"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-sr9a1rm  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-sr9a1rm"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-infobox"><div class="eb-parent-wrapper eb-parent-eb-infobox-wsazls8 eb_animation eb__animated eb__fadeInLeft"><div class="eb-infobox-wsazls8 eb-infobox-wrapper"><div class="infobox-wrapper-inner"><div class="icon-img-wrapper"><div class="eb-infobox-image-wrapper"><img decoding="async" class="eb-infobox-image" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Service-icon-4-1.png" alt="macbook"></div></div><div class="contents-wrapper"><h3 class="title">Fashion photography</h3><p class="description">Photography is a way of feeling, of touching, of loving.</p></div></div></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-6kgu06k  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-6kgu06k"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-infobox"><div class="eb-parent-wrapper eb-parent-eb-infobox-5et2yic eb_animation eb__animated eb__fadeInUp"><div class="eb-infobox-5et2yic eb-infobox-wrapper"><div class="infobox-wrapper-inner"><div class="icon-img-wrapper"><div class="eb-infobox-image-wrapper"><img decoding="async" class="eb-infobox-image" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Service-icon-5-1.png" alt="macbook"></div></div><div class="contents-wrapper"><h3 class="title">Travel photography</h3><p class="description">Photography is a way of feeling, of touching, of loving.</p></div></div></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-ornnst3  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-ornnst3"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-infobox"><div class="eb-parent-wrapper eb-parent-eb-infobox-o6tyg5n eb_animation eb__animated eb__fadeInRight"><div class="eb-infobox-o6tyg5n eb-infobox-wrapper"><div class="infobox-wrapper-inner"><div class="icon-img-wrapper"><div class="eb-infobox-image-wrapper"><img decoding="async" class="eb-infobox-image" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Service-icon-6-2.png" alt="macbook"></div></div><div class="contents-wrapper"><h3 class="title">Wildlife photography</h3><p class="description">Photography is a way of feeling, of touching, of loving.</p></div></div></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-wrapper alignfull"><div class="eb-parent-wrapper eb-parent-eb-wrapper-zo0l0a5 "><div class="eb-wrapper-outer eb-wrapper-zo0l0a5"><div class="eb-wrapper-inner"><div class="eb-wrapper-inner-blocks eb-wrapper-align-center">
<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-9lzgadk "><div class="eb-row-root-container eb-row-9lzgadk" data-id="eb-row-9lzgadk"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-dbrcbto eb_animation wp-block-essential-blocks-column eb__animated eb__fadeInLeft"><div class="eb-column-wrapper eb-column-dbrcbto"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-xye38y0 "><div class="eb-advance-heading-wrapper eb-advance-heading-xye38y0 button-1" data-id="eb-advance-heading-xye38y0"><h3 class="eb-ah-title">Photography</h3></div></div></div>



<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-o5spi8l "><div class="eb-advance-heading-wrapper eb-advance-heading-o5spi8l button-1" data-id="eb-advance-heading-o5spi8l"><h2 class="eb-ah-title">Fashion Video</h2></div></div></div>



<div class="wp-block-essential-blocks-advanced-video"><div class="eb-parent-wrapper eb-parent-eb-advanced-video-bjzm41p "><div class="eb-advanced-video-wrapper eb-advanced-video-bjzm41p lightbox" data-id="eb-advanced-video-bjzm41p"><div id="myBtn-eb-advanced-video-bjzm41p" class="player-placeholder" style="background-image:url( https://static.live.templately.com/woocommerce/2022/10/d88af73d-maxboom-bg-04.png)"><img decoding="async" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/4b0096af-maxboom-icon-04.png" alt=""></div><div id="eb-modal-eb-advanced-video-bjzm41p" class="eb-modal-player" style="display: none;"><div class="eb-player-wrapper"><span id="close-eb-advanced-video-bjzm41p" class="eb-modal-close">×</span><div class="eb-player-option lightbox" data-id="eb-advanced-video-bjzm41p" data-url="https://www.youtube.com/watch?v=PnZx4ZOMyzI" data-option="lightbox" data-loop="false" data-muted="false" data-playing="false" data-overlay="false" data-controls="false" data-autoplay="true"><div class="eb-react-player" style="width: 100%; height: 100%;"><div style="width: 100%; height: 100%;"><iframe frameborder="0" allowfullscreen="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" title="Essential Blocks For Gutenberg - Instantly Design Stunning Websites With Ready Blocks" width="100%" height="100%" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/PnZx4ZOMyzI.html" id="widget2"></iframe></div></div></div></div></div></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-v3vvq30  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-v3vvq30"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-image"><div class="eb-parent-wrapper eb-parent-eb-advanced-image-c43h0g3 "><figure class="eb-advanced-image-wrapper eb-advanced-image-c43h0g3 img-style-square caption-style-1 caption-horizontal-center caption-vertical-bottom bottom no-effect" data-id="eb-advanced-image-c43h0g3"><div class="image-wrapper"><img decoding="async" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/Arrow-2.png" alt=""></div></figure></div></div>



<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-ec2yxpc eb_animation eb__animated eb__fadeInRight"><div class="eb-advance-heading-wrapper eb-advance-heading-ec2yxpc button-1" data-id="eb-advance-heading-ec2yxpc"><h3 class="eb-ah-title">Photography</h3></div></div></div>



<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-j8b0194 eb_animation eb__animated eb__fadeInRight"><div class="eb-advance-heading-wrapper eb-advance-heading-j8b0194 button-1" data-id="eb-advance-heading-j8b0194"><h2 class="eb-ah-title">Awesome work</h2><p class="eb-ah-subtitle">Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever… it remembers little things, long after you have forgotten everything. Vivamus sit amet faucibus nisi. Quisque justo augue, aliquet non quam sit amet, varius rutrum arcu. Fusce nisi nulla, interdum a orci
quis, facilisis mollis lorem.  Nullam finibus placerat lacus quis  scelerisque. Nullam a dictum sapien, ut ultrices arcu.</p></div></div></div>



<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-7b4yeui "><div class="eb-row-root-container eb-row-7b4yeui" data-id="eb-row-7b4yeui"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-zecr6ox  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-zecr6ox"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-image"><div class="eb-parent-wrapper eb-parent-eb-advanced-image-mrz49xh "><figure class="eb-advanced-image-wrapper eb-advanced-image-mrz49xh img-style-square caption-style-1 caption-horizontal-center caption-vertical-bottom bottom no-effect" data-id="eb-advanced-image-mrz49xh"><div class="image-wrapper"><img decoding="async" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/work-image-1.jpg" alt=""></div></figure></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-fotc3qj  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-fotc3qj"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-image"><div class="eb-parent-wrapper eb-parent-eb-advanced-image-nuthfog "><figure class="eb-advanced-image-wrapper eb-advanced-image-nuthfog img-style-square caption-style-1 caption-horizontal-center caption-vertical-bottom bottom no-effect" data-id="eb-advanced-image-nuthfog"><div class="image-wrapper"><img decoding="async" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/work-image-2.jpg" alt=""></div></figure></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-wrapper alignfull"><div class="eb-parent-wrapper eb-parent-eb-wrapper-m9ezznr "><div class="eb-wrapper-outer eb-wrapper-m9ezznr"><div class="eb-wrapper-inner"><div class="eb-wrapper-inner-blocks eb-wrapper-align-center">
<div class="wp-block-essential-blocks-row alignfull" id="instagram_section"><div class="eb-parent-wrapper eb-parent-eb-row-ftquudj "><div class="eb-row-root-container eb-row-ftquudj" data-id="eb-row-ftquudj"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-mal3poh eb_animation wp-block-essential-blocks-column eb__animated eb__fadeInUp"><div class="eb-column-wrapper eb-column-mal3poh"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-yxsjwlv "><div class="eb-advance-heading-wrapper eb-advance-heading-yxsjwlv button-1" data-id="eb-advance-heading-yxsjwlv"><h2 class="eb-ah-title">More on Instagram</h2><p class="eb-ah-subtitle">Photography is a way of feeling, of touching, of loving. What you have caught on film is captured forever… it remembers little things, long after you have forgotten everything. </p></div></div></div>



<div class="wp-block-essential-blocks-button"><div class="eb-parent-wrapper eb-parent-eb-button-pjwea3x "><div class="eb-button-wrapper eb-button-alignment eb-button-pjwea3x"><div class="eb-button"><a class="eb-button-anchor" href="https://blocks.templately.com/max-boom-home-page/" rel="noopener"><i class="fab fa-instagram eb-button-icon eb-button-icon-left hvr-icon"></i>@maxboom on instagram</a></div></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-wrapper alignfull"><div class="eb-parent-wrapper eb-parent-eb-wrapper-l368jw6 "><div class="eb-wrapper-outer eb-wrapper-l368jw6"><div class="eb-wrapper-inner"><div class="eb-wrapper-inner-blocks eb-wrapper-align-center">
<div class="wp-block-essential-blocks-row alignfull" id="blog_section"><div class="eb-parent-wrapper eb-parent-eb-row-ju92s74 "><div class="eb-row-root-container eb-row-ju92s74" data-id="eb-row-ju92s74"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-23vytov  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-23vytov"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-etbq70u eb_animation eb__animated eb__fadeInUp"><div class="eb-advance-heading-wrapper eb-advance-heading-etbq70u button-1" data-id="eb-advance-heading-etbq70u"><h2 class="eb-ah-title">My Blog</h2><p class="eb-ah-subtitle">Photography is a way of feeling, of touching, of loving. What you have caughton film is captured forever… it remembers little things.</p></div></div></div>
</div></div></div>
</div></div></div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-post-grid-8wnw3qx eb_animation eb__animated eb__zoomIn">
    <div class="eb-post-grid-8wnw3qx style-1  eb-post-grid-wrapper" data-id="eb-post-grid-8wnw3qx" data-querydata="{&quot;source&quot;:&quot;post&quot;,&quot;author&quot;:&quot;[]&quot;,&quot;per_page&quot;:&quot;3&quot;,&quot;offset&quot;:&quot;0&quot;,&quot;orderby&quot;:&quot;date&quot;,&quot;order&quot;:&quot;asc&quot;,&quot;include&quot;:&quot;&quot;,&quot;exclude&quot;:&quot;&quot;,&quot;rest_base&quot;:&quot;posts&quot;,&quot;rest_namespace&quot;:&quot;wp\/v2&quot;,&quot;taxonomies&quot;:{&quot;category&quot;:{&quot;name&quot;:&quot;Categories&quot;,&quot;rest_base&quot;:&quot;categories&quot;,&quot;rest_namespace&quot;:&quot;wp\/v2&quot;,&quot;value&quot;:&quot;[{\&quot;value\&quot;:72,\&quot;label\&quot;:\&quot;MaxBoom MyBlog\&quot;}]&quot;}}}" data-attributes="{&quot;thumbnailSize&quot;:&quot;&quot;,&quot;loadMoreOptions&quot;:{&quot;enableMorePosts&quot;:false,&quot;loadMoreType&quot;:&quot;1&quot;,&quot;loadMoreButtonTxt&quot;:&quot;Load More&quot;,&quot;alignment&quot;:&quot;center&quot;,&quot;totalPosts&quot;:3},&quot;showSearch&quot;:false,&quot;showTaxonomyFilter&quot;:false,&quot;enableAjaxSearch&quot;:false,&quot;addIcon&quot;:false,&quot;iconPosition&quot;:&quot;left&quot;,&quot;icon&quot;:&quot;fas fa-chevron-right&quot;,&quot;preset&quot;:&quot;style-1&quot;,&quot;defaultFilter&quot;:&quot;all&quot;,&quot;version&quot;:&quot;&quot;,&quot;showThumbnail&quot;:true,&quot;showTitle&quot;:true,&quot;titleLength&quot;:&quot;&quot;,&quot;titleTag&quot;:&quot;h2&quot;,&quot;showContent&quot;:true,&quot;contentLength&quot;:29,&quot;expansionIndicator&quot;:&quot;...&quot;,&quot;showReadMore&quot;:true,&quot;readmoreText&quot;:&quot;Read More&quot;,&quot;showMeta&quot;:true,&quot;headerMeta&quot;:&quot;[{\&quot;value\&quot;:\&quot;author\&quot;,\&quot;label\&quot;:\&quot;Author Name\&quot;},{\&quot;value\&quot;:\&quot;date\&quot;,\&quot;label\&quot;:\&quot;Published Date\&quot;}]&quot;,&quot;footerMeta&quot;:&quot;[]&quot;,&quot;authorPrefix&quot;:&quot;by&quot;,&quot;datePrefix&quot;:&quot;on&quot;}">

		

<article class="ebpg-grid-post ebpg-post-grid-column" data-id="22718"><div class="ebpg-grid-post-holder"><div class="ebpg-entry-wrapper"><div class="ebpg-entry-media">
                <div class="ebpg-entry-thumbnail">
                    <a class="ebpg-post-link-wrapper" href="https://blocks.templately.com/%ef%bf%bc%ef%bf%bctraveling-europe-by-campervanour-tips-for-van-life-europe/"></a>
                    <img fetchpriority="high" decoding="async" width="533" height="300" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/mb-post-img-1.jpg" class="attachment- size- wp-post-image" alt="">
                </div>
            </div><header class="ebpg-entry-header">
            <h2 class="ebpg-entry-title">
                <a class="ebpg-grid-post-link" href="https://blocks.templately.com/%ef%bf%bc%ef%bf%bctraveling-europe-by-campervanour-tips-for-van-life-europe/" title="Traveling Europe by Campervan Our Tips for “Van Life Europe">Traveling Europe by Campervan Our Tips for “Van Life Europe</a>
            </h2>
        </header><div class="ebpg-entry-meta ebpg-header-meta"><div class="ebpg-entry-meta-items"><span class="ebpg-posted-by">
            by <a href="https://blocks.templately.com/author/shadab/" title="shadab" rel="author">shadab</a>
        </span><span class="ebpg-posted-on">
            on March 26, 2022
        </span></div></div><div class="ebpg-entry-content"><div class="ebpg-grid-post-excerpt">
            <p>It has almost been a year that San and I bought a campervan. In this time, we have driven around Europe….</p>
        </div><div class="ebpg-readmore-btn">
            <a href="https://blocks.templately.com/%ef%bf%bc%ef%bf%bctraveling-europe-by-campervanour-tips-for-van-life-europe/"> Read More </a>
        </div></div><div class="ebpg-entry-meta ebpg-footer-meta"><div class="ebpg-entry-meta-items"></div></div></div></div></article><article class="ebpg-grid-post ebpg-post-grid-column" data-id="22728"><div class="ebpg-grid-post-holder"><div class="ebpg-entry-wrapper"><div class="ebpg-entry-media">
                <div class="ebpg-entry-thumbnail">
                    <a class="ebpg-post-link-wrapper" href="https://blocks.templately.com/%ef%bf%bc%ef%bf%bcholiday-beauty-look-to-rulethem-all/"></a>
                    <img decoding="async" width="533" height="300" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/mb-post-img-2.jpg" class="attachment- size- wp-post-image" alt="">
                </div>
            </div><header class="ebpg-entry-header">
            <h2 class="ebpg-entry-title">
                <a class="ebpg-grid-post-link" href="https://blocks.templately.com/%ef%bf%bc%ef%bf%bcholiday-beauty-look-to-rulethem-all/" title="Holiday Beauty Look to Rule Them All">Holiday Beauty Look to Rule Them All</a>
            </h2>
        </header><div class="ebpg-entry-meta ebpg-header-meta"><div class="ebpg-entry-meta-items"><span class="ebpg-posted-by">
            by <a href="https://blocks.templately.com/author/shadab/" title="shadab" rel="author">shadab</a>
        </span><span class="ebpg-posted-on">
            on March 26, 2022
        </span></div></div><div class="ebpg-entry-content"><div class="ebpg-grid-post-excerpt">
            <p>Life since Covid has made me a lot more of a minimal, bare-face type of a girl. But when I popped into Nordstrom to pick up……</p>
        </div><div class="ebpg-readmore-btn">
            <a href="https://blocks.templately.com/%ef%bf%bc%ef%bf%bcholiday-beauty-look-to-rulethem-all/"> Read More </a>
        </div></div><div class="ebpg-entry-meta ebpg-footer-meta"><div class="ebpg-entry-meta-items"></div></div></div></div></article><article class="ebpg-grid-post ebpg-post-grid-column" data-id="22732"><div class="ebpg-grid-post-holder"><div class="ebpg-entry-wrapper"><div class="ebpg-entry-media">
                <div class="ebpg-entry-thumbnail">
                    <a class="ebpg-post-link-wrapper" href="https://blocks.templately.com/%ef%bf%bc%ef%bf%bcpotential-gordon-haywardtrade-scenarios/"></a>
                    <img decoding="async" width="533" height="300" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/mb-post-img-3.jpg" class="attachment- size- wp-post-image" alt="">
                </div>
            </div><header class="ebpg-entry-header">
            <h2 class="ebpg-entry-title">
                <a class="ebpg-grid-post-link" href="https://blocks.templately.com/%ef%bf%bc%ef%bf%bcpotential-gordon-haywardtrade-scenarios/" title="Potential Gordon Hayward Trade Scenarios">Potential Gordon Hayward Trade Scenarios</a>
            </h2>
        </header><div class="ebpg-entry-meta ebpg-header-meta"><div class="ebpg-entry-meta-items"><span class="ebpg-posted-by">
            by <a href="https://blocks.templately.com/author/shadab/" title="shadab" rel="author">shadab</a>
        </span><span class="ebpg-posted-on">
            on March 26, 2022
        </span></div></div><div class="ebpg-entry-content"><div class="ebpg-grid-post-excerpt">
            <p>It has almost been a year that San and I bought a campervan. In this time, we have driven around Europe….</p>
        </div><div class="ebpg-readmore-btn">
            <a href="https://blocks.templately.com/%ef%bf%bc%ef%bf%bcpotential-gordon-haywardtrade-scenarios/"> Read More </a>
        </div></div><div class="ebpg-entry-meta ebpg-footer-meta"><div class="ebpg-entry-meta-items"></div></div></div></div></article>    </div>
</div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-wrapper alignfull"><div class="eb-parent-wrapper eb-parent-eb-wrapper-v5fif17 "><div class="eb-wrapper-outer eb-wrapper-v5fif17"><div class="eb-wrapper-inner"><div class="eb-wrapper-inner-blocks eb-wrapper-align-center">
<div class="wp-block-essential-blocks-row alignfull" id="testimonial_section"><div class="eb-parent-wrapper eb-parent-eb-row-a817zn9 "><div class="eb-row-root-container eb-row-a817zn9" data-id="eb-row-a817zn9"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-spcl3r0  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-spcl3r0"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-z6oobj6 eb_animation eb__animated eb__fadeInLeft"><div class="eb-advance-heading-wrapper eb-advance-heading-z6oobj6 button-1" data-id="eb-advance-heading-z6oobj6"><h2 class="eb-ah-title">What customers<br>think about me?</h2></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-yw81ydx  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-yw81ydx"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-ukjiho9 eb_animation eb__animated eb__fadeInRight"><div class="eb-advance-heading-wrapper eb-advance-heading-ukjiho9 button-1" data-id="eb-advance-heading-ukjiho9"><h2 class="eb-ah-title"></h2><p class="eb-ah-subtitle">Photography is a way of feeling, of touching, of loving. What you have
caughton film is captured forever… it remembers little things.</p></div></div></div>
</div></div></div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-1x1kbbj "><div class="eb-row-root-container eb-row-1x1kbbj" data-id="eb-row-1x1kbbj"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-irwcpkb  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-irwcpkb"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-zscy5e2 eb_animation eb__animated eb__fadeInLeft"><div class="eb-row-root-container eb-row-zscy5e2" data-id="eb-row-zscy5e2"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-17jysza  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-17jysza"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-testimonial"><div class="eb-parent-wrapper eb-parent-eb-testimonial-diwcouk "><div class="eb-testimonial-wrapper eb-testimonial-diwcouk" data-id="eb-testimonial-diwcouk"><div class="eb-testimonial-container"><div class="eb-avatar-container avatar-inline "><div class="image-container"><div class="eb-avatar-style"></div></div><div class="eb-userinfo-container"><p class="eb-testimonial-username">Lachlan Dempsey</p><p class="eb-testimonial-company">CEO Google Inc</p></div></div><div class="eb-description-container"><p class="eb-testimonial-description">It has almost been a year that San and I bought a campervan. In this time, we have driven around Europe.</p></div></div></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-0xremhm  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-0xremhm"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-1pfk9jg eb_animation eb__animated eb__zoomIn"><div class="eb-row-root-container eb-row-1pfk9jg" data-id="eb-row-1pfk9jg"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-cvf0s27  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-cvf0s27"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-testimonial"><div class="eb-parent-wrapper eb-parent-eb-testimonial-063pf0s "><div class="eb-testimonial-wrapper eb-testimonial-063pf0s" data-id="eb-testimonial-063pf0s"><div class="eb-testimonial-container"><div class="eb-avatar-container avatar-inline "><div class="image-container"><div class="eb-avatar-style"></div></div><div class="eb-userinfo-container"><p class="eb-testimonial-username">bruce mars</p><p class="eb-testimonial-company">CEO Google Inc</p></div></div><div class="eb-description-container"><p class="eb-testimonial-description">It has almost been a year that San and I bought a campervan. In this time, we have driven around Europe.</p></div></div></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-7sx4db3  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-7sx4db3"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-cwf3cc7 eb_animation eb__animated eb__fadeInRight"><div class="eb-row-root-container eb-row-cwf3cc7" data-id="eb-row-cwf3cc7"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-rf2hwj9  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-rf2hwj9"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-testimonial"><div class="eb-parent-wrapper eb-parent-eb-testimonial-alkecrn "><div class="eb-testimonial-wrapper eb-testimonial-alkecrn" data-id="eb-testimonial-alkecrn"><div class="eb-testimonial-container"><div class="eb-avatar-container avatar-inline "><div class="image-container"><div class="eb-avatar-style"></div></div><div class="eb-userinfo-container"><p class="eb-testimonial-username">Etty Fidele</p><p class="eb-testimonial-company">CEO Google Inc</p></div></div><div class="eb-description-container"><p class="eb-testimonial-description">It has almost been a year that San and I bought a campervan. In this time, we have driven around Europe.</p></div></div></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-wrapper alignfull"><div class="eb-parent-wrapper eb-parent-eb-wrapper-kipqt11 "><div class="eb-wrapper-outer eb-wrapper-kipqt11"><div class="eb-wrapper-inner"><div class="eb-wrapper-inner-blocks eb-wrapper-align-center">
<div class="wp-block-essential-blocks-row alignfull" id="footer_section"><div class="eb-parent-wrapper eb-parent-eb-row-swo2p3o "><div class="eb-row-root-container eb-row-swo2p3o" data-id="eb-row-swo2p3o"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-lidrk9t  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-lidrk9t"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-xh9y6sa "><div class="eb-advance-heading-wrapper eb-advance-heading-xh9y6sa button-1" data-id="eb-advance-heading-xh9y6sa"><h2 class="eb-ah-title">Lat’s talk</h2></div></div></div>



<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-dtfj9mj "><div class="eb-advance-heading-wrapper eb-advance-heading-dtfj9mj button-1" data-id="eb-advance-heading-dtfj9mj"><p class="eb-ah-title">maxboom@gmail.com</p><p class="eb-ah-subtitle">754 584 776 5846</p></div></div></div>



<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-vbile62 "><div class="eb-advance-heading-wrapper eb-advance-heading-vbile62 button-1" data-id="eb-advance-heading-vbile62"><h2 class="eb-ah-title">Follow me</h2></div></div></div>



<div class="wp-block-essential-blocks-social"><div class="eb-parent-wrapper eb-parent-eb-social-links-sfxfq8s "><div class="eb-social-links-sfxfq8s eb-social-links-wrapper"><ul class="eb-socials"><li><a class="facebook-f-original  " href="https://blocks.templately.com/max-boom-home-page/#" target="_self" rel="noopener"><i class="hvr-icon eb-social-icon fab fa-facebook-f"></i></a></li><li><a class="instagram-original  " href="https://blocks.templately.com/max-boom-home-page/#" target="_self" rel="noopener"><i class="hvr-icon eb-social-icon fab fa-instagram"></i></a></li><li><a class="twitter-original  " href="https://blocks.templately.com/max-boom-home-page/#" target="_self" rel="noopener"><i class="hvr-icon eb-social-icon fab fa-twitter"></i></a></li></ul></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-aja3wcl  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-aja3wcl"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-mm8xura "><div class="eb-advance-heading-wrapper eb-advance-heading-mm8xura button-1" data-id="eb-advance-heading-mm8xura"><h2 class="eb-ah-title">Quick Link</h2></div></div></div>



<div class="wp-block-essential-blocks-feature-list"><div class="eb-parent-wrapper eb-parent-eb-feature-list-z3y1dy2 "><div class="eb-feature-list-z3y1dy2 eb-feature-list-wrapper -icon-position-left -tablet-icon-position-left -mobile-icon-position-left eb-feature-list-left"><ul class="eb-feature-list-items circle stacked"><li class="eb-feature-list-item" data-new-tab="false" data-icon-type="none" data-icon="fas fa-check" data-link=""><div class="eb-feature-list-content-box"><h3 class="eb-feature-list-title">Home</h3><p class="eb-feature-list-content"></p></div></li><li class="eb-feature-list-item" data-new-tab="false" data-icon-type="none" data-icon="fas fa-times" data-link=""><div class="eb-feature-list-content-box"><h3 class="eb-feature-list-title">About</h3><p class="eb-feature-list-content"></p></div></li><li class="eb-feature-list-item" data-new-tab="false" data-icon-type="none" data-icon="fas fa-anchor" data-link=""><div class="eb-feature-list-content-box"><h3 class="eb-feature-list-title">Services</h3><p class="eb-feature-list-content"></p></div></li><li class="eb-feature-list-item" data-new-tab="false" data-icon-type="none" data-icon="fas fa-check" data-link=""><div class="eb-feature-list-content-box"><h3 class="eb-feature-list-title">Project</h3><p class="eb-feature-list-content"></p></div></li><li class="eb-feature-list-item" data-new-tab="false" data-icon-type="none" data-icon="fas fa-check" data-link=""><div class="eb-feature-list-content-box"><h3 class="eb-feature-list-title">Pricing</h3><p class="eb-feature-list-content"></p></div></li><li class="eb-feature-list-item" data-new-tab="false" data-icon-type="none" data-icon="fas fa-check" data-link=""><div class="eb-feature-list-content-box"><h3 class="eb-feature-list-title">FAQ</h3><p class="eb-feature-list-content"></p></div></li><li class="eb-feature-list-item" data-new-tab="false" data-icon-type="none" data-icon="fas fa-check" data-link=""><div class="eb-feature-list-content-box"><h3 class="eb-feature-list-title">Contact</h3><p class="eb-feature-list-content"></p></div></li></ul></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-10bb4cq  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-10bb4cq"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-4zsk7he "><div class="eb-advance-heading-wrapper eb-advance-heading-4zsk7he button-1" data-id="eb-advance-heading-4zsk7he"><h2 class="eb-ah-title">Help Center</h2></div></div></div>



<div class="wp-block-essential-blocks-feature-list"><div class="eb-parent-wrapper eb-parent-eb-feature-list-gxhq19y "><div class="eb-feature-list-gxhq19y eb-feature-list-wrapper -icon-position-left -tablet-icon-position-left -mobile-icon-position-left eb-feature-list-left"><ul class="eb-feature-list-items circle stacked"><li class="eb-feature-list-item" data-new-tab="false" data-icon-type="none" data-icon="fas fa-check" data-link=""><div class="eb-feature-list-content-box"><h3 class="eb-feature-list-title">Terms</h3><p class="eb-feature-list-content"></p></div></li><li class="eb-feature-list-item" data-new-tab="false" data-icon-type="none" data-icon="fas fa-times" data-link=""><div class="eb-feature-list-content-box"><h3 class="eb-feature-list-title">Privacy</h3><p class="eb-feature-list-content"></p></div></li><li class="eb-feature-list-item" data-new-tab="false" data-icon-type="none" data-icon="fas fa-anchor" data-link=""><div class="eb-feature-list-content-box"><h3 class="eb-feature-list-title">Support</h3><p class="eb-feature-list-content"></p></div></li></ul></div></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-pspid37  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-pspid37"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-ereu0kq "><div class="eb-advance-heading-wrapper eb-advance-heading-ereu0kq button-1" data-id="eb-advance-heading-ereu0kq"><h2 class="eb-ah-title">Newsletter</h2><p class="eb-ah-subtitle">Subscribe and check out my<br>
weekly blog</p></div></div></div>



<div class="wp-block-essential-blocks-fluent-forms">
	<div class="eb-parent-eb-fluent-form-jddu9wj  eb-parent-wrapper">
		<div class="eb-fluent-form-jddu9wj eb-fluent-form-wrapper eb-fluentform-hide-labels eb-fluentform-default-subscription">
			<div class="fluentform ff-default fluentform_wrapper_2 ffs_default_wrap"><form data-form_id="2" id="fluentform_2" class="frm-fluent-form fluent_form_2 ff-el-form-top ff_form_instance_2_1 ffs_default ff-form-loaded" data-form_instance="ff_form_instance_2_1" method="POST"><fieldset style="border: none!important;margin: 0!important;padding: 0!important;background-color: transparent!important;box-shadow: none!important;outline: none!important; min-inline-size: 100%;">
                    <legend class="ff_screen_reader_title" style="display: block; margin: 0!important;padding: 0!important;height: 0!important;text-indent: -999999px;width: 0!important;overflow:hidden;">Subscription Form</legend><input type="hidden" name="__fluent_form_embded_post_id" value="22595"><input type="hidden" id="_fluentform_2_fluentformnonce" name="_fluentform_2_fluentformnonce" value="3087dcece3"><input type="hidden" name="_wp_http_referer" value="/max-boom-home-page/"><div data-name="ff_cn_id_1" class="ff-t-container ff-column-container ff_columns_total_2  "><div class="ff-t-cell ff-t-column-1" style="flex-basis: 50%;"><div class="ff-el-group"><div class="ff-el-input--content"><input type="email" name="email" id="ff_2_email" class="ff-el-form-control" placeholder="Your Email Address" data-name="email" aria-invalid="false" aria-required="true"></div></div></div><div class="ff-t-cell ff-t-column-2" style="flex-basis: 50%;"><div class="ff-el-group ff-text-left ff_submit_btn_wrapper ff_submit_btn_wrapper_custom"><button class="ff-btn ff-btn-submit ff-btn-md ff_btn_style wpf_has_custom_css" type="submit" name="custom_submit_button-2_1" data-name="custom_submit_button-2_1">Subscribe</button><style>form.fluent_form_2 .wpf_has_custom_css.ff-btn-submit { background-color:#409EFF;border-color:#409EFF;color:#ffffff;min-width:100%; }form.fluent_form_2 .wpf_has_custom_css.ff-btn-submit:hover { background-color:#ffffff;border-color:#409EFF;color:#409EFF;min-width:100%; } </style></div></div></div></fieldset></form><div id="fluentform_2_errors" class="ff-errors-in-stack ff_form_instance_2_1 ff-form-loading_errors ff_form_instance_2_1_errors"></div></div>        <script type="text/javascript">
            window.fluent_form_ff_form_instance_2_1 = {"id":"2","settings":{"layout":{"labelPlacement":"top","helpMessagePlacement":"with_label","errorMessagePlacement":"inline","asteriskPlacement":"asterisk-right"},"restrictions":{"denyEmptySubmission":{"enabled":false}}},"form_instance":"ff_form_instance_2_1","form_id_selector":"fluentform_2","rules":{"email":{"required":{"value":true,"message":"This field is required"},"email":{"value":true,"message":"This field must contain a valid email"}}}};
                    </script>
        		</div>
	</div>
</div>
</div></div></div>
</div></div></div></div></div>



<div class="wp-block-essential-blocks-row alignfull"><div class="eb-parent-wrapper eb-parent-eb-row-ybxl3xx "><div class="eb-row-root-container eb-row-ybxl3xx" data-id="eb-row-ybxl3xx"><div class="eb-row-wrapper"><div class="eb-row-inner">
<div class="eb-parent-wrapper eb-parent-eb-column-lk8clxq  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-lk8clxq"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-image footer_img_section"><div class="eb-parent-wrapper eb-parent-eb-advanced-image-zwlumtx "><figure class="eb-advanced-image-wrapper eb-advanced-image-zwlumtx img-style-rounded caption-style-1 caption-horizontal-center caption-vertical-bottom bottom no-effect" data-id="eb-advanced-image-zwlumtx"><div class="image-wrapper"><img decoding="async" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/8d9b236c-maxboom-logo.png" alt=""></div></figure></div></div>
</div></div></div>



<div class="eb-parent-wrapper eb-parent-eb-column-fskzyvi  wp-block-essential-blocks-column"><div class="eb-column-wrapper eb-column-fskzyvi"><div class="eb-column-inner">
<div class="wp-block-essential-blocks-advanced-heading"><div class="eb-parent-wrapper eb-parent-eb-advance-heading-opm1xuy "><div class="eb-advance-heading-wrapper eb-advance-heading-opm1xuy button-1" data-id="eb-advance-heading-opm1xuy"><h2 class="eb-ah-title">maxboom© 2020. All rights reserved.</h2></div></div></div>
</div></div></div>
</div></div></div></div></div>
</div></div></div></div></div>
	</div><!-- .entry-content -->

	</article><!-- #post-22595 -->

				</main><!-- #main -->
			</div><!-- #primary -->
		</div><!-- #flexia-wrapper -->
	</div><!-- #content --> 
</div><!-- #page -->



	<div class="flexia-search-overlay">
		<svg class="hidden">
			<defs>
				<symbol id="icon-cross" viewBox="0 0 24 24">
					<title>cross</title>
					<path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path>
				</symbol>
			</defs>
		</svg>
		<button id="btn-search-close" class="btn--search-close" aria-label="Close search form"><svg class="icon-search-close icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
		<div class="search--form-wrapper">
			<form class="search__form" action="https://blocks.templately.com/" method="get">
				<div class="search--input-wrapper" data-text="">
					<input class="search__input" name="s" type="search" id="search" placeholder="Search..." autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" value="">
				</div>
				<label class="search__info">Hit ENTER to search or ESC to close</label>
			</form>
		</div>
	</div><!-- /search overlay -->

	<script type="text/javascript">
		var ajaxurl = "https://blocks.templately.com/wp-admin/admin-ajax.php";
		jQuery('.flexia-cart-product-action i').click(function() {
			console.log('Remove Click');
			var product_id = jQuery(this).attr("data-id");

			var data = {
				'action': 'product_remove',
				'product_id': product_id
			};

			jQuery.post(ajaxurl, data, function(response) {
				jQuery('#menu-cart-items').html(response);
			});
			return false;
		});

		jQuery('body').bind('added_to_cart', function(event, fragments, cart_hash) {

			var data = {
				'action': 'cart_items_html',
			};

			jQuery.post(ajaxurl, data, function(response) {
				jQuery('#menu-cart-items').html(response);
			});
			return false;
		});
	</script>
		<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
	<link data-minify="1" rel="stylesheet" id="wc-blocks-style-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/wc-blocks.css" type="text/css" media="all">
<link rel="stylesheet" id="essential-blocks-animation-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/animate.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="essential-blocks-frontend-style-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/style(1).css" type="text/css" media="all">
<style id="essential-blocks-frontend-style-inline-css" type="text/css">

            :root {
                --eb-global-primary-color: #101828;
--eb-global-secondary-color: #475467;
--eb-global-tertiary-color: #98A2B3;
--eb-global-text-color: #475467;
--eb-global-heading-color: #1D2939;
--eb-global-link-color: #444CE7;
--eb-global-background-color: #F9FAFB;
--eb-global-button-text-color: #FFFFFF;
--eb-global-button-background-color: #101828;
--eb-gradient-primary-color: linear-gradient(90deg, hsla(259, 84%, 78%, 1) 0%, hsla(206, 67%, 75%, 1) 100%);
--eb-gradient-secondary-color: linear-gradient(90deg, hsla(18, 76%, 85%, 1) 0%, hsla(203, 69%, 84%, 1) 100%);
--eb-gradient-tertiary-color: linear-gradient(90deg, hsla(248, 21%, 15%, 1) 0%, hsla(250, 14%, 61%, 1) 100%);
--eb-gradient-background-color: linear-gradient(90deg, rgb(250, 250, 250) 0%, rgb(233, 233, 233) 49%, rgb(244, 243, 243) 100%);

            }
        
</style>
<link data-minify="1" rel="stylesheet" id="essential-blocks-fontawesome-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/all.min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="essential-blocks-block-common-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/block-common.css" type="text/css" media="all">
<link rel="stylesheet" id="essential-blocks-hover-css-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/hover-min.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="essential-blocks-slick-style-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/slick.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="essential-blocks-common-style-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/eb-common.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="essential-blocks-pro-frontend-style-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/style(2).css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="essential-blocks-fluent-form-styles-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/fluent-forms-public.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="essential-blocks-fluentform-public-default-frontend-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/fluentform-public-default.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="fluent-form-styles-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/fluent-forms-public.css" type="text/css" media="all">
<link data-minify="1" rel="stylesheet" id="fluentform-public-default-css" href="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/fluentform-public-default.css" type="text/css" media="all">
<style id="core-block-supports-inline-css" type="text/css">
.wp-container-core-navigation-layout-1.wp-container-core-navigation-layout-1{justify-content:flex-end;}
</style>

<script type="text/javascript" id="essential-blocks-blocks-localize-js-extra">
/* <![CDATA[ */
var eb_conditional_localize = {"editor_type":""};
var EssentialBlocksLocalize = {"eb_plugins_url":"https:\/\/blocks.templately.com\/wp-content\/plugins\/essential-blocks\/","image_url":"https:\/\/blocks.templately.com\/wp-content\/plugins\/essential-blocks\/assets\/images","eb_wp_version":"6.4","eb_version":"4.4.11","eb_admin_url":"https:\/\/blocks.templately.com\/wp-admin\/","rest_rootURL":"https:\/\/blocks.templately.com\/wp-json\/","ajax_url":"https:\/\/blocks.templately.com\/wp-admin\/admin-ajax.php","nft_nonce":"cabcb2f01c","post_grid_pagination_nonce":"d292a00385","placeholder_image":"https:\/\/blocks.templately.com\/wp-content\/plugins\/essential-blocks\/assets\/images\/placeholder.png","is_pro_active":"true","upgrade_pro_url":"https:\/\/essential-blocks.com\/upgrade"};
var EssentialBlocksProLocalize = {"eb_pro_plugins_url":"https:\/\/blocks.templately.com\/wp-content\/plugins\/essential-blocks-pro\/","image_url":"https:\/\/blocks.templately.com\/wp-content\/plugins\/essential-blocks-pro\/assets\/images","eb_pro_version":"1.5.0","ajax_url":"https:\/\/blocks.templately.com\/wp-admin\/admin-ajax.php","adv_search_nonce":"576031d47e","eb_dynamic_tags":"eb-dynamic-tags","data_table_nonce":"6a60deee5a","recaptcha_type":null,"post_grid_search_nonce":"88eb61f582"};
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/eb-blocks-localize.js.download" id="essential-blocks-blocks-localize-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/owl.carousel.min.js.download" id="easyjobsowl-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/easyjobs-public.min.js.download" id="easyjobs-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/pdfobject.min.js.download" id="embedpress-pdfobject-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/initplyr.js.download" id="initplyr-js"></script>
<script type="text/javascript" id="embedpress-front-js-extra">
/* <![CDATA[ */
var eplocalize = {"ajaxurl":"https:\/\/blocks.templately.com\/wp-admin\/admin-ajax.php","is_pro_plugin_active":"1"};
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/front.js.download" id="embedpress-front-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/vimeo-player.js.download" id="vimeo-player-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/react.min.js.download" id="react-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/deprecated.min.js.download" id="wp-deprecated-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/dom.min.js.download" id="wp-dom-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/react-dom.min.js.download" id="react-dom-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/escape-html.min.js.download" id="wp-escape-html-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/element.min.js.download" id="wp-element-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/is-shallow-equal.min.js.download" id="wp-is-shallow-equal-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/i18n.min.js.download" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
/* <![CDATA[ */
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/keycodes.min.js.download" id="wp-keycodes-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/priority-queue.min.js.download" id="wp-priority-queue-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/compose.min.js.download" id="wp-compose-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/private-apis.min.js.download" id="wp-private-apis-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/redux-routine.min.js.download" id="wp-redux-routine-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/data.min.js.download" id="wp-data-js"></script>
<script type="text/javascript" id="wp-data-js-after">
/* <![CDATA[ */
( function() {
	var userId = 0;
	var storageKey = "WP_DATA_USER_" + userId;
	wp.data
		.use( wp.data.plugins.persistence, { storageKey: storageKey } );
} )();
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/ads.js.download" id="embedpress-ads-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/documents-viewer-script.js.download" id="embedpress_documents_viewer_script-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/sourcebuster.min.js.download" id="sourcebuster-js-js"></script>
<script type="text/javascript" id="wc-order-attribution-js-extra">
/* <![CDATA[ */
var wc_order_attribution = {"params":{"lifetime":1.0e-5,"session":30,"ajaxurl":"https:\/\/blocks.templately.com\/wp-admin\/admin-ajax.php","prefix":"wc_order_attribution_","allowTracking":"yes"}};
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/order-attribution.min.js.download" id="wc-order-attribution-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/lodash.min.js.download" id="lodash-js"></script>
<script type="text/javascript" id="lodash-js-after">
/* <![CDATA[ */
window.lodash = _.noConflict();
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/wc-blocks-registry.js.download" id="wc-blocks-registry-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/url.min.js.download" id="wp-url-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/api-fetch.min.js.download" id="wp-api-fetch-js"></script>
<script type="text/javascript" id="wp-api-fetch-js-after">
/* <![CDATA[ */
wp.apiFetch.use( wp.apiFetch.createRootURLMiddleware( "https://blocks.templately.com/wp-json/" ) );
wp.apiFetch.nonceMiddleware = wp.apiFetch.createNonceMiddleware( "fba7861814" );
wp.apiFetch.use( wp.apiFetch.nonceMiddleware );
wp.apiFetch.use( wp.apiFetch.mediaUploadMiddleware );
wp.apiFetch.nonceEndpoint = "https://blocks.templately.com/wp-admin/admin-ajax.php?action=rest-nonce";
/* ]]> */
</script>
<script type="text/javascript" id="wc-settings-js-before">
/* <![CDATA[ */
var wcSettings = wcSettings || JSON.parse( decodeURIComponent( '%7B%22shippingCostRequiresAddress%22%3Afalse%2C%22adminUrl%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%5C%2Fwp-admin%5C%2F%22%2C%22countries%22%3A%7B%22AF%22%3A%22Afghanistan%22%2C%22AX%22%3A%22%5Cu00c5land%20Islands%22%2C%22AL%22%3A%22Albania%22%2C%22DZ%22%3A%22Algeria%22%2C%22AS%22%3A%22American%20Samoa%22%2C%22AD%22%3A%22Andorra%22%2C%22AO%22%3A%22Angola%22%2C%22AI%22%3A%22Anguilla%22%2C%22AQ%22%3A%22Antarctica%22%2C%22AG%22%3A%22Antigua%20and%20Barbuda%22%2C%22AR%22%3A%22Argentina%22%2C%22AM%22%3A%22Armenia%22%2C%22AW%22%3A%22Aruba%22%2C%22AU%22%3A%22Australia%22%2C%22AT%22%3A%22Austria%22%2C%22AZ%22%3A%22Azerbaijan%22%2C%22BS%22%3A%22Bahamas%22%2C%22BH%22%3A%22Bahrain%22%2C%22BD%22%3A%22Bangladesh%22%2C%22BB%22%3A%22Barbados%22%2C%22BY%22%3A%22Belarus%22%2C%22PW%22%3A%22Belau%22%2C%22BE%22%3A%22Belgium%22%2C%22BZ%22%3A%22Belize%22%2C%22BJ%22%3A%22Benin%22%2C%22BM%22%3A%22Bermuda%22%2C%22BT%22%3A%22Bhutan%22%2C%22BO%22%3A%22Bolivia%22%2C%22BQ%22%3A%22Bonaire%2C%20Saint%20Eustatius%20and%20Saba%22%2C%22BA%22%3A%22Bosnia%20and%20Herzegovina%22%2C%22BW%22%3A%22Botswana%22%2C%22BV%22%3A%22Bouvet%20Island%22%2C%22BR%22%3A%22Brazil%22%2C%22IO%22%3A%22British%20Indian%20Ocean%20Territory%22%2C%22BN%22%3A%22Brunei%22%2C%22BG%22%3A%22Bulgaria%22%2C%22BF%22%3A%22Burkina%20Faso%22%2C%22BI%22%3A%22Burundi%22%2C%22KH%22%3A%22Cambodia%22%2C%22CM%22%3A%22Cameroon%22%2C%22CA%22%3A%22Canada%22%2C%22CV%22%3A%22Cape%20Verde%22%2C%22KY%22%3A%22Cayman%20Islands%22%2C%22CF%22%3A%22Central%20African%20Republic%22%2C%22TD%22%3A%22Chad%22%2C%22CL%22%3A%22Chile%22%2C%22CN%22%3A%22China%22%2C%22CX%22%3A%22Christmas%20Island%22%2C%22CC%22%3A%22Cocos%20%28Keeling%29%20Islands%22%2C%22CO%22%3A%22Colombia%22%2C%22KM%22%3A%22Comoros%22%2C%22CG%22%3A%22Congo%20%28Brazzaville%29%22%2C%22CD%22%3A%22Congo%20%28Kinshasa%29%22%2C%22CK%22%3A%22Cook%20Islands%22%2C%22CR%22%3A%22Costa%20Rica%22%2C%22HR%22%3A%22Croatia%22%2C%22CU%22%3A%22Cuba%22%2C%22CW%22%3A%22Cura%26ccedil%3Bao%22%2C%22CY%22%3A%22Cyprus%22%2C%22CZ%22%3A%22Czech%20Republic%22%2C%22DK%22%3A%22Denmark%22%2C%22DJ%22%3A%22Djibouti%22%2C%22DM%22%3A%22Dominica%22%2C%22DO%22%3A%22Dominican%20Republic%22%2C%22EC%22%3A%22Ecuador%22%2C%22EG%22%3A%22Egypt%22%2C%22SV%22%3A%22El%20Salvador%22%2C%22GQ%22%3A%22Equatorial%20Guinea%22%2C%22ER%22%3A%22Eritrea%22%2C%22EE%22%3A%22Estonia%22%2C%22SZ%22%3A%22Eswatini%22%2C%22ET%22%3A%22Ethiopia%22%2C%22FK%22%3A%22Falkland%20Islands%22%2C%22FO%22%3A%22Faroe%20Islands%22%2C%22FJ%22%3A%22Fiji%22%2C%22FI%22%3A%22Finland%22%2C%22FR%22%3A%22France%22%2C%22GF%22%3A%22French%20Guiana%22%2C%22PF%22%3A%22French%20Polynesia%22%2C%22TF%22%3A%22French%20Southern%20Territories%22%2C%22GA%22%3A%22Gabon%22%2C%22GM%22%3A%22Gambia%22%2C%22GE%22%3A%22Georgia%22%2C%22DE%22%3A%22Germany%22%2C%22GH%22%3A%22Ghana%22%2C%22GI%22%3A%22Gibraltar%22%2C%22GR%22%3A%22Greece%22%2C%22GL%22%3A%22Greenland%22%2C%22GD%22%3A%22Grenada%22%2C%22GP%22%3A%22Guadeloupe%22%2C%22GU%22%3A%22Guam%22%2C%22GT%22%3A%22Guatemala%22%2C%22GG%22%3A%22Guernsey%22%2C%22GN%22%3A%22Guinea%22%2C%22GW%22%3A%22Guinea-Bissau%22%2C%22GY%22%3A%22Guyana%22%2C%22HT%22%3A%22Haiti%22%2C%22HM%22%3A%22Heard%20Island%20and%20McDonald%20Islands%22%2C%22HN%22%3A%22Honduras%22%2C%22HK%22%3A%22Hong%20Kong%22%2C%22HU%22%3A%22Hungary%22%2C%22IS%22%3A%22Iceland%22%2C%22IN%22%3A%22India%22%2C%22ID%22%3A%22Indonesia%22%2C%22IR%22%3A%22Iran%22%2C%22IQ%22%3A%22Iraq%22%2C%22IE%22%3A%22Ireland%22%2C%22IM%22%3A%22Isle%20of%20Man%22%2C%22IL%22%3A%22Israel%22%2C%22IT%22%3A%22Italy%22%2C%22CI%22%3A%22Ivory%20Coast%22%2C%22JM%22%3A%22Jamaica%22%2C%22JP%22%3A%22Japan%22%2C%22JE%22%3A%22Jersey%22%2C%22JO%22%3A%22Jordan%22%2C%22KZ%22%3A%22Kazakhstan%22%2C%22KE%22%3A%22Kenya%22%2C%22KI%22%3A%22Kiribati%22%2C%22KW%22%3A%22Kuwait%22%2C%22KG%22%3A%22Kyrgyzstan%22%2C%22LA%22%3A%22Laos%22%2C%22LV%22%3A%22Latvia%22%2C%22LB%22%3A%22Lebanon%22%2C%22LS%22%3A%22Lesotho%22%2C%22LR%22%3A%22Liberia%22%2C%22LY%22%3A%22Libya%22%2C%22LI%22%3A%22Liechtenstein%22%2C%22LT%22%3A%22Lithuania%22%2C%22LU%22%3A%22Luxembourg%22%2C%22MO%22%3A%22Macao%22%2C%22MG%22%3A%22Madagascar%22%2C%22MW%22%3A%22Malawi%22%2C%22MY%22%3A%22Malaysia%22%2C%22MV%22%3A%22Maldives%22%2C%22ML%22%3A%22Mali%22%2C%22MT%22%3A%22Malta%22%2C%22MH%22%3A%22Marshall%20Islands%22%2C%22MQ%22%3A%22Martinique%22%2C%22MR%22%3A%22Mauritania%22%2C%22MU%22%3A%22Mauritius%22%2C%22YT%22%3A%22Mayotte%22%2C%22MX%22%3A%22Mexico%22%2C%22FM%22%3A%22Micronesia%22%2C%22MD%22%3A%22Moldova%22%2C%22MC%22%3A%22Monaco%22%2C%22MN%22%3A%22Mongolia%22%2C%22ME%22%3A%22Montenegro%22%2C%22MS%22%3A%22Montserrat%22%2C%22MA%22%3A%22Morocco%22%2C%22MZ%22%3A%22Mozambique%22%2C%22MM%22%3A%22Myanmar%22%2C%22NA%22%3A%22Namibia%22%2C%22NR%22%3A%22Nauru%22%2C%22NP%22%3A%22Nepal%22%2C%22NL%22%3A%22Netherlands%22%2C%22NC%22%3A%22New%20Caledonia%22%2C%22NZ%22%3A%22New%20Zealand%22%2C%22NI%22%3A%22Nicaragua%22%2C%22NE%22%3A%22Niger%22%2C%22NG%22%3A%22Nigeria%22%2C%22NU%22%3A%22Niue%22%2C%22NF%22%3A%22Norfolk%20Island%22%2C%22KP%22%3A%22North%20Korea%22%2C%22MK%22%3A%22North%20Macedonia%22%2C%22MP%22%3A%22Northern%20Mariana%20Islands%22%2C%22NO%22%3A%22Norway%22%2C%22OM%22%3A%22Oman%22%2C%22PK%22%3A%22Pakistan%22%2C%22PS%22%3A%22Palestinian%20Territory%22%2C%22PA%22%3A%22Panama%22%2C%22PG%22%3A%22Papua%20New%20Guinea%22%2C%22PY%22%3A%22Paraguay%22%2C%22PE%22%3A%22Peru%22%2C%22PH%22%3A%22Philippines%22%2C%22PN%22%3A%22Pitcairn%22%2C%22PL%22%3A%22Poland%22%2C%22PT%22%3A%22Portugal%22%2C%22PR%22%3A%22Puerto%20Rico%22%2C%22QA%22%3A%22Qatar%22%2C%22RE%22%3A%22Reunion%22%2C%22RO%22%3A%22Romania%22%2C%22RU%22%3A%22Russia%22%2C%22RW%22%3A%22Rwanda%22%2C%22ST%22%3A%22S%26atilde%3Bo%20Tom%26eacute%3B%20and%20Pr%26iacute%3Bncipe%22%2C%22BL%22%3A%22Saint%20Barth%26eacute%3Blemy%22%2C%22SH%22%3A%22Saint%20Helena%22%2C%22KN%22%3A%22Saint%20Kitts%20and%20Nevis%22%2C%22LC%22%3A%22Saint%20Lucia%22%2C%22SX%22%3A%22Saint%20Martin%20%28Dutch%20part%29%22%2C%22MF%22%3A%22Saint%20Martin%20%28French%20part%29%22%2C%22PM%22%3A%22Saint%20Pierre%20and%20Miquelon%22%2C%22VC%22%3A%22Saint%20Vincent%20and%20the%20Grenadines%22%2C%22WS%22%3A%22Samoa%22%2C%22SM%22%3A%22San%20Marino%22%2C%22SA%22%3A%22Saudi%20Arabia%22%2C%22SN%22%3A%22Senegal%22%2C%22RS%22%3A%22Serbia%22%2C%22SC%22%3A%22Seychelles%22%2C%22SL%22%3A%22Sierra%20Leone%22%2C%22SG%22%3A%22Singapore%22%2C%22SK%22%3A%22Slovakia%22%2C%22SI%22%3A%22Slovenia%22%2C%22SB%22%3A%22Solomon%20Islands%22%2C%22SO%22%3A%22Somalia%22%2C%22ZA%22%3A%22South%20Africa%22%2C%22GS%22%3A%22South%20Georgia%5C%2FSandwich%20Islands%22%2C%22KR%22%3A%22South%20Korea%22%2C%22SS%22%3A%22South%20Sudan%22%2C%22ES%22%3A%22Spain%22%2C%22LK%22%3A%22Sri%20Lanka%22%2C%22SD%22%3A%22Sudan%22%2C%22SR%22%3A%22Suriname%22%2C%22SJ%22%3A%22Svalbard%20and%20Jan%20Mayen%22%2C%22SE%22%3A%22Sweden%22%2C%22CH%22%3A%22Switzerland%22%2C%22SY%22%3A%22Syria%22%2C%22TW%22%3A%22Taiwan%22%2C%22TJ%22%3A%22Tajikistan%22%2C%22TZ%22%3A%22Tanzania%22%2C%22TH%22%3A%22Thailand%22%2C%22TL%22%3A%22Timor-Leste%22%2C%22TG%22%3A%22Togo%22%2C%22TK%22%3A%22Tokelau%22%2C%22TO%22%3A%22Tonga%22%2C%22TT%22%3A%22Trinidad%20and%20Tobago%22%2C%22TN%22%3A%22Tunisia%22%2C%22TR%22%3A%22Turkey%22%2C%22TM%22%3A%22Turkmenistan%22%2C%22TC%22%3A%22Turks%20and%20Caicos%20Islands%22%2C%22TV%22%3A%22Tuvalu%22%2C%22UG%22%3A%22Uganda%22%2C%22UA%22%3A%22Ukraine%22%2C%22AE%22%3A%22United%20Arab%20Emirates%22%2C%22GB%22%3A%22United%20Kingdom%20%28UK%29%22%2C%22US%22%3A%22United%20States%20%28US%29%22%2C%22UM%22%3A%22United%20States%20%28US%29%20Minor%20Outlying%20Islands%22%2C%22UY%22%3A%22Uruguay%22%2C%22UZ%22%3A%22Uzbekistan%22%2C%22VU%22%3A%22Vanuatu%22%2C%22VA%22%3A%22Vatican%22%2C%22VE%22%3A%22Venezuela%22%2C%22VN%22%3A%22Vietnam%22%2C%22VG%22%3A%22Virgin%20Islands%20%28British%29%22%2C%22VI%22%3A%22Virgin%20Islands%20%28US%29%22%2C%22WF%22%3A%22Wallis%20and%20Futuna%22%2C%22EH%22%3A%22Western%20Sahara%22%2C%22YE%22%3A%22Yemen%22%2C%22ZM%22%3A%22Zambia%22%2C%22ZW%22%3A%22Zimbabwe%22%7D%2C%22currency%22%3A%7B%22code%22%3A%22USD%22%2C%22precision%22%3A2%2C%22symbol%22%3A%22%24%22%2C%22symbolPosition%22%3A%22left%22%2C%22decimalSeparator%22%3A%22.%22%2C%22thousandSeparator%22%3A%22%2C%22%2C%22priceFormat%22%3A%22%251%24s%252%24s%22%7D%2C%22currentUserId%22%3A0%2C%22currentUserIsAdmin%22%3Afalse%2C%22dateFormat%22%3A%22F%20j%2C%20Y%22%2C%22homeUrl%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%5C%2F%22%2C%22locale%22%3A%7B%22siteLocale%22%3A%22en_US%22%2C%22userLocale%22%3A%22en_US%22%2C%22weekdaysShort%22%3A%5B%22Sun%22%2C%22Mon%22%2C%22Tue%22%2C%22Wed%22%2C%22Thu%22%2C%22Fri%22%2C%22Sat%22%5D%7D%2C%22dashboardUrl%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%5C%2Fmy-account%5C%2F%22%2C%22orderStatuses%22%3A%7B%22pending%22%3A%22Pending%20payment%22%2C%22processing%22%3A%22Processing%22%2C%22on-hold%22%3A%22On%20hold%22%2C%22completed%22%3A%22Completed%22%2C%22cancelled%22%3A%22Cancelled%22%2C%22refunded%22%3A%22Refunded%22%2C%22failed%22%3A%22Failed%22%2C%22checkout-draft%22%3A%22Draft%22%7D%2C%22placeholderImgSrc%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%5C%2Fwp-content%5C%2Fuploads%5C%2Fwoocommerce-placeholder-300x300.png%22%2C%22productsSettings%22%3A%7B%22cartRedirectAfterAdd%22%3Afalse%7D%2C%22siteTitle%22%3A%22Templately%20Demos%20-%20For%20Blocks%20Templates%22%2C%22storePages%22%3A%7B%22myaccount%22%3A%7B%22id%22%3A10%2C%22title%22%3A%22My%20account%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%5C%2Fmy-account%5C%2F%22%7D%2C%22shop%22%3A%7B%22id%22%3A7%2C%22title%22%3A%22Shop%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%5C%2Fshop%5C%2F%22%7D%2C%22cart%22%3A%7B%22id%22%3A8%2C%22title%22%3A%22Cart%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%5C%2Fcart%5C%2F%22%7D%2C%22checkout%22%3A%7B%22id%22%3A9%2C%22title%22%3A%22Checkout%22%2C%22permalink%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%5C%2Fcheckout%5C%2F%22%7D%2C%22privacy%22%3A%7B%22id%22%3A0%2C%22title%22%3A%22%22%2C%22permalink%22%3Afalse%7D%2C%22terms%22%3A%7B%22id%22%3A0%2C%22title%22%3A%22%22%2C%22permalink%22%3Afalse%7D%7D%2C%22wcAssetUrl%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%5C%2Fwp-content%5C%2Fplugins%5C%2Fwoocommerce%5C%2Fassets%5C%2F%22%2C%22wcVersion%22%3A%228.5.2%22%2C%22wpLoginUrl%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%5C%2Faccess%5C%2F%22%2C%22wpVersion%22%3A%226.4.3%22%2C%22collectableMethodIds%22%3A%5B%5D%2C%22admin%22%3A%7B%22wccomHelper%22%3A%7B%22isConnected%22%3Afalse%2C%22connectURL%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%5C%2Fwp-admin%5C%2Fadmin.php%3Fpage%3Dwc-addons%26section%3Dhelper%26wc-helper-connect%3D1%26wc-helper-nonce%3D516847c0cf%22%2C%22userEmail%22%3A%22%22%2C%22userAvatar%22%3A%22https%3A%5C%2F%5C%2Fsecure.gravatar.com%5C%2Favatar%5C%2F%3Fs%3D48%26d%3Dmm%26r%3Dg%22%2C%22storeCountry%22%3A%22BD%22%2C%22inAppPurchaseURLParams%22%3A%7B%22wccom-site%22%3A%22https%3A%5C%2F%5C%2Fblocks.templately.com%22%2C%22wccom-back%22%3A%22%252Fmax-boom-home-page%252F%22%2C%22wccom-woo-version%22%3A%228.5.2%22%2C%22wccom-connect-nonce%22%3A%22516847c0cf%22%7D%7D%2C%22_feature_nonce%22%3A%22bc4e1ee793%22%2C%22alertCount%22%3A%220%22%2C%22visibleTaskListIds%22%3A%5B%22setup%22%2C%22extended%22%5D%7D%7D' ) );
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/wc-settings.js.download" id="wc-settings-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/data-controls.min.js.download" id="wp-data-controls-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/html-entities.min.js.download" id="wp-html-entities-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/notices.min.js.download" id="wp-notices-js"></script>
<script type="text/javascript" id="wc-blocks-middleware-js-before">
/* <![CDATA[ */
			var wcBlocksMiddlewareConfig = {
				storeApiNonce: '6a1c77b069',
				wcStoreApiNonceTimestamp: '1706866852'
			};
			
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/wc-blocks-middleware.js.download" id="wc-blocks-middleware-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/wc-blocks-data.js.download" id="wc-blocks-data-store-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/dom-ready.min.js.download" id="wp-dom-ready-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/a11y.min.js.download" id="wp-a11y-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/primitives.min.js.download" id="wp-primitives-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/warning.min.js.download" id="wp-warning-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/blocks-components.js.download" id="wc-blocks-components-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/blocks-checkout.js.download" id="wc-blocks-checkout-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/order-attribution-blocks.min.js.download" id="wc-order-attribution-blocks-js"></script>
<script type="text/javascript" id="flexia-navigation-js-extra">
/* <![CDATA[ */
var settings = {"ajax_url":"https:\/\/blocks.templately.com\/wp-admin\/admin-ajax.php","blog_layout":"flexia_blog_content_layout_grid","masonry_grid_cols":"3","post_meta_position":"meta-on-bottom","per_page":"10","offset":"10","excerpt_count":"30","posts_count":"1140","magnific_popup":"","show_filter":"","show_load_more":"1","load_more_text":"Load More","loading_text":"Loading...","selected_cats":"","is_pro_active":"false","archive_layout":"flexia_blog_content_layout_grid","archive_per_page":"10","archive_masonry_grid_cols":"3","archive_post_meta_position":"met;a-on-bottom","archive_excerpt_count":"60","archive_magnific_popup":"","archive_show_load_more":"1","archive_load_more_text":"Load More","archive_loading_text":"Loading...","query_vars":"{\"page\":\"\",\"pagename\":\"max-boom-home-page\"}","archive_total_page":"0","archive_count":"2","archive_nonce":"a487c219a9"};
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/flexia-scripts.min.js.download" id="flexia-navigation-js"></script>
<script type="text/javascript" id="learndash-front-js-extra">
/* <![CDATA[ */
var ldVars = {"postID":"22595","videoReqMsg":"You must watch the video before accessing this content","ajaxurl":"https:\/\/blocks.templately.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/learndash.js.download" id="learndash-front-js"></script>
<script type="text/javascript" id="eael-general-js-extra">
/* <![CDATA[ */
var localize = {"ajaxurl":"https:\/\/blocks.templately.com\/wp-admin\/admin-ajax.php","nonce":"5f5d9edff3","i18n":{"added":"Added ","compare":"Compare","loading":"Loading..."},"eael_translate_text":{"required_text":"is a required field","invalid_text":"Invalid","billing_text":"Billing","shipping_text":"Shipping","fg_mfp_counter_text":"of"},"page_permalink":"https:\/\/blocks.templately.com\/max-boom-home-page\/","cart_redirectition":"no","cart_page_url":"https:\/\/blocks.templately.com\/cart\/","el_breakpoints":{"mobile":{"label":"Mobile Portrait","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Landscape","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet Portrait","value":1024,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Landscape","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}},"ParticleThemesData":{"default":"{\"particles\":{\"number\":{\"value\":160,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":true,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":6,\"direction\":\"none\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"repulse\"},\"onclick\":{\"enable\":true,\"mode\":\"push\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}","nasa":"{\"particles\":{\"number\":{\"value\":250,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":1,\"random\":true,\"anim\":{\"enable\":true,\"speed\":1,\"opacity_min\":0,\"sync\":false}},\"size\":{\"value\":3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":4,\"size_min\":0.3,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":1,\"direction\":\"none\",\"random\":true,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":600}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"bubble\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":250,\"size\":0,\"duration\":2,\"opacity\":0,\"speed\":3},\"repulse\":{\"distance\":400,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}","bubble":"{\"particles\":{\"number\":{\"value\":15,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#1b1e34\"},\"shape\":{\"type\":\"polygon\",\"stroke\":{\"width\":0,\"color\":\"#000\"},\"polygon\":{\"nb_sides\":6},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":50,\"random\":false,\"anim\":{\"enable\":true,\"speed\":10,\"size_min\":40,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":200,\"color\":\"#ffffff\",\"opacity\":1,\"width\":2},\"move\":{\"enable\":true,\"speed\":8,\"direction\":\"none\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"grab\"},\"onclick\":{\"enable\":false,\"mode\":\"push\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}","snow":"{\"particles\":{\"number\":{\"value\":450,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#fff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":true,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":5,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":500,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":2},\"move\":{\"enable\":true,\"speed\":6,\"direction\":\"bottom\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"bubble\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":0.5}},\"bubble\":{\"distance\":400,\"size\":4,\"duration\":0.3,\"opacity\":1,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}","nyan_cat":"{\"particles\":{\"number\":{\"value\":150,\"density\":{\"enable\":false,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"star\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"http:\/\/wiki.lexisnexis.com\/academic\/images\/f\/fb\/Itunes_podcast_icon_300.jpg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":4,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":14,\"direction\":\"left\",\"random\":false,\"straight\":true,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"grab\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":200,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}"},"eael_login_nonce":"38387176b1","eael_register_nonce":"30cb29c0e6","eael_lostpassword_nonce":"0e655fdf81","eael_resetpassword_nonce":"b7a7f4d7c4"};
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/general.min.js.download" id="eael-general-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/eb-animation-load.js.download" id="essential-blocks-eb-animation-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/interactivity.min.js.download" id="wp-interactivity-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/view.min.js.download" id="wp-block-navigation-view-js" defer="defer" data-wp-strategy="defer"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/index.js.download" id="essential-blocks-advanced-navigation-frontend-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/index(1).js.download" id="essential-blocks-slider-frontend-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/slick.min.js.download" id="essential-blocks-slickjs-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/index(2).js.download" id="essential-blocks-vendor-bundle-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/hls.min.js.download" id="essential-blocks-hls-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/flv.min.js.download" id="essential-blocks-flv-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/dash.all.min.js.download" id="essential-blocks-dash-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/index(3).js.download" id="essential-blocks-advanced-video-frontend-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/index(4).js.download" id="essential-blocks-post-grid-frontend-js"></script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/index(5).js.download" id="essential-blocks-pro-post-grid-frontend-js"></script>
<script type="text/javascript" id="fluent-form-submission-js-extra">
/* <![CDATA[ */
var fluentFormVars = {"ajaxUrl":"https:\/\/blocks.templately.com\/wp-admin\/admin-ajax.php","forms":[],"step_text":"Step %activeStep% of %totalStep% - %stepTitle%","is_rtl":"","date_i18n":{"previousMonth":"Previous Month","nextMonth":"Next Month","months":{"shorthand":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],"longhand":["January","February","March","April","May","June","July","August","September","October","November","December"]},"weekdays":{"longhand":["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"],"shorthand":["Sun","Mon","Tue","Wed","Thu","Fri","Sat"]},"daysInMonth":[31,28,31,30,31,30,31,31,30,31,30,31],"rangeSeparator":" to ","weekAbbreviation":"Wk","scrollTitle":"Scroll to increment","toggleTitle":"Click to toggle","amPM":["AM","PM"],"yearAriaLabel":"Year","firstDayOfWeek":1},"pro_version":"","fluentform_version":"5.1.9","force_init":"","stepAnimationDuration":"350","upload_completed_txt":"100% Completed","upload_start_txt":"0% Completed","uploading_txt":"Uploading","choice_js_vars":{"noResultsText":"No results found","loadingText":"Loading...","noChoicesText":"No choices to choose from","itemSelectText":"Press to select","maxItemText":"Only %%maxItemCount%% options can be added"},"input_mask_vars":{"clearIfNotMatch":false}};
/* ]]> */
</script>
<script type="text/javascript" src="./Max Boom Home Page – Templately Demos – For Blocks Templates_files/form-submission.js.download" id="fluent-form-submission-js"></script>
            <script type="text/javascript">
                
                window.addEventListener('elementor/popup/show', function (e) {
                    var ffForms = jQuery('#elementor-popup-modal-' + e.detail.id).find('form.frm-fluent-form');

                    /**
                     * Support conversation form in elementor popup
                     * No regular form found, check for conversational form
                     */
                    if (!ffForms.length) {
                        const elements = document.getElementsByClassName('ffc_conv_form');
                        if (elements.length) {
                            let jsEvent = new CustomEvent('ff-elm-conv-form-event', {
                                detail: elements
                            });
                            document.dispatchEvent(jsEvent);
                        }
                    }
                    if (ffForms.length) {
                        jQuery.each(ffForms, function(index, ffForm) {
                            jQuery(ffForm).trigger('reInitExtras');
                            jQuery(document).trigger('ff_reinit', [ffForm]);
                        });
                    }
                });
                            </script>
            




</div><p id="a11y-speak-intro-text" class="a11y-speak-intro-text" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;" hidden="hidden">Notifications</p><div id="a11y-speak-assertive" class="a11y-speak-region" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;" aria-live="assertive" aria-relevant="additions text" aria-atomic="true"></div><div id="a11y-speak-polite" class="a11y-speak-region" style="position: absolute;margin: -1px;padding: 0;height: 1px;width: 1px;overflow: hidden;clip: rect(1px, 1px, 1px, 1px);-webkit-clip-path: inset(50%);clip-path: inset(50%);border: 0;word-wrap: normal !important;" aria-live="polite" aria-relevant="additions text" aria-atomic="true"></div></body></html>
