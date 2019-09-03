<div class="iwb_section">
    <div class="container">
        <div class="iwb_heading"><h3><?php echo get_field('iwb_heading'); ?></h3></div>
        <div class="iwb_content_wrapper">
            <div class="iwb_content"><p><?php echo get_field('iwb_content');?></p></div>
            <div class="iwb_btn_wrapper">
                <a href="<?php echo get_field('iwb_link1')['url']; ?>" class="button"><?php echo get_field('iwb_link1')['title'];?></a>
                <a href="<?php echo get_field('iwb_link2')['url']; ?>" class="button"><?php echo get_field('iwb_link2')['title'];?></a>
            </div>
        </div>
    </div>
</div>