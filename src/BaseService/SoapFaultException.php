<?php

namespace Wefabric\MessageSender\BaseService;

use SoapFault;
use Wefabric\ArrayToSimplexml\ArrayToSimplexml;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class SoapFaultException extends SoapFault
{

    /**
     * @param array $array Array of SoapFaults
     * @see AbstractSoapClientBase @method getLastError()
     * @see SoapFault
     * @return \SimpleXMLElement
     */
    public static function toXML(array $array) : \SimpleXMLElement
    {
        $xml = new \SimpleXMLElement('<errors></errors>');
        ArrayToSimplexml::convert($xml, self::toArray($array));
        return $xml;
    }

    /**
     * Returns the array-version of the most important fields of the Soapfaults
     * @param array $array Array of SoapFaults
     * @see AbstractSoapClientBase @method getLastError()
     * @see SoapFault
     * @return array
     */
    public static function toArray(array $array): array
    {
        $arr = [];
        foreach($array as $soapfault) {
            $arr['errors'][] = [
                'message' => $soapfault->message,
                'code' => $soapfault->code,
                'file' => $soapfault->file,
                'line' => $soapfault->line,
                'faultstring' => $soapfault->faultstring,
                'faultcode' => $soapfault->faultcode,
            ];
        }
        return $arr;
    }

}