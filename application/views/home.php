<section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
           <!-- single slide item -->
             <li>
              <div class="seq-model">
                <img data-seq src="<?php echo base_url().'/assets/img/'; ?>slider/hm3.jpg" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>LAPTOP Sales Shop</span>                
                <h2 data-seq>MASTER SMART</h2>                
                <p data-seq>Jalan. R.Suprapto No.70, Jetis Timur, Purwodadi, Kec. Purwodadi, Kabupaten Grobogan, Jawa Tengah 58111</p>
                <a data-seq href="<?php echo site_url().'/Product'; ?>" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="<?php echo base_url().'/assets/img/'; ?>slider/hm3.jpg" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>LAPTOP Sales Shop</span>                
                <h2 data-seq>MASTER SMART</h2>                
                <p data-seq>Jalan. R.Suprapto No.70, Jetis Timur, Purwodadi, Kec. Purwodadi, Kabupaten Grobogan, Jawa Tengah 58111</p>
                <a data-seq href="<?php echo site_url().'/Product'; ?>" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="<?php echo base_url().'/assets/img/'; ?>slider/hm3.jpg" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>LAPTOP Sales Shop</span>                
                <h2 data-seq>MASTER SMART</h2>                
                <p data-seq>Jalan. R.Suprapto No.70, Jetis Timur, Purwodadi, Kec. Purwodadi, Kabupaten Grobogan, Jawa Tengah 58111</p>
                <a data-seq href="<?php echo site_url().'/Product'; ?>" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->                    
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab">Product</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">

                      <?php foreach($product as $p):?>
                  <!-- start single product item -->
                  <li>
                    <figure>
                      <a class="aa-product-img" href="#"><img src="<?php echo base_url().'/assets/img/img_product/'.$p->foto;?>" alt="polo shirt img" height="150"></a>
                      <a class="aa-add-card-btn"href="#"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#"><?=$p->merk?></a></h4>
                        <span class="aa-product-price">Rp. <?php echo number_format($p->hargajual,2,',','.')?></span>
                        <p class="aa-product-descrip"></p>
                      </figcaption>
                    </figure>                         
                    <div class="aa-product-hvr-content">
                      <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                      <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>                            
                    </div>
                    </li>
                   <?php endforeach;?>
                   
                  <!-- quick view modal -->                  
                  <div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">                      
                        <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <div class="row">
                            <!-- Modal view slider -->
                            <div class="col-md-6 col-sm-6 col-xs-12">                              
                              <div class="aa-product-view-slider">                                
                                <div class="simpleLens-gallery-container" id="demo-1">
                                  <div class="simpleLens-container">
                                      <div class="simpleLens-big-image-container">
                                          <a class="simpleLens-lens-image" data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                              <img src="imgview-slider/medium/polo-shirt-1.png" class="simpleLens-big-image">
                                          </a>
                                      </div>
                                  </div>
                                  <div class="simpleLens-thumbnails-container">
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                         data-lens-image="img/view-slider/large/polo-shirt-1.png"
                                         data-big-image="img/view-slider/medium/polo-shirt-1.png">
                                          <img src="img/view-slider/thumbnail/polo-shirt-1.png">
                                      </a>                                    
                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                          data-lens-image="img/view-slider/large/polo-shirt-3.png"
                                          data-big-image="img/view-slider/medium/polo-shirt-3.png">
                                          <img src="view-slider/thumbnail/polo-shirt-3.png">
                                      </a>

                                      <a href="#" class="simpleLens-thumbnail-wrapper"
                                          data-lens-image="img/view-slider/large/polo-shirt-4.png"
                                          data-big-image="img/view-slider/medium/polo-shirt-4.png">
                                          <img src="view-slider/thumbnail/polo-shirt-4.png">
                                      </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <!-- Modal view content -->
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="aa-product-view-content">
                                <h3>T-Shirt</h3>
                                <div class="aa-price-block">
                                  <span class="aa-product-view-price">$34.99</span>
                                  <p class="aa-product-avilability">Avilability: <span>In stock</span></p>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis animi, veritatis quae repudiandae quod nulla porro quidem, itaque quis quaerat!</p>
                                <h4>Size</h4>
                                <div class="aa-prod-view-size">
                                  <a href="#">S</a>
                                  <a href="#">M</a>
                                  <a href="#">L</a>
                                  <a href="#">XL</a>
                                </div>
                                <div class="aa-prod-quantity">
                                  <form action="">
                                    <select name="" id="">
                                      <option value="0" selected="1">1</option>
                                      <option value="1">2</option>
                                      <option value="2">3</option>
                                      <option value="3">4</option>
                                      <option value="4">5</option>
                                      <option value="5">6</option>
                                    </select>
                                  </form>
                                  <p class="aa-prod-category">
                                    Category: <a href="#">Polo T-Shirt</a>
                                  </p>
                                </div>
                                <div class="aa-prod-view-bottom">
                                  <a href="#" class="aa-add-to-cart-btn"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                  <a href="#" class="aa-add-to-cart-btn">View Details</a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>                        
                      </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                  </div><!-- / quick view modal -->              
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->                     
    <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Client Brand -->
  <section id="aa-client-brand">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-client-brand-area">
            <ul class="aa-client-brand-slider">
              <li><a href="#"><img src="<?php echo base_url().'/assets/img/'; ?>client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="<?php echo base_url().'/assets/img/'; ?>client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="<?php echo base_url().'/assets/img/'; ?>client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="<?php echo base_url().'/assets/img/'; ?>client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="<?php echo base_url().'/assets/img/'; ?>client-brand-wordpress.png" alt="wordPress img"></a></li>
              <li><a href="#"><img src="<?php echo base_url().'/assets/img/'; ?>client-brand-joomla.png" alt="joomla img"></a></li>
              <li><a href="#"><img src="<?php echo base_url().'/assets/img/'; ?>client-brand-java.png" alt="java img"></a></li>
              <li><a href="#"><img src="<?php echo base_url().'/assets/img/'; ?>client-brand-jquery.png" alt="jquery img"></a></li>
              <li><a href="#"><img src="<?php echo base_url().'/assets/img/'; ?>client-brand-html5.png" alt="html5 img"></a></li>
              <li><a href="#"><img src="<?php echo base_url().'/assets/img/'; ?>client-brand-css3.png" alt="css3 img"></a></li>
              <li><a href="#"><img src="<?php echo base_url().'/assets/img/'; ?>client-brand-wordpress.png" alt="wordPress img"></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Client Brand -->

  <!-- Subscribe section -->
  <section id="aa-subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-subscribe-area">
            <h3>Subscribe our newsletter </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
            <form action="" class="aa-subscribe-form">
              <input type="email" name="" id="" placeholder="Enter your Email">
              <input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Subscribe section -->