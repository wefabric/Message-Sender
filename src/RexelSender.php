<?php

namespace Wefabric\MessageSender;

use DateTime;
use DateTimeInterface;
use WsdlToPhp\PackageBase\SoapClientInterface;

use Wefabric\MessageSender\MessageService31_Rexel\ServiceType\Post;
use Wefabric\MessageSender\MessageService31_Rexel\StructType\Security;
use Wefabric\MessageSender\MessageService31_Rexel\StructType\Timestamp;
use Wefabric\MessageSender\MessageService31_Rexel\StructType\UsernameToken;
use Wefabric\MessageSender\MessageService31_Rexel\StructType\CustomInfoType;
use Wefabric\MessageSender\MessageService31_Rexel\StructType\MessageList;
use Wefabric\MessageSender\MessageService31_Rexel\StructType\MessageType;

class RexelSender extends MessageSender
{

    /**
     * @return RexelSender Object
     */
    public static function make(array $data = []): RexelSender
    {
        return new self($data);
    }

    /**
     * @return Post A complete Post-object to use and send data to the set URL and credentials.
     * Use: $response = $post->PostMessage($messageType);
     */
    function getPost(): Post
    {
        return (new Post($this->getHttpOptions()))
            ->setSoapHeaderSecurity($this->getSecurity())
            ->setSoapHeaderCustomInfo($this->getCustomInfo());
    }

    /**
     * @return array
     */
    function getHttpOptions(): array
    {
        return [
            SoapClientInterface::WSDL_URL => $this->url,
            SoapClientInterface::WSDL_CLASSMAP => MessageService31_Rexel\ClassMap::get() /** ,
            SoapClientInterface::WSDL_SOAP_VERSION => SOAP_1_1, //OK
            SoapClientInterface::WSDL_CONNECTION_TIMEOUT => 60,
            SoapClientInterface::WSDL_CACHE_WSDL => WSDL_CACHE_NONE /**  ,
            SoapClientInterface::WSDL_LOGIN => $this->inlogCode,
            SoapClientInterface::WSDL_PASSWORD => $this->password /**/
        ];
    }

    /**
     * @return Security
     */
    function getSecurity(): Security
    {
        $format = 'Y-m-d\T\0\0\:\0\0\:\0\0\Z'; //try to force time at 00:00Z
        //$format = DateTimeInterface::RFC3339;
        return new Security(
            //new Timestamp((new DateTime())->format($format), (new DateTime())->modify('+1 day')->format($format)),
            usernameToken: new UsernameToken($this->inlogCode, $this->password)
        );
    }

    /**
     * @return CustomInfoType
     */
    function getCustomInfo(): CustomInfoType
    {
        return new CustomInfoType($this->isTestMessage, $this->languageCode, $this->isContentCompressed, $this->applicationID, $this->versionID, $this->relationID);
    }


    function getNewMessage(string $msgID): MessageType
    {
        return new MessageType(msgProperties: new MessageList($msgID, (new DateTime())->format(DateTimeInterface::RFC3339), $this->msgFormat, $this->msgVersion, $this->msgType));
    }

}