<?php get_header(); ?>

<div class="contents">
<div class="box3">


  <div class="kiji">
  <?php
  if (have_posts()):
      while(have_posts()):the_post();
      ?>
    <article id="post-<?php the_ID(); ?>"<?php post_class('page'); ?>>

  <h1><?php the_title(); ?></h1>


  <?php the_content(); ?>

<?php
  endwhile;
endif;
    ?>


</article>


</div>
</div>


  <div class="box4">
  <?php get_sidebar(); ?>


</div>

</div>

<?php get_footer(); ?>
