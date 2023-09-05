<div class="home_section_file">
    <div class="container">
        <div class="reason_title">
            <h2>LÝ DO NÊN CHỌN YẾN SÀO ĐẠI AN</h2>
        </div>
        <div class="reason row g-2">
            <div class="reason_left col-lg-6">

                <?php if( have_rows('why_choose',2) ): ?>
                <ul class="slides">
                    <?php while( have_rows('why_choose',2) ): the_row(); 
                    $image = get_sub_field('icon');

                    ?>
                    <div class="reason_item">
                        <div class="reason_icon">
                           <img src="<?php echo $image; ?>" alt="">
                        </div>
                        <div class="reason_desc">
                            <h4><?php the_sub_field('title'); ?></h4>
                            <p><?php the_sub_field('content'); ?></p>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>


            </div>
            <div class="reason_right col-lg-6">
                <div class="reason_right_bgr">
                    <img src="https://bitishop.site/yensao/wp-content/uploads/2022/12/imgcompany5.jpg"
                        alt="Image commit về Sâm">
                    <span class="reason_border"></span>
                </div>
            </div>
        </div>
    </div>

</div>