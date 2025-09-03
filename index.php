<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( "charset" ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>
<body>

    <?php if( have_posts() ) : ?>

        <?php while( have_posts() ) : the_post(); ?>

        <!-- HTML content goes here -->
        <h1><?php the_title(); ?></h1>
        

        <main>

            <?php the_content(); ?>

        </main>

        <?php endwhile; ?>

    <?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>