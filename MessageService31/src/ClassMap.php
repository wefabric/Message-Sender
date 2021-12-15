<?php

declare(strict_types=1);

namespace Wefabric\MessageSender\MessageService31;

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
            'MessageRequestType' => '\\StructType\\MessageRequestType',
            'CustomInfoType' => '\\StructType\\CustomInfoType',
            'MessageRequestResponseType' => '\\StructType\\MessageRequestResponseType',
            'MessageType' => '\\StructType\\MessageType',
            'MessageList' => '\\StructType\\MessageList',
            'ArrayOfAttachmentType' => '\\ArrayType\\ArrayOfAttachmentType',
            'AttachmentType' => '\\StructType\\AttachmentType',
            'MessageResponseType' => '\\StructType\\MessageResponseType',
            'AvailableMessagesRequestType' => '\\StructType\\AvailableMessagesRequestType',
            'ArrayOfMessageList' => '\\ArrayType\\ArrayOfMessageList',
            'Timestamp' => '\\StructType\\Timestamp',
            'Security' => '\\StructType\\Security',
            'UsernameToken' => '\\StructType\\UsernameToken',
            'FaultError' => '\\StructType\\FaultError',
            'FaultDetails' => '\\StructType\\FaultDetails',
        ];
    }
}
