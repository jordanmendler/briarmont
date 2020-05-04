<!DOCTYPE html>
<html lang="en">
<title>Briarmont Checkout</title>

<div id="hero-slider" style="color:rgb(255,255,255); background-color:rgba(0,0,0,0); overflow: auto;">
  <!-- <div class="mask"> -->

<div class="panel" id="panel-1">
<section class="panelinfo">
<h2 align="center" style="color:rgb(255,255,255);"><br><br>Briarmont Checkout</h2>


<?php
    $order_info = array();
    $order_info["subtotal"] = $this->input->post("subtotal");
    $order_info["taxamount"] = $this->input->post("taxamount");
    $order_info["total"] = $this->input->post("total");
    $order_info["email"] = $this->input->post("email");
    $order_info["currency_code"] = $this->input->post("currency_code");
    $order_info["total_num_items"] = $this->input->post("total_num_items");
    $order_info["shipping_name"] = $this->input->post("shipping_name");
    $order_info["shipping_phone"] = $this->input->post("shipping_phone");
    $order_info["shipping_company_name"] = $this->input->post("shipping_company_name");
    $order_info["shipping_street_address"] = $this->input->post("shipping_street_address");
    $order_info["shipping_add_extra"] = $this->input->post("shipping_add_extra");
    $order_info["shipping_zip"] = $this->input->post("shipping_zip");
?>

<?php echo validation_errors(); ?>
<?php echo form_open('cart/checkout2_validate'); ?>

<?php echo form_hidden($order_info); ?>

<h2>Billing Contact</h2>
Name*<br><input type="text" name="billing_name" value="<?php echo $this->session->userdata('billing_name'); ?>" size="32" /><br>
Phone Number<br><input type="text" name="billing_phone" value="<?php echo $this->session->userdata('billing_phone'); ?>" size="32" /><br>

<h2>Billing Address</h2>
Company Name (optional)<br><input type="text" name="billing_company_name" value="<?php echo $this->session->userdata('billing_company_name'); ?>" size="32" /><br>
Street Address*<br><input type="text" name="billing_street_address" value="<?php echo $this->session->userdata('billing_street_address'); ?>" size="32" /><br>
Apt, Suite, Bldg. (optional)<br><input type="text" name="billing_add_extra" value="<?php echo $this->session->userdata('billing_add_extra'); ?>" size="32" /><br>
Zip Code*<br><input type="text" name="billing_zip" value="<?php echo $this->session->userdata('billing_zip'); ?>" size="32" /><br>

<p style="float: right"><?php echo form_submit('', 'Proceed to Credit Card Information'); ?></p>
<p style ="float: left"><button type="button" onclick="window.location.href='/cart/checkout'" style="float: left">Back to Shipping</button></p>
</section>
</div>

<!-- </div>-->

<!-- </div>--> <!-- .mask  -->
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
