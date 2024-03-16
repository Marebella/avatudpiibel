<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="reset.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="header-main">
        <div class="content-container">
            <div class="header-content">
                <img src="<?php echo get_template_directory_uri() . '/images/apu_logo.png'; ?>" alt="Logo" class="header-logo">
                <nav class="header-nav-container">
                    <ul class="header-nav">
                        <li>
                            <a href="#" class="header-nav-link">Meist</a>
                        </li>
                        <li>
                            <a href="#"class="header-nav-link">Materjalid</a>
                        </li>
                        <li>
                            <a href="#"class="header-nav-link">Sündmused</a>
                        </li>
                        <li>
                            <a href="#"class="header-nav-link">Toeta</a>
                        </li>
                        <li>
                            <a href="#"class="header-nav-link">Kontakt</a>
                        </li>
                    </ul>
                <nav class="header-nav">

                </nav>
            </div>
        </div>
    </header>
