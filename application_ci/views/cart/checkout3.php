<!DOCTYPE html>
<html lang="en">
<title>Briarmont Checkout</title>

<head>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
</head>

<div id="hero-slider" style="color:rgb(255,255,255); background-color:rgba(0,0,0,0); overflow:auto;">
  <!-- <div class="mask"> -->

<div class="panel" id="panel-1">
<section class="panelinfo">
<h2 align="center" style="color:rgb(255,255,255);"><br><br>Order Summary & Payment Info</h2>

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
    $order_info["billing_name"] = $this->input->post("billing_name");
    $order_info["billing_phone"] = $this->input->post("billing_phone");
    $order_info["billing_company_name"] = $this->input->post("billing_company_name");
    $order_info["billing_street_address"] = $this->input->post("billing_street_address");
    $order_info["billing_add_extra"] = $this->input->post("billing_add_extra");
    $order_info["billing_zip"] = $this->input->post("billing_zip");
    $order_info["cc_holder"] = $this->input->post("billing_name");
?>
<?php
    $month_exp = array(
                       '01' => "January",
                       '02' => "February",
                       '03' => "March",
                       '04' => "April",
                       '05' => "May",
                       '06' => "June",
                       '07' => "July",
                       '08' => "August",
                       '09' => "September",
                       '10' => "October",
                       '11' => "November",
                       '12' => "December",
                       );
    $curr_year = date("Y");
    $year_expiry = array();
    for ($i = $curr_year; $i < $curr_year + 11; $i++) {
        $year_expiry[$i] = $i;
    }
?>

<?php $attributes = array('id' => 'myform'); ?>
<!--
<?php echo form_open('', $attributes); ?>
-->
<form id="myform" name="myform" method="post" action="/cart/store_order" accept-charset="utf-8">
<?php echo form_hidden($order_info); ?>
<input type="hidden" id="firstdata_response" name="firstdata_response" value="">

<h2>Shipping Information</h2>
Name: <?php echo $order_info["shipping_name"]; ?><br>
Phone Number: <?php echo $order_info["shipping_phone"]; ?><br>
Email Address: <?php echo $order_info["email"]; ?><br>
Company Name: <?php echo $order_info["shipping_company_name"]; ?><br>
Street Address: <?php echo $order_info["shipping_street_address"]; ?><br>
Apt, Suite, Bldg: <?php echo $order_info["shipping_add_extra"]; ?><br>
Zip Code: <?php echo $order_info["shipping_zip"]; ?><br>
<a href="/cart/checkout">Edit</a><br><br>

<h2>Billing Information</h2>
Name: <?php echo $order_info["billing_name"]; ?><br>
Phone Number: <?php echo $order_info["billing_phone"]; ?><br>
Company Name: <?php echo $order_info["billing_company_name"]; ?><br>
Street Address: <?php echo $order_info["billing_street_address"]; ?><br>
Apt, Suite, Bldg: <?php echo $order_info["billing_add_extra"]; ?><br>
Zip Code: <?php echo $order_info["billing_zip"]; ?><br>
<a href="/cart/checkout2">Edit</a><br><br>

<h2>Credit Card Information</h2>
<div id="formResponse" style="color:#FF0000;"></div>
<?php echo validation_errors(); ?>
Credit Card Number*<br><input type="text" name="cc_number" id ="cc_number" value="" size="20" /><br>
Security Code (CVC)*<br><input type="text" name="cc_cvv2" id = "cc_cvv2" value="" size="4" /><br>
Expiration Date*<br>
<?php
    echo form_dropdown('cc_expiry_date_month', $month_exp);
    echo form_dropdown('cc_expiry_date_year', $year_expiry);
?><br><br>

<h2>Order Information</h2>
<table cellpadding="6" cellspacing="1" style="width:40%" border="0">
<tr>
  <td style="text-align:left">Order Subtotal:</td>
  <td style="text-align:left">$<?php echo $order_info["subtotal"]; ?></td>
</tr>
<tr>
  <td style="text-align:left">Order Tax:</td>
  <td style="text-align:left">$<?php echo $order_info["taxamount"]; ?></td>
</tr>
<tr>
  <td style="text-align:left">Order Total:</td>
  <td style="text-align:left">$<?php echo $order_info["total"]; ?></td>
</tr>
</table>

<div id="submit_button"><br><p style="float: right"><input type="submit" name="submit" class="button" id="submit_btn" value="Submit Form"></p></div>
<!-- <br><p style="float: right"><?php echo form_submit('mysubmit', 'Submit Order'); ?></p> -->
</form>
<p><a href="/redirects/empty_cart">Cancel Order</a>


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


<script src="/js/checkout_official_submit.js"></script>

</body>
</html>
