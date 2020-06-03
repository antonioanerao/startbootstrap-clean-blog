<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}
?>

<div class="container">
    <div class="row">
        <div class="<?php if( is_active_sidebar( 'sidebar-post' ) ) { echo "col-md-8 col-lg-8"; } else { echo "col-md-10 col-lg-10 mx-auto"; } ?>">
            <div id="comments" class="comments-area">

                <?php if ( have_comments() ) : ?>
                    <h5 class="comments-title">
                        <?php
                        $comments_number = get_comments_number();
                        if ( '1' === $comments_number ) {
                            /* translators: %s: post title */
                            printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'twentysixteen' ), get_the_title() );
                        } else {
                            printf(
                            /* translators: 1: number of comments, 2: post title */
                                _nx(
                                    '%1$s thought on &ldquo;%2$s&rdquo;',
                                    '%1$s thoughts on &ldquo;%2$s&rdquo;',
                                    $comments_number,
                                    'comments title',
                                    'twentysixteen'
                                ),
                                number_format_i18n( $comments_number ),
                                get_the_title()
                            );
                        }
                        ?>
                    </h5>

                    <?php the_comments_navigation(); ?>

                    <ol class="comment-list">
                        <?php
                        wp_list_comments(
                            array(
                                'style'       => 'ol',
                                'short_ping'  => true,
                                'avatar_size' => 42,
                            )
                        );
                        ?>
                    </ol><!-- .comment-list -->

                    <?php the_comments_navigation(); ?>

                <?php endif; // Check for have_comments(). ?>

                <?php
                // If comments are closed and there are comments, let's leave a little note, shall we?
                if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
                    ?>
                    <p class="no-comments"><?php _e( 'Comments are closed.', 'twentysixteen' ); ?></p>
                <?php endif; ?>

                <?php
                $args = array(
                    'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
                    'title_reply_after'  => '</h4>',
                    'fields' => array(
                        'author' => '<p class="comment-form-author"><label for="author">Nome <span class="required">*</span></label> <input id="author" class="form-control" name="author" type="text" value="" maxlength="245" required="required"></p>',
                        'email'=> '<p class="comment-form-email"><label for="email">E-mail <span class="required">*</span></label> <input class="form-control" id="email" name="email" type="text" value="" maxlength="100" aria-describedby="email-notes" required="required"></p>',
                        'url' => '<p class="comment-form-url"><label for="url">Site</label> <input id="url" name="url" class="form-control" type="text" value="" maxlength="200"></p>'
                    ),
                    'comment_field' => '<p class="comment-form-comment"><label for="comment">Comentário</label> <textarea id="comment" class="form-control" name="comment" cols="45" rows="8" maxlength="65525" required="required"></textarea></p>',
                    'class_submit' => 'btn btn-info btn-sm'
                );
                comment_form($args);
                ?>

            </div><!-- .comments-area -->
        </div>
    </div>
</div>