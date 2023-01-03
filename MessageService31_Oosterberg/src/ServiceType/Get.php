<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Oosterberg\ServiceType;

use SoapFault;
use Wefabric\MessageSender\BaseService\BaseService;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\AvailableMessagesRequest;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\AvailableMessagesResponse;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\CustomInfo;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Message;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageList;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageRequest;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageRequestResponse;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\MessageResponse;
use Wefabric\MessageSender\MessageService31_Oosterberg\StructType\Security;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends BaseService
{
	/**
	 * Sets the Security SoapHeader param
	 * @param Security $security
	 * @param string $namespace
	 * @param bool $mustUnderstand
	 * @param ?string $actor
	 * @return Get
	 *@uses AbstractSoapClientBase::setSoapHeader()
	 */
	public function setSoapHeaderSecurity(Security $security, string $namespace = BaseService::SecurityNS, bool $mustUnderstand = false, ?string $actor = null): self
	{
		return $this->setSoapHeader($namespace, 'Security', $security, $mustUnderstand, $actor);
	}
	/**
     * Sets the CustomInfo SoapHeader param
     * @param CustomInfo $customInfo
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string|null $actor
     * @return Get
     *@uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderCustomInfo(CustomInfo $customInfo, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'CustomInfo', $customInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named GetMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\CustomInfo
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param MessageRequest $parameters
     * @return MessageRequestResponse|bool
     */
    public function GetMessage(MessageRequest $parameters)
    {
        try {
            $this->setResult($resultGetMessage = $this->getSoapClient()->__soapCall('GetMessage', [
                $parameters,
            ], [], [], $this->outputHeaders));
	
	        if($resultGetMessage->MessageRequestResult) {
		        return new MessageRequestResponse(new Message($resultGetMessage->MessageRequestResult->MsgProperties, $resultGetMessage->MessageRequestResult->MsgContent));
	        }
	        return null;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAvailableMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_Oosterberg\StructType\CustomInfo
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param AvailableMessagesRequest $parameters
     * @return AvailableMessagesResponse|bool
     */
    public function GetAvailableMessages(AvailableMessagesRequest $parameters)
    {
        try {
            $this->setResult($resultGetAvailableMessages = $this->getSoapClient()->__soapCall('GetAvailableMessages', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAvailableMessages;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @return AvailableMessagesResponse
     *@see AbstractSoapClientBase::getResult()
     */
    public function getResult()
    {
	    $result = parent::getResult();
		if(json_decode(json_encode($result),true) === []) {
			$messageList = []; //This is when a MessageList is requested but there are no messages, and an empty object is returned.
		} elseif($result->MessageList) {
			$messageList = $result->MessageList;
	    }

		if(isset($messageList)) {
		    return new AvailableMessagesResponse($messageList);
		}
		return null;
    }
}
