<?
header('Content-Type: application/json');

include_once "class/kamoney.class.php";
$kamoney = new Kamoney();

$deposit = "ID_DEPOSIT_HERE";

echo $kamoney->getDepositHistory($deposit);