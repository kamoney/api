<?
class Kamoney
{
    /**
     * Arquivo criado pela de desenvolvimento Kamoney 
     */
    
    private $public_key = 'YOUR PUBLIC KEY';
    private $secret_key = 'YOUR SECRET KEY';
    private $api = "https://api.kamoney.com.br";

    private function query($endpoint, $data = array(), $type = 'GET')
    {
        $mt = explode(' ', microtime());
        $req['nonce'] = $mt[1] . substr($mt[0], 2, 6);

        foreach ($data as $key => $value) {

            $req[$key] = $value;

        }

        $data_query = http_build_query($req, '', '&');

        $sign = hash_hmac('sha512', $data_query, $this->secret_key);

        $headers = array(
            'public: ' . $this->public_key,
            'sign: ' . $sign,
        );

        $ch = curl_init();

        if ($type == 'POST') {

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_query);

        } else {

            curl_setopt($ch, CURLOPT_URL, $url . '?' . $data_query);
            curl_setopt($ch, CURLOPT_POST, 0);

        }

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

        $data = curl_exec($ch);

        return $data;
    }

    public function listMobileOperators()
    {
        return $this->query("/mobileoperator");
    }

    public function listMobileOperatorsDDDS($mobileoperator)
    {
        return $this->query("/mobileoperator/" . $mobileoperator);
    }

    public function listMobileOperatorsDDDSFaces($mobileoperator, $ddd)
    {
        return $this->query("/mobileoperator/" . $mobileoperator . "/" . $ddd);
    }

    public function listBanks()
    {
        return $this->query("/banks");
    }

    public function listProducts()
    {
        return $this->query("/products");
    }

    public function listProductsFaces($product)
    {
        return $this->query("/products/" . $product);
    }

    public function listPaymentMethods()
    {
        return $this->query("/paymentmethods");
    }

    public function ordersCreate($data)
    {
        return $this->query("/orders", $data, 'POST');
    }

    public function listOrders()
    {
        return $this->query("/orders");
    }

    public function getOrder($order)
    {
        return $this->query("/orders/" . $order);
    }

    public function getOrderHistory($order)
    {
        return $this->query("/orders/" . $order . "/history");
    }

    public function salesCreate($data)
    {
        return $this->query("/sales", $data, 'POST');
    }

    public function listSales()
    {
        return $this->query("/sales");
    }

    public function getSale($sale)
    {
        return $this->query("/sales/" . $sale);
    }

    public function getSaleHistory($sale)
    {
        return $this->query("/sales/" . $sale . "/history");
    }

    public function withdrawCreate($data)
    {
        return $this->query("/withdraws", $data, 'POST');
    }

    public function listWithdraws()
    {
        return $this->query("/withdraws");
    }

    public function getWithdraw($withdraw)
    {
        return $this->query("/withdraws/" . $withdraw);
    }

    public function getWithdrawHistory($withdraw)
    {
        return $this->query("/withdraws/" . $withdraw . "/history");
    }

    public function depositCreate($data)
    {
        return $this->query("/deposits", $data, 'POST');
    }

    public function listDeposits()
    {
        return $this->query("/deposits");
    }

    public function getDeposit($deposit)
    {
        return $this->query("/deposits/" . $deposit);
    }

    public function getDepositHistory($deposit)
    {
        return $this->query("/deposits/" . $deposit . "/history");
    }

    public function getSmarPayAddress()
    {
        return $this->query("/smartpay");
    }

    public function getSmarPayDeposits()
    {
        return $this->query("/smartpay/history");
    }

    public function statusServiceOrder()
    {
        return $this->query("/servicestatus/order");
    }

    public function statusServiceWithdraw()
    {
        return $this->query("/servicestatus/withdraw");
    }

    public function statusServiceDeposit()
    {
        return $this->query("/servicestatus/deposit");
    }

    public function updateAccount($data)
    {
        return $this->query("/account", $data, 'POST');
    }

    public function getAccount()
    {
        return $this->query("/account");
    }

    public function getAccountResume()
    {
        return $this->query("/account/resume");
    }

    public function getAccountHistory()
    {
        return $this->query("/account/history");
    }
}
