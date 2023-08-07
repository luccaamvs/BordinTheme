<?php get_header(); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content">
                <main id="main" class="site">
                    <div class="container">
                        <div class="page-items">
                            <?php 
                            while(have_posts()): the_post();
                            ?>
                            <article>
                                <header>
                                    <h1><?php the_title(); ?></h1>
                                </header>

                                <?php the_content();?>
                            </article>
                            <?php
                            endwhile;
                            ?>
                        </div>
                        <?php get_sidebar('page'); ?>
                    </div>
                </main>
            </div>
        </div>
<?php get_footer(); ?>