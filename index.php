<?php
/* main template */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
  <h1><?php bloginfo('name'); ?></h1>
  <p><?php bloginfo('description'); ?></p>
</header>

<main>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article>
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
    </article>
  <?php endwhile; else: ?>
    <p>No posts yet. Add one from your WordPress dashboard ✨</p>
  <?php endif; ?>
</main>

<?php wp_footer(); ?>
</body>
</html>
