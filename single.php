<?php get_header(); ?>


<div id="main">

<?php get_sidebar(); ?>

    <div id="article_list">
        <?php
        //load in dynamic post content
        //create a 'while' loop to give instructions to wordpress about what to do if it finds posts in the database

        while(have_posts()):
            the_post();
        ?>

        <article> 
            <h1><?php the_title(); ?></h1>
            <h2>testing custom single page</h2>
            <?php the_content(); ?>
        </article>

    <?php
    endwhile;
    ?>
    </div> <!--#article list-->


</div> <!-- #main -->

<?php get_footer(); ?>

</body>

</html>