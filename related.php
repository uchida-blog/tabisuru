

    <aside class="osusume">
      <h1>あわせて読みたい</h1>
      <ul>


                  <li>
  <?php
      $original_post = $post;
      $tags = wp_get_post_tags($post->ID);
      $tagIDs = array();
      if ($tags) {
          $tagcount = count($tags);
          for ($i = 0; $i < $tagcount; $i++) {
              $tagIDs[$i] = $tags[$i]->term_id;
          }
      $args=array(
      'tag__in' => $tagIDs,
      'post__not_in' => array($post->ID),
      'showposts'=>4,
      'caller_get_posts'=>1
      );
  $my_query = new WP_Query($args);
  if( $my_query->have_posts() ) {
      while ($my_query->have_posts()) : $my_query->the_post(); ?>

           <span class="cat-thum"><div class="img"><?php
             if ( has_post_thumbnail()) {
                  the_post_thumbnail('thumbnail');
                 } else {
                echo '<img src="'.get_bloginfo('template_url').'/images/no-image.gif" alt="hoge" />';
                };
             ?></div>
           </span>
              <h4>
                  <a href="<?php the_permalink();?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
              <div class="text"><?php the_title(); ?></div></a>
              </h4>

  <?php endwhile; wp_reset_query(); ?>
  <?php } else { ?>
      関連する記事は見当たりません…
  <?php } } ?>

</li>


</ul>

</aside>
