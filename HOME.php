<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>


<div class="tab-content">
  <div id="menu1" class="tab-pane fade in active">
    <h3>Sold by Seller :-</h3>
    <form action="CLIENT_SS.php" method="post">
	<table style="width:100%">
  	<tr><td>Sold_By_Seller_ID:</td>
	<td><input type="text" name="sellerid" value=""></td>
	</tr>
	<tr><td>Product_ID:</td>
	<td><input type="text" name="purchaseid"></td>
	</tr>
	<tr><td>Order_Qty:</td>
	<td><input type="text" name="quantity"></td>
	</tr>
	<tr><td>Unit_Price:</td>
	<td><input type="text" name="price"></td>
	</tr>
	<tr><td>Total_Amount:</td>
	<td><input type="text" name="totprice"></td></tr>
	<tr><td>Modified_Date:</td>
	<td><input type="text" name="Odate"></td></tr>
	<tr><td>Sold_Status:</td>
	<td><input type="text" name="status"></td></tr>
	<tr><td>Date_Of_Delivery:</td>
	<td><input type="text" name="Ddate"></td></tr>
	<tr><td></td><td><input type="submit" value="Sold"></td></tr>
	</table>
	</form>
  </div>
  <div id="menu2" class="tab-pane fade in active">
    <h3>Bought by Customer :-</h3>
    <form action="CLIENT_BC.php" method="post">
	
	<table style="width:100%">
  	<tr><td>Purchase_Order_ID:</td>
	<td><input type="text" name="buyerid" value=""></td>
	</tr>
	<tr><td>Purchase_ID:</td>
	<td><input type="text" name="purchaseid"></td>
	</tr>
	<tr><td>Order_Qty:</td>
	<td><input type="text" name="quantity"></td>
	</tr>
	<tr><td>Unit_Price:</td>
	<td><input type="text" name="price"></td>
	</tr>
	<tr><td>Total_Amount:</td>
	<td><input type="text" name="totprice"></td></tr>
	<tr><td>Modified_Date:</td>
	<td><input type="text" name="Odate"></td></tr>
	<tr><td>Purchase_Status:</td>
	<td><input type="text" name="status"></td></tr>
	<tr><td>Delivered_Date:</td>
	<td><input type="text" name="Ddate"></td></tr>
	<tr><td></td><td><input type="submit" value="Purchased"></td></tr>
	</table>
	</form>
  </div>
  <div id="menu3" class="tab-pane fade in active">
    <h3>View Disperancies</h3>
    <p>To view the Disperancies between the Sales and Purchase</p>
	
	<form action="DISCREPENCY.php" method="post">
	<table style="width:100%">
	<tr><td>
	</td>
	<td>
	</td><td>
	</td><td>
	</td><td>
	</td><td>
	</td><td>
	</td><td>
	</td>
	<td>
	<input type="submit" value="Click_here">

	</td></tr>
	</table>
	</form>
  </div>
</div>

</body>
</html>
