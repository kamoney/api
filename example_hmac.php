$mt = explode(' ', microtime());
$req['nonce'] = $mt[1].substr($mt[0], 2, 6);

# Posts or Gets
foreach ($_POST as $key => $value)
{
    $req[$key] = $value;
}

# Generates query string in URL format
$data = http_build_query($req, '', '&');

# add headers
$headers = array(
    'public: ' . YOUR_PUBLIC_KEY,
    'sign: ' . hash_hmac('sha512', $data, YOUR_SECRET_KEY),
);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "URL REQUEST HERE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

$data = curl_exec($ch);

return $data;
