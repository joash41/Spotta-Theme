<?php /* Template Name: Home */ ?>
<?php get_header()?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="page_content" class="page_content">
            <?php
            $banner_image_21 = get_field('banner_image', 21);
            $banner_title_21 = get_field('banner_title', 21);
            $banner_sub_title_21 = get_field('banner_sub_title', 21);

            $banner_image_30 = get_field('banner_image', 30);
            $banner_title_30 = get_field('banner_title', 30);
            $banner_sub_title_30 = get_field('banner_sub_title', 30);
            ?>
            <div class="banner_info_wrapper">
            <div class="blue_block_left"></div>
            <?php if($banner_title_21 || $banner_sub_title_21):?>
                <div class="banner_info">
                    <div class="banner_bg_img" style="background-image:url('<?php echo $banner_image_21; ?>');"></div>
                        <div class="circles">
                            <div class="circle1">
                                <div class="circle2">
                                    <div class="circle3">
                                        <div class="circle4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="container">
                        <div class="banner_title"><?php echo $banner_title_21; ?></div>
                        <div class="banner_sub_title">
                            <div class="spotta_bed_text"><span>SPOTTA</span> BED</div>
                            <div class="pod_text">
                            <div class="circles">
                                <div class="circle1">
                                    <div class="circle2">
                                        <div class="circle3">
                                            <div class="circle4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            POD</div>
                        </div>
                    </div>
                </div>
            <?php endif;?>
            <?php if($banner_title_30 || $banner_sub_title_30):?>
                <div class="banner_info">
                    <div class="banner_bg_img" style="background-image:url('<?php echo $banner_image_30; ?>');"></div>
                        <div class="circles">
                            <div class="circle1">
                                <div class="circle2">
                                    <div class="circle3">
                                        <div class="circle4"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="container">
                        <div class="banner_title"><?php echo $banner_title_30; ?></div>
                        <div class="banner_sub_title">
                            <div class="spotta_bed_text"><span>SPOTTA</span> FOREST</div>
                            <div class="pod_text">
                            <div class="circles">
                                <div class="circle1">
                                    <div class="circle2">
                                        <div class="circle3">
                                            <div class="circle4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            POD</div>
                        </div>
                    </div>
                </div>
            <?php endif;?>
            </div>
            <div class="container spotta_tabs_wrapper">
                <div id="spotta_tabs" class="spotta_tabs">
                    <div class="spotta_tab_title">
                        <?php echo get_field('product_title', 21);?>
                        <div class="right_chevron"></div>
                    </div>
                    <div class="spotta_tab_introduction">
                        <?php echo get_field('product_introduction', 21); ?>
                    </div>
                </div>
                <div class="spotta_tabs">
                    <div class="spotta_tab_title">
                        <?php echo get_field('product_title', 30);?>
                        <div class="right_chevron"></div>
                    </div>
                    <div class="spotta_tab_introduction">
                        <?php echo get_field('product_introduction', 30); ?>
                    </div>
                </div>
            </div>
            <div class="spotta_content_wrapper">
                <div id="spotta_content" class="spotta_content">
                    <div class="spotta_tab_introduction">
                        <div class="container">
                            <?php echo get_field('product_introduction', 21); ?>
                        </div>
                    </div>
                    <?php
                        $spotta_bed_pod_id = new WP_Query( 'page_id=21' );
                        while ( $spotta_bed_pod_id->have_posts() ) : $spotta_bed_pod_id->the_post();
                            the_content();
                        endwhile;
                        // wp_reset_postdata();
                    ?>
                </div>
                <div id="spotta_content" class="spotta_content">
                    <div class="spotta_tab_introduction">
                        <div class="container">
                            <?php echo get_field('product_introduction', 30); ?>
                        </div>
                    </div>
                    <?php
                        $spotta_forest_pod_id = new WP_Query( 'page_id=30' );
                        while ( $spotta_forest_pod_id->have_posts() ) : $spotta_forest_pod_id->the_post();
                            the_content();
                        endwhile;
                        // wp_reset_postdata();
                    ?>
                </div>
            </div>
		</div>
	<?php endwhile; endif; ?>
<?php get_footer()?>