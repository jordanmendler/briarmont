<!DOCTYPE html>
<html lang="en">

<style type="text/css">
<!--
a:link { color:blue; }
a:visited { color:blue; }
a:active {color:#ff002b;}
-->
</style>

<title>Briarmont Admin</title>
<h2 align="center" >Order Details</h2>

<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('#stat').each(function(){
		        if ($(this).text() == '1') {
		            $(this).css('background-color','#00FFFF');
		        }
		        else if ($(this).text() == '2') {
		            $(this).css('background-color','#00FF00');
		        }
		        else if ($(this).text() == '3') {
		            $(this).css('background-color','#FF0000');
		        }
		    });
		});
	</script>
</head>

<?php
$query = $this->db->query("SELECT * FROM orders WHERE order_id = '$order_id'");	
$order = $query->row();
?>

<a href="/orderadmin/orderadmin/">Back to orders list</a><br><br>

<!-- <a href="/orderadmin/update_order_status/<?php echo $order->order_id; ?>/2">Mark as Shipped</a><br> -->
<button onclick="MarkShipped2()">Mark as Shipped</button><br>
<button onclick="window.location='/orderadmin/update_order_status/<?php echo $order->order_id; ?>/3'">Mark as Not Shipped-Error</button><br>
<button onclick="window.location='/orderadmin/update_order_status/<?php echo $order->order_id; ?>/1'">Mark as Pending</button><br><br>
<!-- <a href="/orderadmin/update_order_status/<?php echo $order->order_id; ?>/3">Mark as Not Shipped-Error</a><br>
<a href="/orderadmin/update_order_status/<?php echo $order->order_id; ?>/1">Mark as Pending</a><br><br> -->

Order ID: <?php echo $order->order_id; ?> <br>
Order Date: <?php echo $order->order_date; ?> <br>
Last Updated: <?php echo $order->last_updated; ?> <br>
Order Status: <span id="stat"><?php echo $order->order_status; ?></span><br>
(Status Codes: 1: Pending, 2: Shipped, 3: Not Shipped-Error)
<h2>Customer Info </h2> 
Email: <?php echo $order->email; ?>
<h2> Shipping Info </h2>
Shipping Name: <?php echo $order->shipping_name; ?> <br>
Shipping Phone: <?php echo $order->shipping_phone; ?> <br>
Shipping Company Name (Optional): <?php echo $order->shipping_company_name; ?> <br>
Shipping Street Address: <?php echo $order->shipping_street_address; ?> <br>
Shipping Apt, Suite, Bldg. (Optional): <?php echo $order->shipping_add_extra; ?> <br>
Shipping Zip: <?php echo $order->shipping_zip; ?> <br>
Shipping Tracking ID: <?php echo $order->shipping_tracking_id; ?>
<h2> Billing Info </h2>
Billing Name: <?php echo $order->billing_name; ?> <br>
Billing Phone: <?php echo $order->billing_phone; ?> <br>
Billing Company Name (Optional): <?php echo $order->billing_company_name; ?> <br>
Billing Street Address: <?php echo $order->billing_street_address; ?> <br>
Billing Apt, Suite, Bldg. (Optional): <?php echo $order->billing_add_extra; ?> <br>
Billing Zip: <?php echo $order->billing_zip; ?>
<h2> Briarmont Cigar Quantities</h2>
Classic: <?php echo $order->num_classic; ?> <br>
Double Wrap: <?php echo $order->num_double_wrap; ?> <br>
Maduro: <?php echo $order->num_maduro; ?> <br>
Reserve: <?php echo $order->num_reserve; ?>
<h2> Order Totals </h2>
Subtotal: <?php echo $order->subtotal; ?> <br>
Tax: <?php echo $order->taxamount; ?> <br>
Total: <?php echo $order->total; ?> <br>
<h2>Firstdata Info </h2> 
<?php echo $order->firstdata_transaction_id; ?>

</table>

<script type="text/javascript">
function MarkShipped2(){
	var shipping_id = prompt("What is the Shipping Tracking ID?", "");
	var order_id2 = <?php echo $order->order_id; ?>;
	var link = "/orderadmin/mark_shipped/" + order_id2 + "/" + shipping_id;
	window.location = link;
}
</script>

</body>
</html>
