<div class="section_eight">
    <div class="container">
        <div class="feedback">
            <div class="feedback_title">
                <h2>
                    PHẢN HỒI TỪ KHÁCH HÀNG
                </h2>

            </div>
            <div class="feedback_wrap">
                <div id="feedback_owl_tow" class="owl-carousel owl-theme">
                    <div class="feedback_item2">
                        <div class="feedback_top">
                            <div class="feedback_bottom">
                                <div class="feedback_bottom_left">
                                    <div class="feedback_bottom_img">
                                        <img src="https://bitishop.site/yensao/wp-content/uploads/2022/12/avavar1-1.jpg" alt="Jessica Nga">
                                    </div>
                                    <div class="feedback_bottom_detail">
                                        <h5>Lisa</h5>
                                        <h6>Singer</h6>
                                    </div>
                                </div>
                            </div>
                            <img src="https://bitishop.site/yensao/wp-content/themes/yensaohaidao/assets/img/introduce_yen/tag.png" alt="quote" class="quote">
                        </div>
                        <div class="feedback_center">
                            <p>"Tôi đã sử dụng yến sào này trong thực đơn chăm sóc sức khỏe của gia đình. Mọi người đều thấy tăng cường sức kháng và có sự cải thiện rõ rệt về tinh thần."</p>
                        </div>
                    </div>
                    <div class="feedback_item2">
                        <div class="feedback_top">
                            <div class="feedback_bottom">
                                <div class="feedback_bottom_left">
                                    <div class="feedback_bottom_img">
                                        <img src="	https://bitishop.site/yensao/wp-content/uploads/2022/12/avatar3-1.jpg" alt="">
                                    </div>
                                    <div class="feedback_bottom_detail">
                                        <h5>Thanh Anna</h5>
                                        <h6>Actor</h6>
                                    </div>
                                </div>
                            </div>
                            <img src="https://bitishop.site/yensao/wp-content/themes/yensaohaidao/assets/img/introduce_yen/tag.png" alt="quote" class="quote">
                        </div>
                        <div class="feedback_center">
                            <p>
                                "Yến sào trong sản phẩm này thơm ngon và không hề có vị tanh khó chịu. Đây là một sản phẩm tuyệt vời để tặng người thân trong những dịp đặc biệt."" </p>
                        </div>
                    </div>
                    <div class="feedback_item2">
                        <div class="feedback_top">
                            <div class="feedback_bottom">
                                <div class="feedback_bottom_left">
                                    <div class="feedback_bottom_img">
                                        <img src="https://bitishop.site/yensao/wp-content/uploads/2022/12/avatar2-1.jpg" alt="Jessica Nga">
                                    </div>
                                    <div class="feedback_bottom_detail">
                                        <h5>Jessica Nga</h5>
                                        <h6>Miss Grand</h6>
                                    </div>
                                </div>
                            </div>
                            <img src="https://bitishop.site/yensao/wp-content/themes/yensaohaidao/assets/img/introduce_yen/tag.png" alt="quote" class="quote">
                        </div>
                        <div class="feedback_center">
                            <p>
                                "Đây là lựa chọn hoàn hảo cho những người muốn bổ sung dinh dưỡng một cách tự nhiên. Tôi thích cách sản phẩm không chứa chất bảo quản."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    (function($) {
        $(document).ready(function() {
            /* AOS Animate */
            AOS.init({
                once: true
            });

            $('#feedback_owl_tow').owlCarousel({
                items: 3,
                loop: true,
                margin: 20,
                autoplay: true,
                autoplayHoverPause: true,
                slideTransition: 'linear',
                autoplayTimeout: 5000,
                autoplaySpeed: 1000,
                autoplayHoverPause: false,
                // nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            })

        });
    })(jQuery);
</script>