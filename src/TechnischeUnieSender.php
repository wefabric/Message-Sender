<?php

namespace Wefabric\MessageSender;

use DateTime;
use DateTimeInterface;
use SoapHeader;
use SoapVar;
use Wefabric\MessageSender\BaseService\BaseService;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfo;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Message;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageProperties;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Security;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\UsernameToken;
use WsdlToPhp\PackageBase\SoapClientInterface;

use Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType\Post;

class TechnischeUnieSender extends MessageSender
{

    protected string $versionID = '3.10';

    /**
     * @return TechnischeUnieSender Object
     */
    public static function make(array $data = []): TechnischeUnieSender
    {
        return new self($data);
    }

    /**
     * @return array
     */
    function getHttpOptions(): array
    {
        return array_merge(parent::getHttpOptions(), [
            SoapClientInterface::WSDL_URL => $this->url, //set mode: WSDL
            SoapClientInterface::WSDL_CLASSMAP => MessageService31_TechnischeUnie\ClassMap::get(),

//            SoapClientInterface::WSDL_URI => $this->url, //set mode: non-WSDL
            SoapClientInterface::WSDL_LOCATION => $this->url, //set overriding location
        ]);
    }

    /**
     * @return Post A complete Post-object to use and send data to the set URL and credentials.
     * Use: $response = $post->PostMessage($messageType);
     */
    function getPost(): Post
    {
        return (new Post($this->getHttpOptions()))
//            ->setSoapHeaderSecurity($this->getSecurity())
            ->setSoapHeaderSecurity($this->getSecurityAsSoapvar())
            ->setSoapHeaderCustomInfo($this->getCustomInfo());
    }

    /**
     * @return object A complete Get-object to use and receive data from the set URL and credentials.
     * Use: $response = $get->GetAvailableMessages($request);
     */
    function getGet(): object
    {
        // TODO: Implement getGet() method.
    }

    /**
     * @param string $msgID
     * @return object
     */
    function getNewMessage(string $msgID): object
    {
        return new Message(new MessageProperties((new DateTime())->format(DateTimeInterface::RFC3339), $msgID, $this->msgFormat, $this->msgVersion, $this->msgType));
    }

    /**
     * @return object
     */
    function getAvailableMessageRequest(): object
    {
        // TODO: Implement getAvailableMessageRequest() method.
    }

    /**
     * @return object A complete Delete-object to use and delete data at the set URL and credentials.
     * Use: $response = $delete-> ??
     */
    function getDelete(): object
    {
        // TODO: Implement getDelete() method.
    }

    /**
     * @param bool $includeTimestamp
     * @return Security
     */
    function getSecurity(bool $includeTimestamp = false): Security
    {
        $format = 'Y-m-d\T\0\0\:\0\0\:\0\0\Z'; //try to force time at 00:00Z
        //$format = DateTimeInterface::RFC3339;
        return new Security(
            //new Timestamp((new DateTime())->format($format), (new DateTime())->modify('+1 day')->format($format)),
            usernameToken: new UsernameToken($this->inlogCode, $this->password)
        );
    }

    function getSecurityAsSoapvar(bool $includeTimestamp = false): array
    {
        $ns = 'ns2';
        $usernameToken = new SoapVar('<'. $ns .':UsernameToken>'.
                '<'. $ns .':Username>'. $this->inlogCode .'</'. $ns .':Username>'.
                '<'. $ns .':Password>'. $this->password .'</'. $ns .':Password>'.
            '</'. $ns .':UsernameToken>',
            XSD_ANYXML, typeName: $ns, typeNamespace: BaseService::SecurityNS);
        //typename: $ns >> doesn't do anything for the soap-envelop but does prevent adding two empty namespaces, bumping the security ns up to ns4.

        return [ $usernameToken ];
    }

    /**
     * @return object
     */
    function getCustomInfo(): CustomInfo
    {
        return new CustomInfo($this->isTestMessage, $this->languageCode, $this->isContentCompressed, $this->applicationID, $this->versionID, $this->relationID);
    }
}