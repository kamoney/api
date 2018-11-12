<?
header('Content-Type: application/json');

include_once "class/kamoney.class.php";
$kamoney = new Kamoney();

$order = "ID_ORDER_HERE";

echo $kamoney->getOrderHistory($order);