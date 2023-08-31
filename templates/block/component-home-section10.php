<section class="section10">
    <div class="partner-shipping py-3">
        <div class="container">
            <div id="section10" class="owl-carousel owl-theme">
                <div class="item">
                    <img src="https://bitishop.site/yensao/wp-content/uploads/2022/12/partner2.png" alt="Partner Shipping Yến Sào">
                </div>
                <div class="item">
                    <img src="https://bitishop.site/yensao/wp-content/uploads/2022/12/partner4.png" alt="Partner Shipping Yến Sào">
                </div>
                <div class="item">
                    <img src="https://bitishop.site/yensao/wp-content/uploads/2022/12/partner6.png" alt="Partner Shipping Yến Sào">
                </div>
                <div class="item">
                    <img src="https://bitishop.site/yensao/wp-content/uploads/2022/12/partner5.png" alt="Partner Shipping Yến Sào">
                </div>
                <div class="item">
                    <img src="https://bitishop.site/yensao/wp-content/uploads/2022/12/partner1.png" alt="Partner Shipping Yến Sào">
                </div>
                <div class="item">
                    <img src="https://bitishop.site/yensao/wp-content/uploads/2022/12/partner3.png" alt="Partner Shipping Yến Sào">
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    (function($) {
        $(document).ready(function() {
            /* AOS Animate */
            AOS.init({
                once: true
            });

            $('#section10').owlCarousel({
                items: 10,
                loop: true,
                margin: 20,
                autoplay: true,
                slideTransition: 'linear',
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                // nav: true,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    700: {
                        items: 5
                    },
                    1000: {
                        items: 7
                    }
                }
            })

        });
    })(jQuery);
</script>