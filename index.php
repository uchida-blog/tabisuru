<?php get_header(); ?>

<div class="contents">


  <div class="box3">


<div class="contents-list">

<?php get_template_part('loop','main'); ?>

</div>


</div>


  <div class="box4">

    <?php get_sidebar('categoies'); ?>
    <?php get_sidebar('archibes'); ?>
</div>
</div>


<div class="pagenation">
  <ul>
<li><a href="#" class="active">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
  </ul>
</div>
<?php get_footer(); ?>
