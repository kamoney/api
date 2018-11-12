<?
header('Content-Type: application/json');

include_once "class/kamoney.class.php";
$kamoney = new Kamoney();

$data = array(
    "account_bank" => 62,
    "account_type" => 1,
    "amount" => 100
);

echo $kamoney->depositCreate($data);
