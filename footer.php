

  <footer class="footer">
    <div class="footer-inner">
    <div class="copyright">
    <p>
   <span><a href="<?php echo home_url(); ?> "><font color=#888888>Copyright© <?php echo date('Y'); ?>旅するシンガーソングライター｜内田美穂　 All Rights Reserved.</font></a></span>
</p>
    </div>


    <div class="sociallink">
    <ul>
    <li><a href="https://twitter.com/bleatand" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
    <li><a href="https://www.instagram.com/mihooooo2929/?hl=ja" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>

    </div>

      <div id="footer-menu">
          <?php wp_nav_menu( array ( 'theme_location' => 'footer-menu' ) ); ?>
      </div>
</div>


</footer>

<?php wp_footer(); ?>
</body>
</html>
