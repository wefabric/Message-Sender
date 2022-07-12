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
            'Message' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\Message',
            'MessageProperties' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\MessageProperties',
            'Attachment' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\Attachment',
            'CustomInfo' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\CustomInfo',
            'MessageResponse' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\MessageResponse',
            'MessageRequest' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\MessageRequest',
            'MessageRequestResponse' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\MessageRequestResponse',
            'AvailableMessagesRequest' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\AvailableMessagesRequest',
            'AvailableMessagesResponse' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\AvailableMessagesResponse',
            'MessageList' => '\\Wefabric\\MessageSender\\MessageService31_TechnischeUnie\\StructType\\MessageList',
        ];
    }
}
