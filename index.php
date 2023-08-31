<?php /* Template Name: Trang chủ */ ?>

<?php get_header(); ?>
<main class="home">
    <?php get_template_part('templates/block/component', 'section1'); ?>
    <?php get_template_part('templates/block/component', 'section2'); ?>
    <?php get_template_part('templates/block/component', 'section3'); ?>
    <?php get_template_part('templates/block/component', 'section4'); ?>
</main>

<?php get_footer(); ?>