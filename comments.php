<div class="comments">
    <h2>Comments</h2>
    <?php
    $args = array(
        'walker'            => null,
        'max_depth'         => '',
        'style'             => 'ul',
        'callback'          => null,
        'end-callback'      => null,
        'type'              => 'all',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 80,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
        'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
    );
    ?>

    <?php
    wp_list_comments($args, $comments);

    $comments_args = array(

        'label_submit' => __('Send', 'textdomain'),

        'title_reply' => __('Write a Reply or Comment', 'textdomain'),

        'comment_notes_after' => '',

        'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x('Comment', 'noun') . '</label><br /><textarea id="comment" name="comment" aria-required="true"></textarea></p>',
    );
    comment_form($comments_args);

    ?>
</div>