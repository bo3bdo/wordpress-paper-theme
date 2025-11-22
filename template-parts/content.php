<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paper
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
        <header class="entry-header">
                <div class="entry-meta-top">
                        <span class="entry-date"><?php echo esc_html( get_the_date() ); ?></span>
                        <?php if ( has_category() ) : ?>
                                <span class="entry-categories"><?php echo wp_kses_post( get_the_category_list( ' / ' ) ); ?></span>
                        <?php endif; ?>
                </div>

                <?php
                if ( is_singular() ) :
                        the_title( '<h1 class="entry-title">', '</h1>' );
                else :
                        the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                endif;
                ?>
        </header><!-- .entry-header -->

        <?php paper_post_thumbnail(); ?>

        <div class="entry-content">
                <?php
                if ( is_singular() ) {
                        the_content();
                        wp_link_pages(
                                array(
                                        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'paper' ),
                                        'after'  => '</div>',
                                )
                        );
                } else {
                        the_excerpt();
                }
                ?>
        </div><!-- .entry-content -->

        <footer class="entry-footer">
                <?php if ( is_singular() ) : ?>
                        <?php paper_entry_footer(); ?>
                <?php else : ?>
                        <a class="read-more" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Continue reading', 'paper' ); ?> &rarr;</a>
                <?php endif; ?>
        </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
