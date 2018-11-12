<?
header('Content-Type: application/json');

include_once "class/kamoney.class.php";
$kamoney = new Kamoney();

$operator = "CLARO";

echo $kamoney->listMobileOperatorsDDDS($operator);
?>