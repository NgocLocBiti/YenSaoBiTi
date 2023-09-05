<div class="section1">
    <?php
    $images = get_field('banner_home', 2);
    if ($images) : ?>
        <div id="section1" class="owl-carousel owl-theme">

            <?php foreach ($images as $image) : ?>
                <div class="item">
                    <img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                </div>
                <p><?php echo esc_html($image['caption']); ?></p>

            <?php endforeach; ?>

        </div>
    <?php endif; ?>

</div>
<script>
    (function($) {
        $(document).ready(function() {
            $('#section1').owlCarousel({
                loop: true,
                margin: 10,
                nav: false,
                dots: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
        });
    })(jQuery);
</script>