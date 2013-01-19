<?php get_header(); ?>


<div id="main">

<?php get_sidebar(); ?>

    <div id="article_list">
        <h1>OOPS! 404 error</h1>
        
        <?php
        //load in dynamic post content
        //create a 'while' loop to give instructions to wordpress about what to do if it finds posts in the database

        while(have_posts()):
            the_post();
        ?>

        <article> 
            <h1><?php the_title(); ?></h1>
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