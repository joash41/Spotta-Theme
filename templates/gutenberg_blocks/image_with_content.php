<div class="iwc_section">
<?php $left_right_position = get_field('left_right_aligned')['value'];?>
<div class="container" <?php if($left_right_position=='right'):?>style="flex-direction: row-reverse"<?php endif; ?>>
        <div class="iwc_image">
            <img src="<?php echo get_field('iwc_image'); ?>" />
        </div>
        <div class="iwc_content_wrapper">
            <div class="vertical_line"></div>
            <div class="iwc_heading">
                <h3><?php echo get_field('iwc_heading'); ?></h3>
            </div>
            <div class="iwc_content">
                <p><?php echo get_field('iwc_content'); ?></p>
            </div>
        </div>
    </div>
</div>