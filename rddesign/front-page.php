<?php get_header(); ?>

<!-- Hero text and image -->
<div class="hero">
    <div class="hero__textbg">
        <div class="hero__text-container">
            <div class="hero__text"><?php echo get_theme_mod('hero_heading','Interior Design and Home Staging');?></div>
        </div>
    </div>
    <div class="hero__image"></div>
</div>

<main>
    <!-- Into box, text and image -->
    <div class="intro-box">
        <div class="intro-box__text">
            <div>
                <h1><?php echo get_theme_mod('intro_heading', 'We Create Beautiful Spaces');?></h1>
                <p>
                    <?php echo get_theme_mod('intro_text', "We are passionate about creating beautiful homes! Skilled in the art of interior design, our business specialises in creating amazing spaces for our clients. Whether you need a designer for a residential, commercial, or home staging design, we can do it all. Our spaces are tailored to our clients individual style and preferences. We pride ourselves on delivering a quality service, and we dont shy away from challenges. Let us reimagine your interior space that you will be proud to show off! We will work with you to achieve your vision through the entire process, from kitchen and flooring finishes, paint colours, furniture and decor, ensuring that you get the best quality! Let us help you create your dream space!");?>
                </p>
            </div>
        </div>
        <div class="intro-box__image">
        </div>
    </div>

    <!-- Services row -->
    <div class="services">

        <div class="services__item">
            <a href="/design-type/residential"><img
                    src="<?php echo get_theme_mod('service1_image', get_template_directory_uri().'/images/residentialinteriors.jpg'); ?>"
                    alt="residential interior"></a>
            <a href="/design-type/residential">
                <div class="services__title"><?php echo get_theme_mod('service1_text', 'Residential Interiors');?></div>
            </a>
        </div>

        <div class="services__item">
            <a href="/design-type/commercial"><img
                    src="<?php echo get_theme_mod('service2_image', get_template_directory_uri().'/images/commercialdesign.jpg'); ?>"
                    alt="commercial interior design"></a>
            <a href="/design-type/commercial">
                <div class="services__title"><?php echo get_theme_mod('service2_text', 'Commercial Design');?></div>
            </a>
        </div>

        <div class="services__item">
            <a href="/design-type/home-staging"><img
                    src="<?php echo get_theme_mod('service3_image', get_template_directory_uri().'/images/homestaging.jpg'); ?>"
                    alt="home staging"></a>
            <a href="/design-type/home-staging">
                <div class="services__title"><?php echo get_theme_mod('service3_text', 'Home Staging');?></div>
            </a>
        </div>

    </div>
</main>

<?php get_footer(); ?>