<!DOCTYPE html>
<html lang="en">
<title>Briarmont Shopping Cart</title>

<!--<div id="main-content"> -->
<!-- <div id="main-content"> -->
<div id="hero-slider" class="cart-page" style="background-color:rgba(0,0,0,0); overflow: hidden;">
  <!-- <div class="mask"> -->

<div class="panel" id="panel-1">
<!--<div class="panel" style="font-size:16px; font-family:Mako">-->
<!-- <section id="frontpage">-->
<!-- <article align="center"> -->
<!-- <h1 align="center" style="color:#FFFFFF"> -->
<section class="panelinfo">
<h2 align="center" style="color:rgb(255,255,255);"><br><br>ENJOY BRIARMONT CIGARS</h2>
<p>To ensure protection of the Briarmont brand by closely guarding the distribution of our cigars, consumers can only purchase Briarmont cigars through limited channels.</p>
<p>The easiest ways to access our cigars are by contacting a member of our team at <a href="mailto:sales@briarmontco.com">sales@briarmontco.com</a> 
and ordering directly through one of our representatives or by visiting Custom Tobacco <a href="http://www.customtobacco.com">(www.customtobacco.com)</a> a trusted source for a first-class cigar experience.</p>
<!-- <div class ="cart1" style="width:500px;height:300px;" >

<?php $attributes = array('id' => 'myform1');?>
<?php echo form_open('cart/update_cart', $attributes); ?>

<table cellpadding="6" cellspacing="1" style="width:100%" border="0">

<tr>
<th>Qty.</th>
<th>Item Name</th>
<th style="text-align:right">Item Price</th>
<th style="text-align:right">Sub-Total</th>
</tr>

<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

<?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

<tr>
<td><?php echo form_input(array('name' => $i.'[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
<td>
<?php echo $items['name']; ?>

<?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

<p>
<?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

<strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

<?php endforeach; ?>
</p>

<?php endif; ?>

</td>
<td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
<td style="text-align:right">$<?php echo $this->cart->format_number($items['subtotal']); ?></td>
</tr>

<?php $i++; ?>

<?php endforeach; ?>

<?php
	$taxAmount = ($this->cart->total())*(.09);
	$total = ($this->cart->total() + $taxAmount);
?>

<tr>
<td colspan="2"> </td>
<td style="text-align:right"><br>Subtotal:</td>
<td style="text-align:right"><br>$<?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>

<tr>
<td colspan="2"> </td>
<td style="text-align:right">Tax:</td>
<td style="text-align:right">$<?php echo $this->cart->format_number($taxAmount); ?></td>
</tr>

<tr>
<td colspan="2"> </td>
<td style="text-align:right">Total (excluding shipping):</td>
<td style="text-align:right">$<?php echo $this->cart->format_number($total); ?></td>
</tr>

</table>

<br>
<p><?php echo form_submit('', 'Update your Cart'); ?> <button type="button" id="submit_btn" onclick="window.location.href='/cart/checkout'" style="float: right">Checkout</button></p>
<p><a href="/redirects/empty_cart">Empty Cart</a></p>
</div> -->
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


<div id="body-background"><img src="/images/Additional.jpg" width="100%" height="100%" alt="interior full-size photo" /></div>
<!--<div id="body-background"><img src="/images/contact-picture.jpg" width="100%" height="100%" alt="interior full-size photo" /></div>       -->
</div>

</body>
</html>
