<?
$headers = getallheaders();

if (!array_key_exists('Host', $headers) || !array_key_exists('signature', $headers) || !isset($_POST)) {
    exit("*error*");
}

$signature = $headers['signature']; // assinatura dos dados realizada pela Kamoney base sua secret_key
$post_data = http_build_query($_POST, '', '&'); // post enviado pela Kamoney
$signature_valid = hash_hmac('sha512', $post_data, 'YOUR_SECRET_KEY_HERE'); // criando a assinatura de validação

if ($signature != $signature_valid) { // a assinatura não confere
    exit("*error*");
}

// tudo ok para processamento da venda
$id = sanitize_text_field($_POST["id"]);
$status_code = sanitize_text_field($_POST["status_code"]);
$currency = sanitize_text_field($_POST["currency"]);
$currency_name = sanitize_text_field($_POST["currency_name"]);
$address = sanitize_text_field($_POST["address"]);
$txid = sanitize_text_field($_POST["txid"]);
$amount = floatval($_POST["amount"]);
$amount_order = floatval($_POST["amount_order"]);
$amount_order_partial = floatval($_POST["amount_order_partial"]);
$order_id = intval($_POST["order_id"]);

/* CONTINUAÇÃO */
