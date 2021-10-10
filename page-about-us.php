<?php 

/* Template Name: About Us */

get_header(); ?>

    <section id="hero" class="subpage">
        <div id="hero-blob"></div>
        <div class="hero-header">  
            <div class="hero-content">
                <?php the_field('hero_title'); ?>
               <?php the_field('hero_subtitle'); ?>
            </div>
            <div class="scroll">
                <svg
                ref = {heroScroll}
                xmlns="http://www.w3.org/2000/svg"
                version="1.1"
                id="Layer_2"
                x="0px"
                y="0px"
                viewBox="0 0 25.166666 37.8704414"
                enableBackground="new 0 0 25.166666 37.8704414"
                >
                    <path
                        class="stroke"
                        fill="none"
                        stroke="#ffffff"
                        strokeWidth="1.75"
                        strokeMiterlimit="10"
                        d="M12.5833445 36.6204414h-0.0000229C6.3499947 36.6204414 1.25 31.5204487 1.25 25.2871208V12.5833216C1.25 6.3499947 6.3499951 1.25 12.5833216 1.25h0.0000229c6.2333269 0 11.3333216 5.0999947 11.3333216 11.3333216v12.7037992C23.916666 31.5204487 18.8166714 36.6204414 12.5833445 36.6204414z"
                    ></path>
                    <path
                        class="scroller"
                        fill="#ffffff"
                        d="M13.0833359 19.2157116h-0.9192753c-1.0999985 0-1.9999971-0.8999996-1.9999971-1.9999981v-5.428606c0-1.0999994 0.8999987-1.9999981 1.9999971-1.9999981h0.9192753c1.0999985 0 1.9999981 0.8999987 1.9999981 1.9999981v5.428606C15.083334 18.315712 14.1833344 19.2157116 13.0833359 19.2157116z"
                    ></path>
                </svg>
                <p ref={heroScrollP}>SCROLL DOWN</p>
           </div>
        </div>
    </section>
    <main>
        <div class="container">
            <section class="svg-section first">
                <div id="heading-svg">
                <object id="my-svg" type="image/svg+xml" data='<?php echo get_template_directory_uri();?>/assets/img/motherboard.svg'></object>
                </div>
            </section>
            <section class="header-section">
                <h1>Who are INTERTEL</h1>
                <div>
                    <p>Our vision is clear to become the UK’s largest and leading distributor of original mobile and smart phone accessories, by providing the largest range of accessories together with unparalleled levels of product knowledge, industry expertise and customer service.</p>
                    <p>We aim to provide a service through honest communication, fulfilling our promises and working with you to ensure you receive a professional service.</p>
                </div>
            </section>
            <section class="header-section">
                <h1>Vision</h1>
                <div>
                    <p>We strive to provide our clients with the best B2B experience from beginning to end, with a professional, reliable and honest experience. We believe in the simple, not the complex. We believe that we need to own the inventory that we are offering, and offer only what we have available. We won’t settle for anything less than excellence in every group in the company, and we have the self-honesty to admit when we are wrong and the courage to change”</p>
                </div>
            </section>
            <section class="header-section">
                <h1>Our Values</h1>
                <div>
                    <p>Through integrity, accountability, passion, humility, simplicity and a focus on success, we have created a vibrant company culture where ideas can blossom, people can thrive and success can flourish</p>
                </div>
            </section>
            <section class="header-section">
                <h1>Passion</h1>
                <div>
                    <p>We are passionate about our business, our brands and our products. We show pride in our brands and create value for our clients by empowering them so they can achieve their company objectives.</p>
                </div>
            </section>
            <section class="header-section">
                <h1>Our Brands</h1>
                    <div>
                        <p>We work with multiple recognised brands ensuring we give the best product of quality and experience.</p>
                    </div>
            </section>
            <section id="brands"> 
                <div class="brands-grid">
                    <?php if( have_rows('brands_grid',7) ):
                        while( have_rows('brands_grid',7) ) : the_row(); ?>
                            <div class="brand-image">
                                <img src="<?php the_sub_field('brand_image'); ?>" alt="Brands">
                            </div>  
                    <?php endwhile; endif; ?>
                </div>
                <a class="btn center" href="<?php echo site_url(); ?>/our-brands">See the other brands</a>
            </section>
            <section class="blob">
                <div class="blob-wrapper">
                    <div class="blob-shape" id="blob2"></div>
                    <div class="blob-content">
                        <h1 class="full">Sign up to our newsletter to keep upto date with the latest news and offers</h1>
                    </div>
                </div>
                <div class="newsletter-wrapper">
                    <?php echo do_shortcode('[contact-form-7 id="63" title="Newsletter Sign Up"]'); ?>
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
<?php get_footer(); ?>