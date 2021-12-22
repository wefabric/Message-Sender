<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31_Rexel;

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
            'MessageRequestType' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\MessageRequestType',
            'CustomInfoType' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\CustomInfoType',
            'MessageRequestResponseType' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\MessageRequestResponseType',
            'MessageType' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\MessageType',
            'MessageList' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\MessageList',
            'ArrayOfAttachmentType' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\ArrayType\\ArrayOfAttachmentType',
            'AttachmentType' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\AttachmentType',
            'MessageResponseType' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\MessageResponseType',
            'AvailableMessagesRequestType' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\AvailableMessagesRequestType',
            'ArrayOfMessageList' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\ArrayType\\ArrayOfMessageList',
            'Security' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\Security',
            'UsernameToken' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\UsernameToken',
            'Timestamp' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\Timestamp',
            'FaultError' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\FaultError',
            'FaultDetails' => '\\Wefabric\\MessageSender\\MessageService31_Rexel\\StructType\\FaultDetails',
        ];
    }
}
