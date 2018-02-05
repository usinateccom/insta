<?php
/**
 * @package Clean Lite
 */
?>
 <div class="blog_lists">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
		<?php if (has_post_thumbnail() ){ ?>
        <div class="post-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
        <?php }?>
  
        <header class="entry-header">           
            <h4><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h4>
            <?php if ( 'post' == get_post_type() ) : ?>
                <div class="postmeta">
                    <div class="post-date"><?php echo get_the_date(); ?></div><!-- post-date -->
                    <div class="post-comment"> &nbsp;|&nbsp; <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></div>
                    <div class="post-categories"> &nbsp;|&nbsp; <?php the_category( esc_attr( ', ', 'clean-lite' )); ?></div>                  
                </div><!-- postmeta -->
            <?php endif; ?>
        </header><!-- .entry-header -->
        
        
    
        <?php if ( is_search() || !is_single() ) : // Only display Excerpts for Search ?>
        <div class="entry-summary">
           	<?php the_excerpt(); ?>
           <a class="ReadMore" href="<?php the_permalink(); ?>"><?php esc_attr_e('Read More &raquo;','clean-lite'); ?></a>
        </div><!-- .entry-summary -->
        <?php else : ?>
        <div class="entry-content">
            <?php the_content( esc_attr_e( 'Continue reading <span class="meta-nav">&rarr;</span>', 'clean-lite' ) ); ?>
            <?php
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_attr_e( 'Pages:', 'clean-lite' ),
                    'after'  => '</div>',
                ) );
            ?>
        </div><!-- .entry-content -->
        <?php endif; ?>
        <div class="clear"></div>
    </article><!-- #post-## -->
</div><!-- blog-post-repeat -->