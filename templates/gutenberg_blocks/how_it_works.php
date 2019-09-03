<div id="hiw_section" class="hiw_section">
    <div class="container">
        <div class="hiw_heading"><?php echo get_field('hiw_heading');?></div>
        <div class="hiw_steps_wrapper">
            <?php $hiw_steps = get_field('hiw_steps'); ?>
            <?php foreach($hiw_steps as $hiw_step): ?>
            <div class="anti_shadow">
                <div class="hiw_step">
                    <div class="hiw_image">
                        <img src="<?php echo $hiw_step['hiw_image']; ?>" />
                    </div>
                    <div class="hiw_content">
                        <?php echo $hiw_step['hiw_content']; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>