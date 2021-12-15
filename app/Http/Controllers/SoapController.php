<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SoapController extends Controller
{
    /**
     * @return \SoapClient|string
     */
    public function getSoapClient()
    {
        try {
            $context = stream_context_create([
                'http' => ['user_agent' => 'PHPSoapClient']
            ]);

            $soapClientOptions = [
                'stream_context' => $context,
                'cache_wsdl' => WSDL_CACHE_NONE
            ];

            $wsdlUrl = 'https://www.crcind.com/csp/samples/SOAP.Demo.CLS?WSDL';

            return new \SoapClient($wsdlUrl, $soapClientOptions);

        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    /**
     * @return mixed
     */
    public function getDataFromSoapClient()
    {
        return $this->getSoapClient()->getByName();
    }

    /**
     * @return mixed
     */
    public function parseData()
    {
        $parse = simplexml_load_string($this->getDataFromSoapClient()->GetByNameResult->any);

        $parseList = json_decode(json_encode($parse->ListByName), true);

        return $parseList['SQL'];
    }

    /**
     * @return array
     */
    public function users()
    {
        $expectedResult = [];

        if (!empty($this->parseData())) {
            foreach ($this->parseData() as $user) {
                if (strtolower($user['Name'][0]) === 'a') {
                    $expectedResult[] = $user;
                }
            }
        }

        return $expectedResult;
    }
}
