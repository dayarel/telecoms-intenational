<!DOCTYPE html>
<?php
    get_bloginfo('wpurl'); 
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body data-base-dir=<?php echo get_bloginfo('wpurl'); ?>>
    <div class="overlay"></div>
    <header>
        <div class="header-wrapper">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri();?>/assets/img/logo.svg" alt="Intertel Logo">
            </a>
            <div class="menu">
                <span class="burger"></span>
            </div>
        </div>
        <nav class="closed">
            <div class="nav-wrapper">
                <ul>
                    <li> 
                        <a href="<?php echo site_url(); ?>/our-brands">Our Brands</a> 
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/about-us">About Us</a>
                        
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/contact">Contact</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/trade-form">Trade Form</a>
                    </li>
                </ul>
                <div class="nav-bottom">
                    <p>+44 1254 485 414</p>
                    <a href="mailto:info@telecoms-international.com">
                        info@telecoms-international.com
                    </a>
                </div>
            </div>
        </nav>
    </header>
