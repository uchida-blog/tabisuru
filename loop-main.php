
<h1></h1>
<?php
if (have_posts()):
    while(have_posts()):the_post();
    ?>

  <article class="gaiyou">
  <a href="<?php the_permalink(); ?>">

<div class="gaiyouimg">
  <?php the_post_thumbnail('single-thumbnaill');
  ?>

          <div class="gaiyoucategory">
        <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
          </div>
</div>

<div class="moji">
  <h1><?php the_title(); ?></h1>


        <div class="datetime">
  <time datetime="<?php the_time('Y-m-d'); ?>"> <i class="fa fa-clock-o"></i><?php the_time('Y年m月d日'); ?></time>
    </div>

</div>
<p><?php the_excerpt(); ?></p>


  </a>
  </article>
  <!--表示する内容ここまで-->

  <?php
  endwhile;
  endif;
  ?>

      <div class="pagination-area">
      <?php
      the_posts_pagination( array (
        'prev_text' => '<',
        'next_text' => '>',
        'mid_size'  => 2
      ) );
      ?>
      </div>
