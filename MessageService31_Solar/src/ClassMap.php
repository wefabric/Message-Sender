<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Solar;

/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'MessageType' => '\\Wefabric\\MessageSender\\MessageService31_Solar\\StructType\\MessageType',
            'MessageResponseType' => '\\Wefabric\\MessageSender\\MessageService31_Solar\\StructType\\MessageResponseType',
            'MessageRequestType' => '\\Wefabric\\MessageSender\\MessageService31_Solar\\StructType\\MessageRequestType',
            'MessageRequestResponseType' => '\\Wefabric\\MessageSender\\MessageService31_Solar\\StructType\\MessageRequestResponseType',
            'AvailableMessagesRequestType' => '\\Wefabric\\MessageSender\\MessageService31_Solar\\StructType\\AvailableMessagesRequestType',
            'AvailableMessagesResponseType' => '\\Wefabric\\MessageSender\\MessageService31_Solar\\StructType\\AvailableMessagesResponseType',
            'AttachmentType' => '\\Wefabric\\MessageSender\\MessageService31_Solar\\StructType\\AttachmentType',
            'MessagePropertiesType' => '\\Wefabric\\MessageSender\\MessageService31_Solar\\StructType\\MessagePropertiesType',
            'CustomInfoType' => '\\Wefabric\\MessageSender\\MessageService31_Solar\\StructType\\CustomInfoType',
        ];
    }
}
