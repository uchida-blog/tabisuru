<?php
/**
*Template Name:ヒマラヤ登山
*Description:ぼうけん記のテンプレート
*/
 get_header(); ?>

<div class="contents">
<div class="box3">

  <div class="contents-list">
<div class="contentslist-h1">
  <p>CATEGORY</p>
        <h1 style="color:#666666,18px">ヒマラヤ登山記</h1>
        </div>
  <?php
  $posts = get_posts(array(
  'posts_per_page' => 50, // 表示件数
  'category' => '48,63' // カテゴリIDもしくはスラッグ名
  ));
  ?>
  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

  <!--表示する内容が入ります。-->
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

  <?php endforeach; endif; ?>

  </div>
    <div class="pagination-area">
    <?php
    the_posts_pagination( array (
      'prev_text' => '<',
      'next_text' => '>',
      'mid_size'  => 2
    ) );
    ?>
    </div>
</div>


  <div class="box4">
  <?php get_sidebar(); ?>


</div>

</div>

<?php get_footer(); ?>
