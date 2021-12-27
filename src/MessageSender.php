<?php

namespace Wefabric\MessageSender;

use Spatie\DataTransferObject\DataTransferObject;
use WsdlToPhp\PackageBase\SoapClientInterface;

abstract class MessageSender extends DataTransferObject
{
    public string $url;
    public string $relationID;
    public string $inlogCode;
    public string $password;

    // for CustomInfo :
    protected bool $isTestMessage = false;
    protected ?string $languageCode = 'NL';
    protected bool $isContentCompressed = false;
    protected string $applicationID = 'x';
    protected string $versionID = '';

    // for MessageProperties :
    protected string $msgFormat = 'INSBOU';
    protected string $msgVersion = '003';
    protected string $msgType = 'ORDERS'; // voor versturen. response = 'ORDRSP'


    public function __construct(array $data = [])
    {
        parent::__construct($data);
    }

    /**
     * @return object A complete Post-object to use and send data to the set URL and credentials.
     * Use: $response = $post->PostMessage($messageType);
     */
    abstract function getPost(): object;

    /**
     * @return array
     */
    function getHttpOptions(): array
    {
        return [
            SoapClientInterface::WSDL_SOAP_VERSION => SOAP_1_1, //OK
            SoapClientInterface::WSDL_CONNECTION_TIMEOUT => 60,
            SoapClientInterface::WSDL_CACHE_WSDL => WSDL_CACHE_NONE
        ];
    }

    /**
     * @param string $msgID
     * @return object
     */
    abstract function getNewMessage(string $msgID): object;
}