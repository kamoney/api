<?
header('Content-Type: application/json');

include_once "class/kamoney.class.php";
$kamoney = new Kamoney();

$data = array(
	"currency" => "SMART", 
	"amount" => 100
);

echo $kamoney->salesCreate($data);