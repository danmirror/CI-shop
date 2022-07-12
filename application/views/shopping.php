
   <!-- Cart view section -->
 <section id="cart-view">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <div class="cart-view-area">
           <div class="cart-view-table">
             <form action="">
               <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th></th>
                        <th></th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
$total=0;
foreach ($cart_list as $cart) {
$total=$total+$cart['subtotal'];
?>
                      <tr>
                        <td><a class="remove" href="#"><fa class="fa fa-close"></fa></a></td>
                        <td><a href="#"><img src="<?php echo base_url().'/assets/img/img_product/'.$cart['image'] ?>" alt="img"></a></td>
                        <td><a class="aa-cart-title" href="#"><?=$p->merk?></a></td>
                        <td>Rp. <?php echo number_format($cart['price'],2,',','.'); ?></td>
                        <td><input class="aa-cart-quantity" type="number" value="1"></td>
                        <td>Rp. <?php echo number_format($cart['subtotal'],2,',','.'); ?></td>
                      </tr>
                      <? } ?>
                      <tr>
                        <td colspan="6" class="aa-cart-view-bottom">
                         <input class="aa-cart-view-btn" type="submit" value="Update Cart">
                        </td>
                      </tr>
                      
                      </tbody>
                  </table>
                </div>
             </form>
             <!-- Cart Total view -->
             <div class="cart-view-total">
               <h4>Cart Totals</h4>
               <table class="aa-totals-table">
                 <tbody>
                   <tr>
                     <th>Subtotal</th>
                     <td>Rp. <?php echo number_format($total,2,',','.'); ?></td>
                   </tr>
                   <tr>
                     <th>Total Bayar</th>
                     <td>Rp. <?php echo number_format($total,2,',','.'); ?></td>
                   </tr>
                 </tbody>
               </table>
               <a href="<?php echo site_url().'/Checkout'; ?>" class="aa-cart-view-btn">Proces to Checkout</a>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

    
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
    <script src="<?php echo base_url().'/assets/template/'; ?>s/custom.js"></script> 

  </body>
</html>