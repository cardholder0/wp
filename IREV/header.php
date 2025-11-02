<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_theme_file_uri('src/favicon/favicon-96x96.png')); ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo esc_url(get_theme_file_uri('src/favicon/favicon.svg')); ?>" />
    <link rel="shortcut icon" href="<?php echo esc_url(get_theme_file_uri('src/favicon/favicon.ico')); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo esc_url(get_theme_file_uri('src/favicon/apple-touch-icon.png')); ?>" />
    <meta name="apple-mobile-web-app-title" content="iREV" />
    <link rel="manifest" href="<?php echo esc_url(get_theme_file_uri('src/favicon/site.webmanifest')); ?>" />
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="header">
    <div class="header_wrapper">
        <div>
            <img class="header_logo" src="<?php echo esc_url(get_theme_file_uri('src/icons/logo.svg')); ?>"
                 alt="irev logo"/>
        </div>
        <?php
            require_once get_template_directory() . '/inc/classes/class-header-walker.php';
            $walker = new Custom_Header_Walker();
        ?>

        <nav class="header_nav">
            <div class="header_menu">
                <?php
                wp_nav_menu([
                    'theme_location' => 'header_menu',
                    'container'      => false,
                    'walker'         => $walker,
                    'items_wrap'     => '%3$s',
                ]);
                ?>
            </div>
            <?php echo $walker->get_dropdowns_html(); ?>
        </nav>
        <button class="header_signIn">
            Sign In
        </button>
        <button class="header_hamburger">
            <img src="<?php echo esc_url(get_theme_file_uri('src/icons/hamburgerIcon.svg')); ?>"
                 alt="hamburger"
            />
        </button>
    </div>
</header>

