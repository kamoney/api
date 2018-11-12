<?
header('Content-Type: application/json');

include_once "class/kamoney.class.php";
$kamoney = new Kamoney();

$data = array(
	"currency" => "SMART",
	"payment_slips" => array(0 => array(
		"number" => "23791.22928 60002.111981 11000.046901 7 77050000004950",
		"institution" => "Banco Itaú",
		"amount" => 1000,
		"due_date" => "20/11/2018",
		"personal_id" => "***",
		"name" => "Seu Zé"
    ))
);

echo $kamoney->ordersCreate($data);