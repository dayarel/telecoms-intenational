<?php 

/* Template Name: Contact */

get_header();

?>
    <section id="hero" class="subpage">
        <div id="hero-blob"></div>
        <div class="hero-header">  
            <div class="hero-content">
                <?php the_field('hero_title'); ?>
               <?php the_field('hero_subtitle'); ?>
            </div>
            <div class="scroll">
                <svg
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
                <p>SCROLL DOWN</p>
           </div>
        </div>
    </section>
    <main>
        <div class="container">
            <section class="header-section">
                <h1>Fill this<br/> form out</h1>
                <div>
                    <?php echo do_shortcode('[contact-form-7 id="73" html_id="contact" title="Contact"]'); ?>
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