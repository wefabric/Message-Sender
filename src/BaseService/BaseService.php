<?php

namespace Wefabric\MessageSender\BaseService;

use SoapHeader;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

class BaseService extends AbstractSoapClientBase
{
    const SecurityNS = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';

    /**
     * @var array
     */
    protected array $soapHeaders = [];

    /**
     * Function to fix the setting of headers, since __default_headers inside soap.php is private and cannot be edited.
     * @param string $namespace
     * @param string $name
     * @param $data
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return $this
     */
    public function setSoapHeader(string $namespace, string $name, $data, bool $mustUnderstand = false, ?string $actor = null): self
    {
        if ($this->getSoapClient()) {
            $defaultHeaders = $this->soapHeaders;
            foreach ($defaultHeaders as $index => $soapHeader) {
                if ($soapHeader->name === $name) {
                    unset($defaultHeaders[$index]);
                    break;
                }
            }
            $this->getSoapClient()->__setSoapheaders(null);
            if (!empty($actor)) {
                array_push($defaultHeaders, new SoapHeader($namespace, $name, $data, $mustUnderstand, $actor));
            } else {
                array_push($defaultHeaders, new SoapHeader($namespace, $name, $data, $mustUnderstand));
            }
            $this->getSoapClient()->__setSoapheaders($defaultHeaders);
            $this->soapHeaders = $defaultHeaders;
        }

        return $this;
    }
}