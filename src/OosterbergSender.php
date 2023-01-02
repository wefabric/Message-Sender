<?php

namespace Wefabric\MessageSender;

use DateTime;
use DateTimeInterface;
use SimpleXMLElement;
use Wefabric\MessageSender\MessageService31_Oosterberg\ServiceType\Delete;
use Wefabric\MessageSender\MessageService31_Oosterberg\ServiceType\Get;
use Wefabric\MessageSender\MessageService31_Oosterberg\ServiceType\Post;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\AvailableMessagesRequest;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\CustomInfo;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageRequest;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Security;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\UsernameToken;
use WsdlToPhp\PackageBase\SoapClientInterface;

class OosterbergSender extends MessageSender
{
	
	/**
	 * @return OosterbergSender Object
	 */
	public static function make(array $data = []): OosterbergSender
	{
		return new self($data);
	}
	
	/**
	 * @inheritDoc
	 */
	function getPost(): Post
	{
		return (new Post($this->getHttpOptions()))
			->setSoapHeaderSecurity($this->getSecurity())
			->setSoapHeaderCustomInfo($this->getCustomInfo());
	}
	
	/**
	 * @inheritDoc
	 */
	function getGet(): Get
	{
		return (new Get($this->getHttpOptions()))
			->setSoapHeaderSecurity($this->getSecurity())
			->setSoapHeaderCustomInfo($this->getCustomInfo());
	}
	
	/**
	 * @inheritDoc
	 */
	function getDelete(): Delete
	{
		return (new Delete($this->getHttpOptions()))
			->setSoapHeaderSecurity($this->getSecurity())
			->setSoapHeaderCustomInfo($this->getCustomInfo());
	}
	
	/**
	 * @return array
	 */
	function getHttpOptions(): array
	{
		return array_merge(parent::getHttpOptions(), [
			SoapClientInterface::WSDL_URL => $this->url,
			SoapClientInterface::WSDL_CLASSMAP => MessageService31_Oosterberg\ClassMap::get()
		]);
	}
	
	/**
	 * @inheritDoc
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
	
	/**
	 * @inheritDoc
	 */
	function getCustomInfo(): CustomInfo
	{
		return new CustomInfo($this->isTestMessage, $this->languageCode, $this->isContentCompressed, $this->applicationID, $this->versionID, $this->relationID);
	}
	
	/**
	 * @inheritDoc
	 */
	function getNewMessage(string $msgID): Message
	{
		return new Message(msgProperties: new MessageList((new DateTime())->format(DateTimeInterface::RFC3339), $msgID, $this->msgFormat, $this->msgVersion, $this->msgType));
	}
	
	/**
	 * @inheritDoc
	 */
	function getAvailableMessageRequest(): AvailableMessagesRequest
	{
		return new AvailableMessagesRequest(''); //empty: don't filter on type.
	}
	
	function getMessageRequestType(?string $msgId = null, ?string $msgFormat = null, ?string $msgVersion = null): MessageRequest
	{
		return new MessageRequest($msgFormat, $msgId, $msgVersion);
	}
	
	/**
	 * @param array $data
	 * @return SimpleXMLElement
	 */
	public function formatMessage(array $data): SimpleXMLElement
	{
		$data = parent::formatWithStandardRules($data);
		
		return parent::formatMessage($data);
	}
	
}