<?php
		
	$sales_order_id=$_POST["sellerid"];
	$product_id=$_POST["purchaseid"];
	$order_qty=$_POST["quantity"];
	$unit_price=$_POST["price"];
	$total_amount=$_POST["totprice"];
	$modified_date=$_POST["Odate"];
	$sold_status=$_POST["status"];
	$date_of_delivery=$_POST["Ddate"];
	$host="localhost";
	$db="sibi";
	$user="root";
	$pass="";
		
		
	$conn=mysqli_connect($host,$user,$pass,$db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



$sql = "INSERT INTO SOLD_BY_SELLER (SELLER_ID,PRODUCT_ID,ORDER_QTY,UNIT_PRICE,TOTAL_AMOUNT,MODIFIED_DATE,SOLD_STATUS,DATE_OF_DELIVERY) VALUES ('".$sales_order_id."','".$product_id."','".$order_qty."','".$unit_price."','".$total_amount."','".$modified_date."','".$sold_status."','".$date_of_delivery."');";
if (mysqli_query($conn, $sql)) {
    echo "Inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>