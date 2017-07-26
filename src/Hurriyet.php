<?php
namespace Esen;

class Hurriyet
{
    protected $base_url = 'https://api.hurriyet.com.tr/v1/';
    protected $api_key;
    protected $params;

    function __construct($api_key)
    {
        $this->api_key = $api_key;
    }

    public function get($resource, $data = null)
    {
        $this->params = $resource;
        $this->check($data);
        return $this->request($this->params);
    }

    protected function check($arr)
    {
        if (isset($arr['id'])) {
            $this->params .= '/'.$arr['id'];
        } else {
            $this->params .= '?';
            foreach ($arr as $item => $val) {
                if ($val !== '') {
                    $this->params .= '&$'.$item.'='.$val;
                }
            }
        }
    }
    protected function request($params)
    {
      $curl = curl_init();
      curl_setopt_array($curl, array(
          CURLOPT_URL => "{$this->base_url}{$params}",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
              "accept: application/json",
              "apikey: " . $this->api_key
          )
      ));
      $response = curl_exec($curl);
      $err      = curl_error($curl);
      curl_close($curl);
      return json_decode($response);
    }
}