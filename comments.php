<div class="mtb-comments">
    <h2>comments</h2>
    <?php if ( have_comments() ) : ?>
        <?php paginate_comments_links( array( 'next_text' => 'Next' ) ); ?>
        <?php wp_list_comments( array(
            'max_depth' => '1',
            'avatar_size' => 50
        ) ); ?>
    <?php endif; ?>
    <?php comment_form(); ?>
</div>
