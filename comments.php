<section class="comments">
<?php
$comment_form_args = array(
    'title_reply' => 'お気軽にコメントどうぞ！',
    'comment_notes_after' => ' '
);
comment_form($comment_form_args);
if ( have_comments() ) :
?>
    <p><?php comments_number(); ?></p>
    <ol class="commentlist">
        <?php
         $wp_list_comments_args=array(
'avatar_size' => '50'
);
      wp_list_comments($wp_list_comments_args); ?>
    </ol>
<?php

$paginate_comments_links_args=array(
  'prev_text'=>'前のコメント',
  'next_text'=>'次のコメント ',
);
paginate_comments_links($paginate_comments_links_args);
endif;

?>
</section><!-- /.comments -->
