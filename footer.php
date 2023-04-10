        <!-- フッター -->
        <footer class="footer">
            <!-- ここにフッターが入ります -->
            <div class="footer-contents">
              <div class="foot-list">

                <?php wp_nav_menu(array(
                  'container' => 'nav',
                  'container_class' => 'footer-nav',
                  'items_wrap' => '<ul id="%1$s" class="%2$s pc-nav-list">%3$s</ul>',
                  'menu' => 'footer-navigation'
                )); ?>
              </div>

            </div>
            <div class="footer-body">
              <ul class="footer-sns">
                  <li class="twitter"><a href="https://twitter.com/TwitterJP" target="_blank">
                    <i class="fab fa-twitter" aria-label="twitter"></i></a></li>

                  <li class="fb"><a href="https://www.facebook.com/facebook.com/facebookapp.japan/" target="_blank">
                    <i class="fab fa-facebook-f"aria-label="facebook"></i></a></li>

                  <li class="instagram"><a href="https://www.instagram.com/" class="flowbtn7 insta_btn7" target="_blank">
                    <i class="fab fa-brands fa-instagram" aria-label="instagram"></i></a></li>    
              </ul>
          </div>

          <small>Copyright🄫2022 Szen Ltd.All Right Reserved.</small>

        </footer>
        
<?php wp_footer(); ?>        
    </body>
</html>