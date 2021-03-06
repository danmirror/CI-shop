<!-- footer -->  
<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
     <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-top-area">
            <div class="row">
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <h3>Main Menu</h3>
                  <ul class="aa-footer-nav">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Our Services</a></li>
                    <li><a href="#">Our Products</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Knowledge Base</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Delivery</a></li>
                      <li><a href="#">Returns</a></li>
                      <li><a href="#">Services</a></li>
                      <li><a href="#">Discount</a></li>
                      <li><a href="#">Special Offer</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Useful Links</h3>
                    <ul class="aa-footer-nav">
                      <li><a href="#">Site Map</a></li>
                      <li><a href="#">Search</a></li>
                      <li><a href="#">Advanced Search</a></li>
                      <li><a href="#">Suppliers</a></li>
                      <li><a href="#">FAQ</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-3 col-sm-6">
                <div class="aa-footer-widget">
                  <div class="aa-footer-widget">
                    <h3>Contact Us</h3>
                    <address>
                      <p> 25 Astor Pl, NY 10003, USA</p>
                      <p><span class="fa fa-phone"></span>+1 212-982-4589</p>
                      <p><span class="fa fa-envelope"></span>dailyshop@gmail.com</p>
                    </address>
                    <div class="aa-footer-social">
                      <a href="#"><span class="fa fa-facebook"></span></a>
                      <a href="#"><span class="fa fa-twitter"></span></a>
                      <a href="#"><span class="fa fa-google-plus"></span></a>
                      <a href="#"><span class="fa fa-youtube"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
     </div>
    </div>
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
      <div class="container">
        <div class="row">
        <div class="col-md-12">
          <div class="aa-footer-bottom-area">
            <p>Designed by <a href="http://www.markups.io/">MarkUps.io</a></p>
            <div class="aa-footer-payment">
              <span class="fa fa-cc-mastercard"></span>
              <span class="fa fa-cc-visa"></span>
              <span class="fa fa-paypal"></span>
              <span class="fa fa-cc-discover"></span>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / footer -->

  <!-- Login Modal -->  
  <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Login or Register</h4>
          <form class="aa-login-form mb-5" action="<?php echo site_url().'/user/login'?>" method="post">
            <label for="">Username or Email address<span>*</span></label>
            <input type="text" name="name" placeholder="Username or email">
            <label for="">Password<span>*</span></label>
            <input type="password" name="password" placeholder="Password">
            <button class="aa-browse-btn" type="submit">Login</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
            <div class="aa-register-now">
              Don't have an account?<a href="" data-dismiss="modal"  data-toggle="modal" data-target="#Registration-modal"">Register now!</a>
            </div>
          </form>
        </div>                        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div>  
  <div class="modal fade" id="Registration-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">                      
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4>Register</h4>

          <form class="aa-login-form" action="<?php echo site_url().'/user/registration'?>" method="post">
            <div class="row">
              <div class="col-md-6">
                <label for="">Nama<span>*</span></label>
                <input type="text" name="nama" placeholder="name">
              </div>
              <div class="col-md-6">
                <label for="">Alamat<span>*</span></label>
                <input type="text" name="alamat" placeholder="alamat">
              </div>
              <div class="col-md-6">
                <label for="">Kota<span>*</span></label>
                <input type="text" name="kota" placeholder="kota">
              </div>
              <div class="col-md-6">
                <label for="">Provinsi<span>*</span></label>
                <input type="text" name="provinsi" placeholder="provinsi">
              </div>
              <div class="col-md-6">
                <label for="">Telp<span>*</span></label>
                <input type="text" name="telp" placeholder="Telp">
              </div>
              <div class="col-md-6">
                <label for="">Email address<span>*</span></label>
                <input type="text" name="email" placeholder="email">
              </div>
              <div class="col-md-6">
                <label for="">Password<span>*</span></label>
                <input type="password" name="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="">Re-Password<span>*</span></label>
                <input type="password" name="password" placeholder="Password">
              </div>
            </div>
          
            <button class="aa-browse-btn" type="submit">Register</button>
            <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me </label>
            
          </form>
        </div>                        
      </div>
    </div>
  </div>    

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?php echo base_url().'/assets/template/'; ?>js/bootstrap.js"></script>  
  <!-- SmartMenus jQuery plugin -->
  <script type="text/javascript" src="<?php echo base_url().'/assets/template/'; ?>js/jquery.smartmenus.js"></script>
  <!-- SmartMenus jQuery Bootstrap Addon -->
  <script type="text/javascript" src="<?php echo base_url().'/assets/template/'; ?>js/jquery.smartmenus.bootstrap.js"></script>  
  <!-- To Slider JS -->
  <script src="<?php echo base_url().'/assets/template/'; ?>js/sequence.js"></script>
  <script src="<?php echo base_url().'/assets/template/'; ?>js/sequence-theme.modern-slide-in.js"></script>  
  <!-- Product view slider -->
  <script type="text/javascript" src="<?php echo base_url().'/assets/template/'; ?>js/jquery.simpleGallery.js"></script>
  <script type="text/javascript" src="<?php echo base_url().'/assets/template/'; ?>js/jquery.simpleLens.js"></script>
  <!-- slick slider -->
  <script type="text/javascript" src="<?php echo base_url().'/assets/template/'; ?>js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="<?php echo base_url().'/assets/template/'; ?>js/nouislider.js"></script>
  <!-- Custom js -->
  <script src="<?php echo base_url().'/assets/template/'; ?>js/custom.js"></script> 

  </body>
</html>