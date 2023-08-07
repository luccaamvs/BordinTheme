<?php get_header(); ?>

<div id="primary">
    <div id="main">
        <div class="container">

            <?php 
            while(have_posts()):
                the_post();
            ?>
                <article id="post-<?php the_ID();?>" <?php post_class();?> >
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                    <div class="meta-info">
                        <p>Postado em: <?php echo get_the_date(); ?> por: <?php the_author_posts_link(); ?> </p>
                        <p>Categorias: <?php the_category( ' ' ); ?></p>
                        <p>Tags: <?php the_tags( '', ', ' ); ?></p>
                    </div>
                    <?php the_excerpt();?>
                </article>

            <?php
            endwhile;
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>
