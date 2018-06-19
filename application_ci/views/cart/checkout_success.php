<!DOCTYPE html>
<html lang="en">
<title>Briarmont Checkout</title>

<div id="hero-slider" style="color:rgb(255,255,255); background-color:rgba(0,0,0,0); overflow: auto;">
  <!-- <div class="mask"> -->

<div class="panel" id="panel-1">
<section class="panelinfo">
<h2 align="center" style="color:rgb(255,255,255);"><br><br>Order Successful!</h2>
Please, <span style="color:#FF0000;">DO NOT REFRESH</span> this page<br><br>
Congratulations, your payment has been successful! <br>Please allow 4-5 business days for the order to be processed and shipped.
<br>Your Order ID is <?php $orderID = $this->db->insert_id(); echo $orderID; ?><br>
An order confirmation has been sent to the email address specified.

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
