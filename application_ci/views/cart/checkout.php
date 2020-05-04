<!DOCTYPE html>
<html lang="en">
<title>Briarmont Checkout</title>

<div id="hero-slider" style="color:rgb(255,255,255); background-color:rgba(0,0,0,0); overflow:auto;">
  <!-- <div class="mask"> -->

<div class="panel" id="panel-1">
<section class="panelinfo">
<h2 align="center" style="color:rgb(255,255,255);"><br><br>Briarmont Checkout</h2>

<p style="color:#FF0000;"> <?php echo validation_errors(); ?> </p>
<?php echo form_open('cart/checkout_validate'); ?>

<?php $this->load->library('session'); ?>

<?php $num_items = $this->cart->total_items(); ?>

<input type="hidden" name="num_items" value="<?php echo $num_items; ?>" />

<h2>Shipping Contact</h2>
Name*<br><input type="text" name="shipping_name" value="<?php echo $this->session->userdata('shipping_name'); ?>" size="32" /><br>
Phone Number<br><input type="text" name="shipping_phone" value="<?php echo $this->session->userdata('shipping_phone'); ?>" size="32" /><br>
Email Address*<br><input type="text" name="email" value="<?php echo $this->session->userdata('email'); ?>" size="32" /><br><br>

<h2>Shipping Address</h2>
Company Name (optional)<br><input type="text" name="shipping_company_name" value="<?php echo $this->session->userdata('shipping_company_name'); ?>" size="32" /><br>
Street Address*<br><input type="text" name="shipping_street_address" value="<?php echo $this->session->userdata('shipping_street_address'); ?>" size="32" /><br>
Apt, Suite, Bldg. (optional)<br><input type="text" name="shipping_add_extra" value="<?php echo $this->session->userdata('shipping_add_extra'); ?>" size="32" /><br>
Zip Code*<br><input type="text" name="shipping_zip" value="<?php echo $this->session->userdata('shipping_zip'); ?>" size="32" /><br>

<?php
    $subtotal_temp = $this->cart->total();
    $total_num_items_temp = $this->cart->total_items();
    $taxAmount_temp = ($this->cart->total())*(.09);
	$total_temp = ($this->cart->total() + $taxAmount_temp);
    echo form_hidden("subtotal", $subtotal_temp);
    echo form_hidden("taxamount", $taxAmount_temp);
    echo form_hidden("total", $total_temp);
    echo form_hidden("total_num_items", $total_num_items_temp);
    echo form_hidden("currency_code", "USD");
?>

<p style="float: right"><?php echo form_submit('', 'Proceed to Billing'); ?></p>
<p style ="float: left"><button type="button" onclick="window.location.href='/cart'" style="float: left">Back to Cart</button></p>
</section>
</div>

<!-- </div>-->

<!-- </div>--> <!-- .mask  -->
<div class="clear"></div>
</div> <!-- #hero-slider -->



<section id="social">
<figure><a href="https://www.facebook.com/BriarmontCo?ref=hl" style="opacity:1"><img src="/images/facebook.gif" alt="facebook" /></a></figure>
<figure><a href="https://twitter.com/briarmontco" style="opacity:1"><img src="/images/twitter.gif" alt="twitter" /></a></figure>
<figure><a href="http://pinterest.com/briarmontco/" style="opacity:1"><img src="/images/pinterest.gif" alt="pinterest" /></a></figure>
<figure><a href="http://briarmontco1.tumblr.com/" style="opacity:1"><img src="/images/tumblr.gif" alt="tumblr" /></a></figure>
</section>


<div id="body-background"><img src="/images/main-contact.jpg" width="100%" height="100%" alt="interior full-size photo" /></div>
<!--<div id="body-background"><img src="/images/contact-picture.jpg" width="100%" height="100%" alt="interior full-size photo" /></div>       -->
</div>

</body>
</html>
