<?php get_header(); ?>


<div id="main">

<?php get_sidebar(); ?>

    <div id="article_list">

        <h1>Hey look at me, im a category archive template</h1>

        <?php
        //load in dynamic post content
        //create a 'while' loop to give instructions to wordpress about what to do if it finds posts in the database

        while(have_posts()):
            the_post();
        ?>

        <article> 
            <h1>
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>

                </a>
            </h1>
            <?php the_excerpt(); ?>
            <p><a href="<?php the_permalink(); ?>">Read more...</a></p>
        </article>

    <?php
    endwhile;
    ?>

    <!-- thisis the function to generate links to next or previous pages -->
    <?php posts_nav_link(); ?>


    </div> <!--#article list-->
    <?php get_sidebar(); ?>


</div> <!-- #main -->

<?php get_footer(); ?>

</body>

</html>