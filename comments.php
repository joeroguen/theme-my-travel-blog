<div class="mtb-comments">
    <h2>comments</h2>
    <?php paginate_comments_links( array( 'next_text' => 'Next' ) ); ?>
    <?php wp_list_comments( array( 'max_depth' => '1' ) ); ?>
    <?php comment_form(); ?>
</div>
