<?php
/**
*Template Name:冒険記一覧
*Description:冒険記記事のテンプレート
*/
 get_header(); ?>

<div class="contents">
<div class="box3">

<h1>ぼうけん記</h1>
    <div class="gaiyou"><?php $paged = get_query_var('paged'); ?>
<?php query_posts("cat=1&posts_per_page=10&paged=$paged"); ?>

<?php if (have_posts()) : while(have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>"<?php post_class('gaiyou'); ?>>
    <a href="<?php the_permalink(); ?>">

      <id class="thumbnailandtitle">
    <div class="thumbnail">
    <?php the_post_thumbnail('thumbnail');
    ?>
    </div>
    <div class="moji">
      <div class="gaiyoutaitle">
    <h1><?php the_title(); ?></h1>
    </div>
    <div class="kijiinfoloop">
    <time datetime="<?php the_time('Y-m-d'); ?>"> <i class="fa fa-clock-o"></i><?php the_time('Y年m月d日'); ?></time>
    </div>
    <div class="kijicatloop">
    <?php the_category(); ?>
    </div>

    </id>

    <div class="excerpt">
    <p><?php the_excerpt(); ?></p>
    </div>
    <a href="<?php the_permalink(); ?>"><div class="more"><p>続きを読む<i class="fa fa-chevron-right"></i></p></a>
    </div>
    </div>
    </a>
    </article>
    <?php
    endwhile;
    endif;
    ?>
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
