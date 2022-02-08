<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType;

use SoapFault;
use Wefabric\MessageSender\BaseService\BaseService;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Security;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Delete ServiceType
 * @subpackage Services
 */
class Delete extends AbstractSoapClientBase
{

    /**
     * Sets the Security SoapHeader param
     * @param Security $security
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return Post
     *@uses AbstractSoapClientBase::setSoapHeader()
     */
    public function setSoapHeaderSecurity(Security $security, string $namespace = BaseService::SecurityNS, bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'Security', $security, $mustUnderstand, $actor);
    }

    /**
     * Sets the CustomInfo SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfoType $customInfo
     * @param string $namespace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType\Delete
     */
    public function setSoapHeaderCustomInfo(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfoType $customInfo, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'CustomInfo', $customInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named DeleteMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfoType
     * - SOAPHeaders: required
     * - documentation: De functie wordt aangeroepen met het msgid dat moet worden verwijderd. Je kunt per aanroep dus maximaal 1 message verwijderen. Deze functie moet worden aangeroepen nadat een bericht is opgehaald via de 'GetMessage' functie ongeacht
     * of het bericht ook succesvol kan worden verwerkt.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageRequestType $messageRequest
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageResponseType|bool
     */
    public function DeleteMessage(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageRequestType $messageRequest)
    {
        try {
            $this->setResult($resultDeleteMessage = $this->getSoapClient()->__soapCall('DeleteMessage', [
                $messageRequest,
            ], [], [], $this->outputHeaders));
        
            return $resultDeleteMessage;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
