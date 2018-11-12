<?
header('Content-Type: application/json');

include_once "class/kamoney.class.php";
$kamoney = new Kamoney();

$operator = "CLARO";
$ddd = 31;

echo $kamoney->listMobileOperatorsDDDSFaces($operator, $ddd);