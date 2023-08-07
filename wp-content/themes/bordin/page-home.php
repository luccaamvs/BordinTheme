<?php get_header(); ?>

<img src="<?php  header_image(); ?>"
    height="<?php echo get_custom_header()->height; ?>"
    width="<?php echo get_custom_header()->width; ?>" alt="">

        <div id="content" class="site-content">
            <div id="primary" class="content">
                <main id="main" class="site">
                    <section class="hero">
                    Hero
                    </section>
                    <section class="services">
                    <h2>Serviços</h2>
                    <div class="container">
                        <div class="services-item">
                            <?php if(is_active_sidebar('skill-01')){
                                dynamic_sidebar('skill-01');
                                }
                            ?>
                        </div>
                        <div class="services-item">
                            <?php if(is_active_sidebar('skill-02')){
                                    dynamic_sidebar('skill-02');
                                }
                            ?>
                        </div>
                        <div class="services-item">
                            <?php if(is_active_sidebar('skill-03')){
                                    dynamic_sidebar('skill-03');
                                }
                            ?>
                        </div>
                    </div>
                    </section>
                    <section class="home-blog">
                        <h2>Últimas Novidades:</h2>
                        <div class="container">
                            <?php 
                                $args = array(
                                    'post_type'         => 'post',
                                    'posts_per_page'    => 3,
                                    'category__in'      => array(7,5),
                                    'category__not_in'  => array(1)
                                );
                                
                                $postlist = new WP_Query( $args);

                                if($postlist->have_posts()):
                                    while($postlist->have_posts()): $postlist->the_post();
                                    ?>
                                    <article class="latest-news">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="meta-info">
                                            <p>Postado em: <?php echo get_the_date(); ?> por: <?php the_author_posts_link(); ?> </p>
                                            <p>Categorias: <?php the_category( ' ' ); ?></p>
                                            <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                                        </div>
                                        <?php the_excerpt();?>
                                    </article>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                                else: ?> 
                                    <p>Nada a ser exibido</p> 
                                <?php endif; ?>

                        </div>
                    </section>
                </main>
            </div>
        </div>
        
<?php get_footer(); ?>   