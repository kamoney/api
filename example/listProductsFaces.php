<?
header('Content-Type: application/json');

include_once "class/kamoney.class.php";
$kamoney = new Kamoney();

$product_name = "STEAM";

echo $kamoney->listProductsFaces($product_name);