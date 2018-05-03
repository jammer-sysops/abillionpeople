<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
            
            //music toggle
            function aud_play_pause() {
                var toggle = document.getElementById("toggle-icon");
                var myAudio = document.getElementById("audio_bgm");
                if (myAudio.paused) {
                    myAudio.play();
                    toggle.src = "http://abillionpeople.org/assets/images/002-speaker.png";
                } else {
                    myAudio.pause();
                    toggle.src = "http://abillionpeople.org/assets/images/001-mute.png";
                }
            }
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">

					<!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/abp-logo.png" alt="Logo" class="logo-img">
						</a>
					</div>
					<!-- /logo -->
                    <audio id="audio_bgm" autoplay="autoplay" style="display: none;">
                        <source src="./wp-content/themes/child/music/music.mp3" />
                    </audio>
                    <a href="javascript:void(0);" id="togglebgm" onclick="aud_play_pause()">
                    <!-- You also need to prepare an off.png -->
                        <img id="toggle-icon" class="audio_btn" src="http://abillionpeople.org/assets/images/002-speaker.png" border="0" class="wow fadeInUp">
                    </a>
					<!-- nav -->
					<nav class="nav" role="navigation">
						<?php // html5blank_nav(); ?>
                        <?php wp_nav_menu (); ?>
					</nav>
					<!-- /nav -->

			</header>
			<!-- /header -->
