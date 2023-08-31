<?php /* Template Name: Trang chủ */ ?>

<?php get_header(); ?>
<main class="home">
    <?php get_template_part('templates/block/component', 'section1'); ?>
    <?php get_template_part('templates/block/component', 'section2'); ?>
    <?php get_template_part('templates/block/component', 'section3'); ?>
    <?php get_template_part('templates/block/component', 'section4'); ?>
    
        <?php get_template_part('templates/block/component', 'home-section-five'); ?>
        <?php get_template_part('templates/block/component', 'home-section-six'); ?>
        <?php get_template_part('templates/block/component', 'home-section-seven'); ?>

    <?php get_template_part('templates/block/component', 'home-section9'); ?>
    <?php get_template_part('templates/block/component', 'home-section10'); ?>
    <?php get_template_part('templates/block/component', 'home-section11'); ?>

</main>


<?php get_footer(); ?>