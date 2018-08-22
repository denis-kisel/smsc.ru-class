<?php
class SMS {
    private $url = 'https://smsc.ru/sys/send.php';
    private $login = '';
    private $pass = '';
    private $sender = '';
    private $charset = 'utf-8';

    public $message = '';
    public $phone = '';

    public function send() {
        $data = [
            'login' => $this->login,
            'psw' => $this->pass,
            'phones' => $this->phone,
            'mes' => $this->message,
            'sender' => $this->sender,
            'charset' => $this->charset
        ];

        $curl = curl_init($this->url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }
}
