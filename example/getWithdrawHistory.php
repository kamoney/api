<?
header('Content-Type: application/json');

include_once "class/kamoney.class.php";
$kamoney = new Kamoney();

$withdraw = "ID_WITHDRAW_HERE";

echo $kamoney->getWithdrawHistory($withdraw);