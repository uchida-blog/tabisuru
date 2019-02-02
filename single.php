<div class="single">

<?php get_header(); ?>

<div class="contents">
<div class="box3">

<div class="kiji">

  <div class="singlecategory">

  <i class="fa fa-thumb-tack"></i><?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
  </div>

              <div class="singledatetime">
        <time datetime="<?php the_time('Y-m-d'); ?>"> <i class="fa fa-clock-o"></i><?php the_time('Y年m月d日'); ?></time>
          </div>


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


            <div class="under-article-profile">

            <h1> この記事を書いた人</h1>

      <a href="http://freespirit-nic.com/profile/"><img src="<?php echo get_template_directory_uri(); ?>/img/profile.jpeg" alt="旅するシンガーソングライター"></a>
      <div class="text">
      <div class="name"><a href="<?php echo get_permalink(3669);?>"><p style="color: #666666;"><b>内田 美穂</b></p></a></div>
      <div class="state"><p>
      1994年生まれ/埼玉県出身。
      高校生の頃から、ラジオやライブハウスに出演し、シンガーソングライターとして活動。
      ​早稲田大学を卒業後、一年のギャップイヤーを経て、2018年4月に広告会社に入社するも、世界一周を決行するべく退職。
      現在は、シンガーソングライターや、旅ライターとして活動中。12月からは、ギター1本で世界を旅します！エベレスト等ヒマラヤを二度登山したりと「やらない後悔よりやった後悔」がモットーの旅人。
      <a href="http://freespirit-nic.com/profile//" > もっと見る</a></p></div>
      </div>
      <div class="info">
      <p><i class="fas fa-envelope"></i><b>&nbsp; uchidamiho2929@gmail.com</b></p>

          <div class="social">

            <div class="twitter">
          <a href="https://twitter.com/bleatand" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>

      </div>
      <div class="instagram">
          <a href="https://www.instagram.com/mihooooo2929/?hl=ja" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>

      </div>

              <div class="facebook">
            <a href="https://www.facebook.com/%E6%97%85%E3%81%99%E3%82%8B%E3%82%B7%E3%83%B3%E3%82%AC%E3%83%BC%E3%82%BD%E3%83%B3%E3%82%B0%E3%83%A9%E3%82%A4%E3%82%BF%E3%83%BC-%E5%86%85%E7%94%B0%E7%BE%8E%E7%A9%82-509317279497957/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>

        </div>


                  <div class="mail">
                <a href="mailto:uchidamiho2929@gmail.com" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a>

            </div>
          </div>
      </div>
      </div>


                <div class="facebookiine">

                  <div class="img">
                  <?php the_post_thumbnail( array( 300, 300 ) );
                  ?></div>

<div class="setsumei">
                      <div class="iineshiyou">
                      <p> この記事が気に入ったら</p>
                  <p>   いいね！しよう</p>
      </div>

      <?php if (have_posts()): ?>
      <?php while (have_posts()) : the_post(); ?>
      <!-- いいね！ボタンを表示 -->
<iframe src="https://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&width=130&layout=button_count&action=like&size=small&show_faces=false&share=true&height=46&appId" width="130" height="46" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
  <?php endwhile; ?>
  <?php else: ?>
  <!-- 投稿が無い場合の処理 -->
  <?php endif; ?>



      <div class="otodoke">
            <p>  旅するシンガーソングライターの</p>
              <p>   厳選記事をお届けします</p>
      </div>
    </div>
            </div>

            <div class="ninkinokiji">
              <h1>人気の記事ベスト３</h1>
              </div>


<!--
            <div class="share">
            <ul>
              <li><a href="#" class="share-tw">
                <i class="fa fa-twitter"></i>
            <span>Twitter</span>でシェア
            </a></li>
            <li><a href="#" class="share-fb">
              <i class="fa fa-facebook"></i>
            <span>Facebook</span>でシェア
            </a></li>
            <li><a href="#" class="share-gp">
            <i class="fa fa-google-plus"></i>
            <span>google+</span>でシェア
            </a></li>
            </ul>
            </div>
  -->

            <?php comments_template(); ?>

  <?php get_template_part( 'related' ); ?>


  	<div id="prev_next" class="clearfix">
  <?php
  $prevpost = get_adjacent_post(false, '', true); //前の記事
  $nextpost = get_adjacent_post(false, '', false); //次の記事
  if( $prevpost or $nextpost ){ //前の記事、次の記事いずれか存在しているとき
  ?>
  <?php
  if ( $prevpost ) { //前の記事が存在しているとき
  echo '<a href="' . get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '" id="prev" class="clearfix">
  <div id="prev_title">前の記事</div>
  ' . get_the_post_thumbnail($prevpost->ID, array(100,100)) . '
  <p>' . get_the_title($prevpost->ID) . '</p></a>';
  } else { //前の記事が存在しないとき
  echo  '<div id="prev_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
  </div></a></div>';
  }
  if ( $nextpost ) { //次の記事が存在しているとき
  echo '<a href="' . get_permalink($nextpost->ID) . '" title="'. get_the_title($nextpost->ID) . '" id="next" class="clearfix">
  <div id="next_title">次の記事</div>
  ' . get_the_post_thumbnail($nextpost->ID, array(100,100)) . '
  <p>'. get_the_title($nextpost->ID) . '</p></a>';
  } else { //次の記事が存在しないとき
  echo '<div id="next_no"><a href="' .home_url('/'). '"><div id="prev_next_home"><i class="fa fa-home"></i>
  </div></a></div>';
  }
  ?>
  <?php } ?>
  </div>


</div>





  <div class="box4">

  <?php get_sidebar(); ?>

</div>
</div>


<?php get_footer(); ?>
</div>
