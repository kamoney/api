<?php
# EXAMPLE POST REQUEST

$YOUR_PUBLIC_KEY = "YOUR PUBLIC KEY HERE";
$YOUR_SECRET_KEY = "YOUR SECRET KEY HERE";

# NONCE DATA
$mt = explode(' ', microtime());
$req['nonce'] = $mt[1].substr($mt[0], 2, 6); // OBRIGATÓRIO

# POSTS OR GETS TO ENDPOINT
foreach ($_POST as $key => $value)
{
    $req[$key] = $value;
}

# GENERATES QUERY STRING IN URL FORMAT
$data = http_build_query($req, '', '&');

# ADD HEADERS PUBLIC AND SIGN
$headers = array(
    'public: ' . $YOUR_PUBLIC_KEY,
    'sign: ' . hash_hmac('sha512', $data, $YOUR_SECRET_KEY),
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "URL_API_REQUEST_HERE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

$data = curl_exec($ch);

return $data;
?>
