<?php

namespace Wefabric\MessageSender;

use DateTime;
use DateTimeInterface;
use SimpleXMLElement;
use WsdlToPhp\PackageBase\SoapClientInterface;

use Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType\Post;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessagePropertiesType;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType;

use Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType\Get;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\AvailableMessagesRequestType;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageRequestType;

use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfoType;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Security;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Timestamp;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\UsernameToken;


class TechnischeUnieSender extends MessageSender
{

    /**
     * @return TechnischeUnieSender Object
     */
    public static function make(array $data = []): TechnischeUnieSender
    {
        return new self($data);
    }

    function getPost(): object
    {
        return (new Post($this->getHttpOptions()))
            ->setSoapHeaderSecurity($this->getSecurity())
            ->setSoapHeaderCustomInfo($this->getCustomInfo());
    }

    function getGet(): object
    {
        return (new Get($this->getHttpOptions()))
            ->setSoapHeaderSecurity($this->getSecurity())
            ->setSoapHeaderCustomInfo($this->getCustomInfo());
    }

    function getHttpOptions(): array
    {
        return array_merge(parent::getHttpOptions(), [
            SoapClientInterface::WSDL_URL => $this->url,
            SoapClientInterface::WSDL_CLASSMAP => MessageService31_TechnischeUnie\ClassMap::get()
        ]);
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
            ($includeTimestamp ? new Timestamp((new DateTime())->format($format), (new DateTime())->modify('+1 day')->format($format)) : null),
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

    function getNewMessage(string $msgID): object
    {
        return new MessageType(msgContent: '', msgProperties: new MessagePropertiesType((new DateTime())->format(DateTimeInterface::RFC3339), $msgID, $this->msgFormat, $this->msgVersion, $this->msgType));
    }

    function getAvailableMessageRequest(): object
    {
        return new AvailableMessagesRequestType(''); //empty: don't filter on type.
    }

    function getMessageRequestType(?string $msgId = null, ?string $msgFormat = null, ?string $msgVersion = null): MessageRequestType
    {
        return new MessageRequestType($msgId, $msgFormat, $msgVersion);
    }

    public function formatMessage(array $data): SimpleXMLElement
    {
        $data = parent::formatWithStandardRules($data);

        return parent::formatMessage($data);
    }

}