<div class="faq_section">
    <div class="container">
        <div class="faq_image">
            <div class="image" style="background-image:url('<?php echo get_field('faq_image');?>')"></div>
            <div class="testimonals_section">
                <div class="container">
                    <div class="testimonials_container">
                        <div class="testimonials_heading"><?php echo get_field('testimonials_heading'); ?></div>
                        <div class="testimonials_holder swiper-container">
                            <div class="swiper-wrapper">
                            <?php $testimonials = get_field('testimonials');?>
                            <?php foreach ($testimonials as $testimonial):?>
                                <div class="testimonials_wrapper swiper-slide" >
                                    <div class="testimonials_content"><?php echo $testimonial['testimonials_content'];?></div>
                                    <div class="testimonials_author"><?php echo $testimonial['testimonials_author'];?></div>
                                </div>
                            <?php endforeach; ?>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq_wrapper">
            <?php $faq_accordions = get_field('faq_accordions'); ?>
            <?php if($faq_accordions): ?>
            <div class="vertical_line"></div>
            <h2><?php the_field('faq_heading'); ?></h2>
            <?php foreach ($faq_accordions as $faq_accordion): ?>
                <div class="faq_inside_wrapper">
                    <div id="faq_question" class="faq_question">
                        <h4 class="faq_question_heading"><?php echo $faq_accordion['faq_question']; ?></h4>
                        <img src="<?php echo get_template_directory_uri();?>/images/accordion_plus.png" />
                    </div>
                    <div id="faq_content_wrapper" class="faq_content_wrapper">
                        <div id="faq_content_wrapper_inside" class="faq_content_wrapper_inside">
                            <?php echo $faq_accordion['faq_content']; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<div class="testimonals_section">
    <div class="container">
        <div class="testimonials_container">
            <div class="testimonials_heading"><?php echo get_field('testimonials_heading'); ?></div>
            <div class="testimonials_holder swiper-container">
                <div class="swiper-wrapper">
                <?php $testimonials = get_field('testimonials');?>
                <?php foreach ($testimonials as $testimonial):?>
                    <div class="testimonials_wrapper swiper-slide" >
                        <div class="testimonials_content"><?php echo $testimonial['testimonials_content'];?></div>
                        <div class="testimonials_author"><?php echo $testimonial['testimonials_author'];?></div>
                    </div>
                <?php endforeach; ?>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>