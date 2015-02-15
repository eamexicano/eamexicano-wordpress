<?php get_header(); ?>
<div class='content'>
    <div class='posts'>
      <?php if (have_posts()) : while (have_posts()) : the_post();  ?>
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
          <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <section class='entry'>
                 <?php the_excerpt(); ?>
          </section>
        </article>
      <?php endwhile; endif; ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>