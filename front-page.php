<?php 

/* Template Name: Home Page */

get_header(); ?>

    <section id="hero">
        <video src="<?php echo get_template_directory_uri();?>/assets/img/video.mp4" autoplay loop muted type="mp4"></video>
        <div class="video-overlay"></div>
        <div class="hero-header">  
            <div class="hero-content">
                <?php the_field('hero_title'); ?>
                <?php the_field('hero_subtitle'); ?>
                <a href="#" class="btn">Find out more</a>
                <div class="header-logos-wrapper misma-altura">
                    <div class="header-logos">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-apple.png" alt="Apple Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-belkin.png" alt="Belkin Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-blackberry.png" alt="Blackberry Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-griffin.png" alt="Griffin Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-htc.png" alt="HTC Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-incipio.png" alt="Incipio Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-lifeProof.png" alt="Life Proof Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-mophie.png" alt="Mophie Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-nokia.png" alt="Nokia Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-otter.png" alt="Otter Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-samsung.png" alt="Samsung Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-sony.png" alt="Sony Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-speck.png" alt="Speck Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-tech21.png" alt="Tech21 Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-uag.png" alt="UAG Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-urbanista.png" alt="Urbanista Logo">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/brands/logo-zagg.png" alt="Zagg Logo">
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <main>
        <div class="container">
            <section class="blob first">
                <div class="blob-wrapper">
                    <div class="blob-shape" id="blob1"></div>
                    <div class="blob-content">
                        <h1>We strive not to be<br /> a success but rather be of ‘value’</h1>
                    </div>
                </div>
            </section>

            <section class="svg-section">
                <div id="heading-svg">
                    <object id="my-svg" type="image/svg+xml" data='<?php echo get_template_directory_uri();?>/assets/img/screens.svg'></object>
                </div>
            </section>

            <section class="header-section">
                <h1>We are INTERTEL</h1>
                <div>
                    <p>INTERTEL was established in 2013 to supply the market with genuine accessories and electronics. INTERTEL procures high-quality mobile device accessories through partnerships with the worlds leading accessory brands, manufacturers and distributors. Currently we supply to independent wholesalers, specialized cellular and electronics retailers &amp; e-tailers.</p>
                    <p>INTERTEL now serves hundreds of customers from Europe and beyond, delivering a range of accessories from the leading brands. We have more than 1,000 SKUA’s at any given time enabling us to fulfil a variety of consumer demands. Unlike some companies we have no MOQ. It is our mission to build a relationship with companies of any size, small or big.</p>  
                    <a href="<?php echo site_url(); ?>/about-us" class="btn">Find out more</a>           
                </div>
            </section>
            <section class="header-section">
                <h1>Our Services</h1>
                <div>
                    <p>We are a solution provider of mobile phone accessories in the UK, Europe and beyond. We can provide a service which you can trust with a full support system. We are committed to our customers and with over 10 years in retail, corporate and online, we are ideally placed to help our partners grow their respective businesses.</p>
                    <p>Our portfolio is based on current market trends and on customer demand. With our experience of the market, we are able to offer custom solutions aswell as hand-picked accessories from established brands.</p>
                </div>
            </section>
            <section id="services">
                <?php if( have_rows('services') ):
                    while( have_rows('services') ) : the_row(); ?>
                        <div class="service-single">
                            <div class="service-image">
                                <img src="<?php the_sub_field('service_icon'); ?>" alt="Service Icon">
                            </div>
                            <div class="service-container">
                                <h2><?php the_sub_field('service_title'); ?></h2>
                                <p><?php the_sub_field('service_description'); ?></p>
                            </div>
                        </div>
                <?php endwhile; endif; ?>
                <a href="<?php echo site_url(); ?>/contact" class="btn center">Lets work together</a>
            </section>
            <!-- <section id="numbers">
                <div class="number-wrapper">
                    <h1>We work with <br /><span class="counter" data-count="30">0</span> Brands</h1>
                </div>
                
                <div class="number-wrapper">
                    <h1>We work with <br /><span class="counter" data-count="500">0</span> Clients</h1>
                </div>
                
                <div class="number-wrapper">
                    <h1>We ship  to <br /><span class="counter" data-count="30">0</span> countries</h1>
                </div>
                
                <div class="number-wrapper">
                    <h1><span class="counter" data-count="1000">0</span> SKUA's</h1>
                </div>
                
            </section> -->
            
            <section class="header-section">
                <h1>Our Brands</h1>
                    <div>
                        <p>We work with multiple recognised brands ensuring we give the best product of quality and experience.</p>
                    </div>
            </section>
            <section id="brands"> 
                <div class="brands-grid">
                    <?php if( have_rows('brands_grid') ):
                        while( have_rows('brands_grid') ) : the_row(); ?>
                            <div class="brand-image">
                                <img src="<?php the_sub_field('brand_image'); ?>" alt="Brands">
                            </div>  
                    <?php endwhile; endif; ?>
                </div>
                <a class="btn center" href="<?php echo site_url(); ?>/our-brands">See the other brands</a>
            </section>
            <section id="reviews">
                <div class="review-wrapper">
                    <div class="review-slider">
                        <?php if( have_rows('reviews') ):
                            while( have_rows('reviews') ) : the_row(); ?>
                                <div class="single-slide">
                                    <h1>“<?php the_sub_field('review_content');?>”</h1>
                                    <span>- <?php the_sub_field('review_author');?></span>
                                </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </section>
            <section class="blob">
                <div class="blob-wrapper">
                    <div class="blob-shape" id="blob2"></div>
                    <div class="blob-content">
                        <h1 class="full">Sign up to our newsletter to keep upto date with the latest news and offers</h1>
                        <div class="newsletter-wrapper">
                            <?php echo do_shortcode('[contact-form-7 id="63" title="Newsletter Sign Up"]'); ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="blob">
                <div class="blob-wrapper">
                    <div class="blob-shape" id="blob3"></div>
                    <div class="blob-content">
                        <h1 class="full">If you are a vendor and would like to<br /> get in touch with us about your brand, we would be interested in hearing from<br /> you.</h1>
                        <a href="<?php echo site_url(); ?>/trade-form" class="btn">Enquire now</a>  
                    </div>
                </div>
            </section>
        </div>
            <section id="map-section">
                <div class="map-left">
                    <div id="map"></div>
                    <div class="map-info">
                        <div class="info-close">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/close.svg" alt="Close button">
                        </div>
                        <div class="icon">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/marker.svg" alt="Marker icon">
                        </div>
                        <div class="info-wrapper">
                            <h3>INTERTEL</h3>
                            <div class="info-content">
                            <?php the_field('google_map_info_box'); ?>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="map-right">
                    <h1 class="full">Contact</h1>
                    <p>Wish to get in contact with us, fill in this form, lets get connected.</p>
                    <?php echo do_shortcode('[contact-form-7 id="276" html_id="contact" title="Home Page Contact"]'); ?>
                </div>
            </section>
<?php get_footer(); ?>