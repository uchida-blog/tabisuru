<div class="tabs">
<input id="all" type="radio" name="tab_item" checked>
<label class="tab_item" for="all">最新記事</label>
<input id="programming" type="radio" name="tab_item">
<label class="tab_item" for="programming">ぼうけん記</label>
<input id="junbi" type="radio" name="tab_item">
<label class="tab_item" for="junbi">世界一周準備</label>
<input id="design" type="radio" name="tab_item">
<label class="tab_item" for="design">お知らせ</label>
  <style>
  .contents{padding-left: 0px;
    padding-right: 0px}

  </style>




  <!--最新記事タブここから-->

<div class="tab_content" id="all_content">
<div class="tab_content_description">
<p class="c-txtsp">

  <div class="gaiyou">
  <?php
  if (have_posts()):
      while(have_posts()):the_post();
      ?>
  <article id="post-<?php the_ID(); ?>"<?php post_class('gaiyou'); ?>>
  <a href="<?php the_permalink(); ?>">

    <id class="thumbnailandtitle">
  <div class="thumbnail">
  <?php the_post_thumbnail( 'list-thumbnail' );
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
</p>
</div>


<a href="/index.php?page_id=3277"  class="saishinclick">▸もっと読む</a>
</div>


<!--最新記事タブここまで-->

<!--冒険記タブここから-->
<div class="tab_content" id="programming_content">
<div class="tab_content_description">
<p class="c-txtsp">




    <?php
    $posts = get_posts(array(
    'posts_per_page' => 10, // 表示件数
    'category' => '60' // カテゴリIDもしくはスラッグ名
    ));
    ?>
    <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

    <!--表示する内容が入ります。-->
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

    <!--表示する内容ここまで-->

    <?php endforeach; endif; ?>


    <a href="/index.php?page_id=3290"  class="saishinclick">▸もっと読む</a>
</p>
</div>
</div>

<!--冒険記タブここまで-->

<!--世界一周準備タブここから-->

<div class="tab_content" id="junbi_content">
<div class="tab_content_description">
<p class="c-txtsp">

  <?php
  $posts = get_posts(array(
  'posts_per_page' => 10, // 表示件数
  'category' => '61' // カテゴリIDもしくはスラッグ名
  ));
  ?>
  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

  <!--表示する内容が入ります。-->
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
  <!--表示する内容ここまで-->

  <?php endforeach; endif; ?>

  <a href="/index.php?page_id=3579"  class="saishinclick">▸もっと読む</a>

</p>

</div>
</div>


<!--世界一周準備タブここまで-->

<!--お知らせタブここから-->
<div class="tab_content" id="design_content">
<div class="tab_content_description">
<p class="c-txtsp">  <?php
  $posts = get_posts(array(
  'posts_per_page' => 10, // 表示件数
  'category' => '49' // カテゴリIDもしくはスラッグ名
  ));
  ?>
  <?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

  <!--表示する内容が入ります。-->
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
  <!--表示する内容ここまで-->

  <?php endforeach; endif; ?>

  <a href="/index.php?page_id=3296"  class="saishinclick">▸もっと読む</a>

</p>

</div>
</div>


<!--お知らせタブここまで-->


</div>
