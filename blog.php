<?php
/*
Template Name: blog
*/
        get_header(); ?>

        <header class="header--imgs page-header alignwide">
            <h1 class="services--page-title"><?php single_post_title(); ?></h1>
        </header>
        <body>
            <aside>
                <h3>Search</h3>
                <?php get_search_form() ?>
                <h3>Recent posts</h3>
                <ul id="slider-id" class="slider-class">
                <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 4, // 
                        'post_status' => 'publish' 
                    ));
                    foreach( $recent_posts as $post_item ) : ?>
                        <li>
                            <a href="<?php echo get_permalink($post_item['ID']) ?>">
                                <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>
                                <p class="slider-caption-class"><?php echo $post_item['post_title'] ?></p>
                                <time datetime="<?php echo get_the_date('c'); ?>" itemprop="datePublished"><?php echo get_the_date(); ?></time>
                            </a>
                        </li>
                <?php endforeach; ?>
                </ul>
                <h3>Archives</h3>
                <h3>Categories</h3>
                <h3>Tags</h3>
                <?php
                $post_tags = get_the_tags();
                if ( ! empty( $post_tags ) ) {
                    echo '<ul>';
                    foreach( $post_tags as $post_tag ) {
                        echo '<li><a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a></li>';
                    }
                    echo '</ul>';
                } 
                ?>
            </aside>
            <main>
                <section class="main--card">

            <?php
                if( have_posts() ) {
                    while( have_posts() ) {
                        the_post();
                        ?>
                            <h2><?php the_title(); ?></h2>
                        <?php
                    }
                }
            ?>

                </section>
            </main>
        </body>
