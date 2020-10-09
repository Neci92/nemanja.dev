<section class="latest-articles">
    <div class="container">
        <div class="latest-articles__wrapper">
            <h2 class="h2 latest-articles__title">Latest Articles</h2>

            <ul>
            <?php $lastposts = get_posts( array(
                        'posts_per_page' => 3
                    ) );

                    if ( $lastposts ) {
                        foreach ( $lastposts as $post ) :
                            setup_postdata( $post ); ?>
                            <li class="article-card">
                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="h3"><?php the_title(); ?></h3>
                                </a>
                                <date class="date article-card__date"><?php echo get_the_date(); ?></date>
                                <p><?php the_excerpt(); ?></p>
                                <a class="button button--primary article-card__button" href="<?php the_permalink(); ?>">Read more</a>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="article-card__image">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </div>
                                <?php endif; ?>
                            </li>
                        <?php
                        endforeach; 
                        wp_reset_postdata();
                    }
                ?>
            </ul>


        </div>
    </div>
</section>