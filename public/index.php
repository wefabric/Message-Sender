<?php

require __DIR__.'/../vendor/autoload.php';

use Wefabric\MessageSender\BaseService\SoapFaultException;
use Wefabric\MessageSender\RexelSender;
use Wefabric\MessageSender\SolarSender;
use Wefabric\MessageSender\TechnischeUnieSender;

use Wefabric\SimplexmlToArray\SimplexmlToArray;
use Wefabric\StripEmptyElementsFromArray\StripEmptyElementsFromArray;

$config = require_once('config.php');

$TechnischeUnie = TechnischeUnieSender::make([
    'url' => 'https://testservices.technischeunie.com/WebServices/ExterneBerichtUitwisselingService31/messageservice.svc?signlewsdl',
    'relationID' => $config['TU_RELATIONID'],
    'inlogCode' => $config['TU_INLOGCODE'],
    'password' => $config['TU_PASSWORD'],
]);

$RexelAlfana = RexelSender::make([
    'url' => 'https://test.messageservice.rexel.nl/MessageService31/MessageService.svc?wsdl',
    'relationID' => $config['REXEL_RELATIONID'], // = klantnummer
    'inlogCode' => $config['REXEL_INLOGCODE'],
    'password' => $config['REXEL_PASSWORD']
]);

$SolarAlfana = SolarSender::make([
    'url' => 'https://api.solarnederland.online/dico/tst2/31?wsdl',
    'relationID' => '', // is empty
    'inlogCode' => $config['SOLAR_INLOGCODE'],
    'password' => $config['SOLAR_PASSWORD']
]);

/**
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

// Options definition: the configuration file parameter is optional
$options = (GeneratorOptions::instance())
    ->setOrigin($SolarAlfana->url)
    ->setDestination('../MessageService31_Solar')
    ->setComposerName('Wefabric\MessageSender\MessageService31_Solar')
    ->setNameSpace('Wefabric\MessageSender\MessageService31_Solar');
$generator = new Generator($options);
$generator->generatePackage();
die();
/**/

$params = [];
parse_str(parse_url($_SERVER['REQUEST_URI'])['query'], $params);
if(! array_key_exists('q', $params)) { $params['q'] = null; } //set empty value, default = 'post'

function newMsgID() : string
{
    return 'TEST_WFEB_' . md5(rand()); // = 4.
}

$xml = simplexml_load_file('./order-test.xml')->asXML();
//Convert to string, so we can do replacements. Not too pretty, but in the actual application the values are preinserted and do not need replacing.
$xml = str_replace('%%BUYER_GLN%%', '8714231774051', $xml);
$xml = str_replace('%%DELIVERYPARTY_GLN%%', '8714231774051', $xml);

$messageType = null;
if(! array_key_exists('a', $params)) {
    dd('Geen geldige parameter \'?a=\' gevonden. Verwacht: tu,rexel,solar. ');
} else if($params['a'] == 'tu') {
    if($params['q'] == 'get') {
        $get = $TechnischeUnie->getGet();
        $request = $TechnischeUnie->getAvailableMessageRequest();
        $msgRequest = $TechnischeUnie->getMessageRequestType();
        dd('delete');
    } else {
        $post = $TechnischeUnie->getPost();
        $xml = str_replace('%%SUPPLIER_GLN%%', '8711389000001', $xml);
        $xml = str_replace('%%ITEM_ID%%', '7703960', $xml);
        $xml = StripEmptyElementsFromArray::from(SimplexmlToArray::convert(new SimpleXMLElement($xml)));
        //And now we parse everything back to a sendable array.

        $message = $TechnischeUnie->getNewMessage(newMsgID())
            ->setMsgContent($TechnischeUnie->formatMessage($xml)->asXML());
    }
    dump($TechnischeUnie);
} else if($params['a'] == 'rexel') {
    if($params['q'] == 'get') {
        $get = $RexelAlfana->getGet();
        $request = $RexelAlfana->getAvailableMessageRequest();
        $msgRequest = $RexelAlfana->getMessageRequestType();

        $delete = $RexelAlfana->getDelete();
    } else {
        $post = $RexelAlfana->getPost();
        $xml = str_replace('%%SUPPLIER_GLN%%', '8713473009990', $xml);
        $xml = str_replace('%%ITEM_ID%%', '2700320341', $xml);
        $xml = StripEmptyElementsFromArray::from(SimplexmlToArray::convert(new SimpleXMLElement($xml)));
        //And now we parse everything back to a sendable array.

        $message = $RexelAlfana->getNewMessage(newMsgID())
            ->setMsgContent($RexelAlfana->formatMessage($xml)->asXML());
    }
    //dump($RexelAlfana);
} else if($params['a'] == 'solar') {
    if($params['q'] == 'get') {
        $get = $SolarAlfana->getGet();
        $request = $SolarAlfana->getAvailableMessageRequest();
        $msgRequest = $SolarAlfana->getMessageRequestType();

        $delete = $SolarAlfana->getDelete();
    } else {
        $post = $SolarAlfana->getPost();
        $xml = str_replace('%%SUPPLIER_GLN%%', '8711891990012', $xml);
        $xml = str_replace('%%ITEM_ID%%', '2301056', $xml);
        $xml = StripEmptyElementsFromArray::from(SimplexmlToArray::convert(new SimpleXMLElement($xml)));
        //And now we parse everything back to a sendable array.

        $message = $SolarAlfana->getNewMessage(newMsgID())
            ->setMsgContent($SolarAlfana->formatMessage($xml)->asXML());
    }
    //dump($SolarAlfana);
} else {
    dd('Geen geldige parameter \'?a=\' gevonden. Verwacht: tu,rexel,solar. Gekregen: \'' . $params['a'] . '\'');
}

if(!$params['q'] || $params['q'] == 'post') {
    dump('Message Request:');
    dump(new SimpleXMLElement($message->getMsgContent()));

    if ($post->PostMessage($message)) {
        $response = $post->getResult()->getMessage()->getMsgContent();
        $orderResponseXML = simplexml_load_string($response);

        dump('Response:');
        dump($post);
        dump($response);
        dump($orderResponseXML);
    } else {
        dump($post);
        dump($post->getLastError());
        dump($post->getLastErrorAsArray());
        dump($post->getLastErrorAsXML());
        dump($post->getLastErrorAsXML()->asXML());
    }

} elseif ($params['q'] == 'get') {
    if($get->GetAvailableMessages($request)) {
        if($messageList = $get->getResult()->getMessageList()) { //also checks if $messageList !== null
            dump($get);
            foreach($messageList as $msgType) {
                echo 'Message';
                dump($msgType);

                $msgRequest->setMsgId($msgType->getMsgId())
                    ->setMsgFormat($msgType->getMsgFormat())
                    ->setMsgVersion($msgType->getMsgVersion());
                dump($msgRequest);

                if($message = $get->GetMessage($msgRequest)) {
                    dump($message);
                    //$delete->DeleteMessage($msgRequest);
                    dd($delete);
                }
            }
        }
    } else {
        dump($get);
        dump($get->getLastError());
    }

}

