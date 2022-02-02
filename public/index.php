<?php

require __DIR__.'/../vendor/autoload.php';

use Wefabric\MessageSender\RexelSender;
use Wefabric\MessageSender\SolarSender;
$RexelAlfana = RexelSender::make([
    'url' => 'https://test.messageservice.rexel.nl/MessageService31/MessageService.svc?wsdl',
    'relationID' => '', // = klantnummer
    'inlogCode' => '',
    'password' => ''
]);

$SolarAlfana = SolarSender::make([
    'url' => 'https://api.solarnederland.online/dico/tst2/31?wsdl',
    'relationID' => '', // is empty
    'inlogCode' => '',
    'password' => ''
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

function newMsgID() : string
{
    return 'TEST_WFEB_' . md5(rand()); // = 4.
}

$messageType = null;
if(! array_key_exists('a', $params)) {
    dd('Geen geldige parameter \'?a=\' gevonden. Verwacht: tu,rexel,solar. ');
} else if($params['a'] == 'rexel') {
    if($params['q'] == 'get') {
        $get = $RexelAlfana->getGet();
        $request = $RexelAlfana->getAvailableMessageRequest();
    } else {
        $post = $RexelAlfana->getPost();
        $xml = simplexml_load_file('./order-RexelAlfana.xml');
        $message = $RexelAlfana->getNewMessage(newMsgID())
            ->setMsgContent($RexelAlfana->formatMessage(SimplexmlToArray::convert($xml))->asXML());
    }
    //dump($RexelAlfana);
} else if($params['a'] == 'solar') {
    if($params['q'] == 'get') {
        $get = $SolarAlfana->getGet();
        $request = $SolarAlfana->getAvailableMessageRequest();
    } else {
        $post = $SolarAlfana->getPost();
        $xml = simplexml_load_file('./order-SolarAlfana.xml');
        $message = $SolarAlfana->getNewMessage(newMsgID())
            ->setMsgContent($SolarAlfana->formatMessage(SimplexmlToArray::convert($xml))->asXML());
    }
    //dump($SolarAlfana);
} else {
    dd('Geen geldige parameter \'?a=\' gevonden. Verwacht: rexel,solar. Gekregen: \'' . $params['a'] . '\'');
}

if(!$params['q'] || $params['q'] == 'post') {
    if ($post->PostMessage($message)) {
        $response = $post->getResult()->getMessage()->getMsgContent();
        $orderResponseXML = simplexml_load_string($response);

        dump($response);
        dump($orderResponseXML);
    } else {
        dump($post);
        dump($post->getResult());
        dump($post->getLastError());
        $responseXML = new SimpleXMLElement('<error/>');
        foreach($post->getLastError() as $key => $value){
            $responseXML->addChild($key,$value);
        }
        dump($responseXML->asXML());


//    /** @var SoapFault $value */
//    foreach($post->getLastError() as $key => $value) {
//        dump($key);
//        dump($value);
//        if( $value instanceof SoapFault) {
//            dump($value->getMessage(), $value->faultcode);
//        }
//    }
    }

} elseif ($params['q'] == 'get') {
    if($get->GetAvailableMessages($request)) {
        dump($get);
        if($messageList = $get->getResult()->getMessageList()) { //also checks if $messageList !== null
            dump($messageList);

            foreach($messageList as $message) {
                dump($message);
            }
        }
    } else {
        dump($get);
        dump($get->getLastError());
    }

}

