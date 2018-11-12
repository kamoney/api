<?
header('Content-Type: application/json');

include_once "class/kamoney.class.php";
$kamoney = new Kamoney();

$sale = "ID_SALE_HERE";

echo $kamoney->getSaleHistory($sale);