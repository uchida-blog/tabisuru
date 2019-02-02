

  <footer class="footer">
    <div class="footer-inner">
	    <div class="copyright">
			<p>Copyright © <?php echo date('Y'); ?> 旅するシンガーソングライター｜内田美穂 All Rights Reserved.</p>
	    </div>
	    <div class="sociallink">
		    <ul>
				<li><a href="https://twitter.com/bleatand" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="https://www.instagram.com/mihooooo2929/?hl=ja" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				<li style="clear: both;"></li>
				
		    </ul>
	    </div>
		<div style="clear: both;"></div>

      <div id="footer-menu">
          <?php wp_nav_menu( array ( 'theme_location' => 'footer-menu' ) ); ?>
      </div>
	  <div style="clear: both;"></div>
	  
</div>


</footer>

<?php wp_footer(); ?>
</body>
</html>
