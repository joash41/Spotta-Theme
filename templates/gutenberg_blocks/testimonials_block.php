<div class="testimonals_section">
    <div class="container">
        <div class="testimonials_container">
            <div class="testimonials_heading"><?php echo get_field('testimonials_heading'); ?></div>
            <div class="testimonials_holder" data-flickity='{ "adaptiveHeight": true, "cellAlign": "left", "contain": true, "prevNextButtons": false, "autoPlay": true, "adaptiveHeight": true }'>
                <?php $testimonals = get_field('testimonals');?>
                <?php foreach ($testimonals as $testimonial):?>
                    <div class="testimonials_wrapper">
                        <div class="testimonials_content"><?php echo $testimonial['testimonials_content'];?></div>
                        <div class="testimonials_author"><?php echo $testimonial['testimonials_author'];?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>