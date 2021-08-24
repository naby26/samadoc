    <?php
        /**
         * elearni_hook_content_after hook.
         * 
         */
        do_action( 'elearni_hook_content_after' );
    ?>

        <!-- **Footer** -->
        <footer id="footer">
            <div class="container">
            <?php
                /**
                 * elearni_footer hook.
                 * 
                 * @hooked elearni_vc_footer_template - 10
                 *
                 */
                do_action( 'elearni_footer' );
            ?>
            </div>
        </footer><!-- **Footer - End** -->

    </div><!-- **Inner Wrapper - End** -->
        
</div><!-- **Wrapper - End** -->
<?php
    
    do_action( 'elearni_hook_bottom' );

    wp_footer();
?>
</body>
</html>