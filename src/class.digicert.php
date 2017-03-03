<?php
    /*
    * DigiCert REST API
    *
    * url: https://extreemhost.nl
    */

namespace DigiCert;

class DigiCert
{
    protected $url = 'https://api.digicert.com/order';
    protected $auth;

    public function __construct($auth)
    {
        $this->auth = $auth;
    }

    protected function curlConnection($location, $data)
    {
        $return = json_encode($data);
        $headers = [
                'Content-Type: application/vnd.digicert.rest-v1+json',
            ];
        $request = curl_init();
        curl_setopt($request, CURLOPT_URL, $this->url.$location);
        curl_setopt($request, CURLOPT_USERPWD, $this->auth);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($request, CURLOPT_CUSTOMREQUEST, 'REISSUE');
        curl_setopt($request, CURLOPT_POSTFIELDS, $return);
        curl_setopt($request, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($request);
        curl_close($request);

        return $result;
    }
}
