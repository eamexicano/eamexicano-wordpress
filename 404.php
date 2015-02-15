<?php get_header(); ?>
<div class='content'>
    <div class='posts'>
        <article <?php post_class(); ?>>          
          <h1><a href="<?php bloginfo('url'); ?>">404</a></h1>
          <section class='entry'>
            No se encontró el contenido.<br>
            Regresa a la página principal dando clic <a href="<?php bloginfo('url'); ?>">aqui</a>.
          </section>
        </article>        
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>