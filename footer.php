        <footer id="footer">
            <div class="container">
                <div id="contact_section" class="contact_section">
                        <div class="contact_info">
                            <div class="vertical_line"></div>
                            <div class="contact_heading">
                                <?php echo get_field('contactus_heading', 'options');?>
                            </div>
                            <div class="contactus_description">
                                <?php echo get_field('contactus_description', 'options');?>
                            </div>
                            <div class="contactus_address">
                                <?php echo get_field('contactus_address', 'options');?>
                            </div>
                            <div class="contactus_phone">
                                <a href="tel:<?php echo get_field('contactus_phone', 'options');?>"><img src="<?php echo get_template_directory_uri();?>/images/phone_icon.png" /><?php echo get_field('contactus_phone', 'options');?></a>
                            </div>
                        </div>
                    <div class="contact_form_wrapper">
                        <!-- <?php gravity_form( 1, false, false, false, '', false ); ?> -->
                        <?php gravity_form(1, false, false, false, '', true, 12);?>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <div class="copyright_info">© <?php echo date("Y"); echo " "; bloginfo('name'); ?>. All rights reserved.</div>
                    <div class="separator_line_wrapper"><div class="separator_line"></div></div>
                    <div class="footer_menu"><?php dynamic_sidebar( 'footer-menu' ); ?></div>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
		<script type="text/javascript">
			var stylesheet_directory_uri = "<?php echo get_template_directory_uri(); ?>";
		</script>
    </body>
</html>