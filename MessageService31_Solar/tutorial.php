<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://api.solarnederland.online/dico/tst2/31?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://api.solarnederland.online/dico/tst2/31?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Wefabric\MessageSender\MessageService31_Solar\ClassMap::get(),
];
/**
 * Samples for Get ServiceType
 */
$get = new \Wefabric\MessageSender\MessageService31_Solar\ServiceType\Get($options);
$get->setSoapHeaderCustomInfo($CustomInfo);
/**
 * Sample call for GetAvailableMessages operation/method
 */
if ($get->GetAvailableMessages(new \Wefabric\MessageSender\MessageService31_Solar\StructType\AvailableMessagesRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetMessage operation/method
 */
if ($get->GetMessage(new \Wefabric\MessageSender\MessageService31_Solar\StructType\MessageRequestType()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Wefabric\MessageSender\MessageService31_Solar\ServiceType\Delete($options);
$delete->setSoapHeaderCustomInfo($CustomInfo);
/**
 * Sample call for DeleteMessage operation/method
 */
if ($delete->DeleteMessage(new \Wefabric\MessageSender\MessageService31_Solar\StructType\MessageRequestType()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Samples for Post ServiceType
 */
$post = new \Wefabric\MessageSender\MessageService31_Solar\ServiceType\Post($options);
$post->setSoapHeaderCustomInfo($CustomInfo);
/**
 * Sample call for PostMessage operation/method
 */
if ($post->PostMessage(new \Wefabric\MessageSender\MessageService31_Solar\StructType\MessageType()) !== false) {
    print_r($post->getResult());
} else {
    print_r($post->getLastError());
}
