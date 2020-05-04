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
<h2 align="center" >Briarmont Admin</h2> 

<head>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('#table_id td.orders').each(function(){
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

<div style="text-align: center;"><a href="javascript:location.reload(true);">Refresh</a></div>

<table id="table_id" cellpadding="6" cellspacing="1" style="width:100%" border="0">

<tr>
<th style = "text-align:left">Order ID</th>
<th style = "text-align:left">Order Status</th>
<th style="text-align:left">Order Date</th>
<th style="text-align:left">Shipping Name</th>
<th style="text-align:left">Billing Name</th>
<th style="text-align:left">Total</th>
<th style="text-align:left">Details</th>
<th style="text-align:left">Update Order Status</th>
</tr>

<?php $i = 1; $query = $this->db->query('SELECT order_id, order_status, order_date, shipping_name, billing_name, total FROM orders ORDER BY order_id'); ?>

<?php foreach ($query->result() as $item): ?>

<tr>
<td><?php echo $item->order_id; ?></td>
<td class="orders"><?php echo $item->order_status; ?></td>
<td><?php echo $item->order_date; ?></td>
<td><?php echo $item->shipping_name; ?></td>
<td><?php echo $item->billing_name; ?></td>
<td>$<?php echo $item->total; ?></td>
<td><a href="/orderadmin/order_details/<?php echo $item->order_id; ?>">Order Details</a></td>
<td><button onclick="MarkShipped()">Mark as Shipped</button></td>
</tr>

<?php $i++; ?>

<?php endforeach; ?>

</table>
<div style="text-align: left;"><br>Order Status Codes: </div>
<div style="text-align: left; background-color: #00FFFF; display: inline-block;">1: Pending </div><br>
<div style="text-align: left; background-color: #00FF00; display: inline-block;">2: Shipped </div><br>
<div style="text-align: left; background-color: #FF0000; display: inline-block;">3: Not Shipped-Error</div><br>

<script type="text/javascript">
function MarkShipped(){
	var shipping_id = prompt("What is the Shipping Tracking ID?", "");
	var order_id = <?php echo $item->order_id; ?>;
	var link = "/orderadmin/mark_shipped/" + order_id + "/" + shipping_id;
	window.location = link;
}
</script>

</body>
</html>
