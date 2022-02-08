<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_TechnischeUnie;

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
            'MessageType' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\MessageType',
            'MessageResponseType' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\MessageResponseType',
            'MessageRequestType' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\MessageRequestType',
            'MessageRequestResponseType' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\MessageRequestResponseType',
            'AvailableMessagesRequestType' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\AvailableMessagesRequestType',
            'AvailableMessagesResponseType' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\AvailableMessagesResponseType',
            'AttachmentType' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\AttachmentType',
            'MessagePropertiesType' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\MessagePropertiesType',
            'CustomInfoType' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\CustomInfoType',
        ];
    }
}
