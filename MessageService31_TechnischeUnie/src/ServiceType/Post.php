<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType;

use SoapFault;
use Wefabric\MessageSender\BaseService\BaseService;
use Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\Security;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Post ServiceType
 * @subpackage Services
 */
class Post extends AbstractSoapClientBase
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
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\ServiceType\Post
     */
    public function setSoapHeaderCustomInfo(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfoType $customInfo, string $namespace = 'https://www.ketenstandaard.nl/WS/MessageService/3.1', bool $mustUnderstand = false, ?string $actor = null): self
    {
        return $this->setSoapHeader($namespace, 'CustomInfo', $customInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named PostMessage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: CustomInfo
     * - SOAPHeaderNamespaces: https://www.ketenstandaard.nl/WS/MessageService/3.1
     * - SOAPHeaderTypes: \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\CustomInfoType
     * - SOAPHeaders: required
     * - documentation: Biedt een bericht aan dat door de webservice moet worden opgeslagen en verwerkt. Msgid moet door de klant voorzien worden van een uniek ID. Hierdoor kan de leverancier controleren of betreffende bericht al eens eerder is aangeleverd.
     * Bij deze functie is het msgcontent element verplicht.
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType $message
     * @return \Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageResponseType|bool
     */
    public function PostMessage(\Wefabric\MessageSender\MessageService31_TechnischeUnie\StructType\MessageType $message)
    {
        try {
            $this->setResult($resultPostMessage = $this->getSoapClient()->__soapCall('PostMessage', [
                $message,
            ], [], [], $this->outputHeaders));
        
            return $resultPostMessage;
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
