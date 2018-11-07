
      <aside class="sponsor">
        <h1>内田美穂のスポンサー様！</h1>
        <ul>
        <p>▼株式会社モンベル様▼</p>
          <li>  <a href="https://www.montbell.jp/"><img src="<?php echo get_template_directory_uri(); ?>/img/montbell_200x40.png" alt="株式会社モンベル様"></a></li>
        </ul>
    <a href="<?php echo get_permalink(3500);?>"><p style="color: #666666; font-size:12px">スポンサー様一覧はこちら</p></a>
  </aside>





      <aside class="sideprofile">
        <h1>Profile</h1>

  <a href="http://freespirit-nic.com/profile/"><img src="<?php echo get_template_directory_uri(); ?>/img/profile.jpeg" alt="旅するシンガーソングライター"></a>
  <div class="text">
  <div class="name"><a href="<?php echo get_permalink(3669);?>"><p style="color: #666666;"><b>内田 美穂</b></p></a></div>
  <div class="state"><p>

  1994年生まれ/埼玉県出身。 高校生の頃から、ラジオやライブハウスに出演し、シンガーソングライターとして活動。 ​早稲田大学を卒業後、一年のギャップイヤーを経て、2018年4月に広告会社に入社するも、世界一周を決行するべく退職。 現在は、シンガーソングライターや、旅ライターとして活動中。12月からは、ギター1本で世界を旅します！エベレスト等ヒマラヤを二度登山したりと「やらない後悔よりやった後悔」がモットーの旅人。
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
      </aside>

            <aside class="osusumecontents">

              <h1></h1>



            </aside>
      <aside class="osusumecontents">

        <h1>おすすめコンテンツ</h1>

      <div class="banners">
          <ul>
            <li><a href="<?php echo get_permalink(4902);?>"><img src="<?php echo get_template_directory_uri(); ?>/img/nepalbanner.jpg"  alt="ネパール語"></a></li>
            <li><a href="<?php echo get_permalink(4907);?>"><img src="<?php echo get_template_directory_uri(); ?>/img/tabihack.jpg"  alt="旅ハック"></a></li>

          </ul>
      </div>

      </aside>

<aside class="sidemenu">
  <h1>カテゴリー</h1>
<ul class="categories">

  <ul class="side_category">
   <?php wp_list_categories('orderby=count&order=desc&show_count=1&title_li='); ?>

</aside>







<aside class="recentpost">
  <h1>最新の投稿</h1>

  <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
  <ins class="adsbygoogle"
       style="display:block"
       data-ad-format="fluid"
       data-ad-layout-key="-i6+3-e-y+36"
       data-ad-client="ca-pub-8557377985020104"
       data-ad-slot="2570740486"></ins>
  <script>
  (adsbygoogle = window.adsbygoogle || []).push({});
  </script>

    <ul>
      <?php
$ads_infeed = '4' ; //何番目に表示したいか
$ads_infeed_count = '2';
?>


<?php
$args = array(
'posts_per_page' => 4 // 表示件数の指定
);
$posts = get_posts( $args );
foreach ( $posts as $post ): // ループの開始
setup_postdata( $post ); // 記事データの取得
?>


      <?php
if($ads_infeed_count == $ads_infeed){
?>


<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="fluid"
     data-ad-layout-key="-i6+3-e-y+36"
     data-ad-client="ca-pub-8557377985020104"
     data-ad-slot="2570740486"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>


<?php
}
$ads_infeed_count++;
?>

<li>
  <div class="img">
  <?php the_post_thumbnail('thumbnail');
  ?>
</div>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
</li>
<?php
endforeach; // ループの終了
wp_reset_postdata(); // 直前のクエリを復元する
?>
</ul>

  </aside>








  <aside class="sidead">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- sidebar -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-8557377985020104"
         data-ad-slot="9315262174"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

    </aside>
