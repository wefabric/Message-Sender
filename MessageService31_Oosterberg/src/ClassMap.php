<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Oosterberg;

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
	        'Security' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\Security',
	        'UsernameToken' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\UsernameToken',
	        'Message' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\Message',
	        'MessageProperties' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\MessageProperties',
            'Attachment' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\Attachment',
            'CustomInfo' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\CustomInfo',
            'MessageResponse' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\MessageResponse',
            'MessageRequest' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\MessageRequest',
            'MessageRequestResponse' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\MessageRequestResponse',
            'AvailableMessagesRequest' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\AvailableMessagesRequest',
            'AvailableMessagesResponse' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\AvailableMessagesResponse',
            'MessageList' => '\\Wefabric\\MessageSender\\MessageService31_Oosterberg\\StructType\\MessageList',
        ];
    }
}
