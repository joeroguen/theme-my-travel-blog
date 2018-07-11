<!-- sectionfooter -->
<h2 class='follow-me offset-2'>follow me</h2>
<div id='footer' class='footer'>
    <?php $follow_me_facebook_value = get_option( 'follow_me_facebook' ); ?>
    <?php if ( ! empty( $follow_me_facebook_value) ) : ?>
        <div class='social-icon'>
            <a href='<?php echo $follow_me_facebook_value; ?>' target='_blank'>
                <i class="fab fa-facebook-f"></i>
            </a>
        </div>
    <?php endif ?>
    <?php $follow_me_twitter_value = get_option( 'follow_me_twitter' ); ?>
    <?php if ( ! empty( $follow_me_twitter_value) ) : ?>
        <div class='social-icon'>
            <a href='<?php echo $follow_me_twitter_value; ?>' target='_blank'>
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    <?php endif ?>
    <?php $follow_me_instagram_value = get_option( 'follow_me_instagram' ); ?>
    <?php if ( ! empty( $follow_me_instagram_value) ) : ?>
        <div class='social-icon'>
            <a href='<?php echo $follow_me_instagram_value; ?>' target='_blank'>
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    <?php endif ?>
    <?php $follow_me_youtube_value = get_option( 'follow_me_youtube' ); ?>
    <?php if ( ! empty( $follow_me_youtube_value) ) : ?>
        <div class='social-icon'>
            <a href='<?php echo $follow_me_youtube_value; ?>' target='_blank'>
                <i class="fab fa-youtube"></i>
            </a>
        </div>
    <?php endif ?>
    <?php $follow_me_pinterest_value = get_option( 'follow_me_pinterest' ); ?>
    <?php if ( ! empty( $follow_me_pinterest_value) ) : ?>
        <div class='social-icon'>
            <a href='<?php echo $follow_me_pinterest_value; ?>' target='_blank'>
                <i class="fab fa-pinterest"></i>
            </a>
        </div>
    <?php endif ?>
    <?php $follow_me_vine_value = get_option( 'follow_me_vine' ); ?>
    <?php if ( ! empty( $follow_me_vine_value) ) : ?>
        <div class='social-icon'>
            <a href='<?php echo $follow_me_vine_value; ?>' target='_blank'>
                <i class="fab fa-vine"></i>
            </a>
        </div>
    <?php endif ?>
</div>
<small class='copyright'>&copy; copyright <?php echo date('Y'); ?></small>


<?php wp_footer(); ?>
</body>
</html>
