<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package paper
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card search-card' ); ?>>
        <header class="entry-header">
                <div class="entry-meta-top">
                        <span class="entry-date"><?php echo esc_html( get_the_date() ); ?></span>
                        <?php if ( has_category() ) : ?>
                                <span class="entry-categories"><?php echo wp_kses_post( get_the_category_list( ' / ' ) ); ?></span>
                        <?php endif; ?>
                </div>

                <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
        </header><!-- .entry-header -->

        <?php paper_post_thumbnail(); ?>

        <div class="entry-summary">
                <?php the_excerpt(); ?>
        </div><!-- .entry-summary -->

        <footer class="entry-footer">
                <a class="read-more" href="<?php echo esc_url( get_permalink() ); ?>"><?php esc_html_e( 'Read article', 'paper' ); ?> &rarr;</a>
        </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
