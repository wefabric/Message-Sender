<?php

require __DIR__.'/../vendor/autoload.php';

use Wefabric\GS1InsbouOrderConverter\OrderResponse;
use Wefabric\MessageSender\OosterbergSender;
use Wefabric\MessageSender\RexelSender;
use Wefabric\MessageSender\SolarSender;
use Wefabric\MessageSender\TechnischeUnieSender;

use Wefabric\SimplexmlToArray\SimplexmlToArray;
use Wefabric\StripEmptyElementsFromArray\StripEmptyElementsFromArray;

$config = require_once('config.php');

$TechnischeUnie = TechnischeUnieSender::make([
    'url' => 'https://testservices.technischeunie.com/WebServices/ExterneBerichtUitwisselingService31/messageservice.svc?singlewsdl', // TEST WSDL
//	'override_url' => 'https://services.technischeunie.com/WebServices/ExterneBerichtUitwisselingService31/messageservice.svc', // PRODUCTION ENDPOINT
    'relationID' => $config['TU_RELATIONID'],
    'inlogCode' => $config['TU_INLOGCODE'],
    'password' => $config['TU_PASSWORD'],
]);

$RexelAlfana = RexelSender::make([
//    'url' => 'https://test.messageservice.rexel.nl/MessageService31/MessageService.svc?wsdl',
  'url' => 'https://messageservice.rexel.nl/MessageService31/MessageService.svc?wsdl', //PROD
    'relationID' => $config['REXEL_RELATIONID'], // = klantnummer
    'inlogCode' => $config['REXEL_INLOGCODE'],
    'password' => $config['REXEL_PASSWORD']
]);

$SolarAlfana = SolarSender::make([
	'url' => 'https://api.solarnederland.online/dico/tst2/31?wsdl',
//	'url' => 'https://ext.solarnederland.online/biztolk/api/dico/31?wsdl', //PROD
    'relationID' => '', // is empty
    'inlogCode' => $config['SOLAR_INLOGCODE'],
    'password' => $config['SOLAR_PASSWORD']
]);

$Oosterberg = OosterbergSender::make([
	'url' => 'https://acceptatie.oosterberg.nl/messageservice31/MessageService.svc?wsdl',
	'relationID' => $config['OOSTERBERG_RELATIONID'],
	'inlogCode' => $config['OOSTERBERG_INLOGCODE'],
	'password' => $config['OOSTERBERG_PASSWORD'],
]);

/**
use WsdlToPhp\PackageGenerator\ConfigurationReader\GeneratorOptions;
use WsdlToPhp\PackageGenerator\Generator\Generator;

// Options definition: the configuration file parameter is optional
$options = (GeneratorOptions::instance())
    ->setOrigin($Oosterberg->url)
    ->setDestination('../MessageService31_Oosterberg')
    ->setComposerName('Wefabric\MessageSender\MessageService31_Oosterberg')
    ->setNameSpace('Wefabric\MessageSender\MessageService31_Oosterberg');
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

$messageType = null;
if(! array_key_exists('a', $params)) {
    dd('Geen geldige parameter \'?a=\' gevonden. Verwacht: tu,rexel,solar. ');
} else if($params['a'] == 'tu') {
    if($params['q'] == 'get') {
        $get = $TechnischeUnie->getGet();
        $request = $TechnischeUnie->getAvailableMessageRequest();
        $msgRequest = $TechnischeUnie->getMessageRequestType();

        //$delete = $TechnischeUnie->getDelete();
    } else {
        $post = $TechnischeUnie->getPost();

        $xml = simplexml_load_file( './order-test.xml')->asXML();
        //Convert to string, so we can do replacements. Not too pretty, but in the actual application the values are preinserted and do not need replacing.
        $xml = str_replace('%%BUYER_GLN%%', $config['BUYER_GLN'], $xml);
        $xml = str_replace('<GLN>%%DELIVERYPARTY_GLN%%</GLN>', '', $xml); //strip out this line
        $xml = str_replace('%%SUPPLIER_GLN%%', $config['TU_GLN'], $xml);
        $xml = str_replace('%%ITEM_ID%%', '0521617', $xml);
        $xml = str_replace('%%DELIVERYPARTY_LOCATIONDESCRIPTION%%', '', $xml);

        $xml = StripEmptyElementsFromArray::from(SimplexmlToArray::convert(new SimpleXMLElement($xml)));
        //And now we parse everything back to a sendable array.

        $message = $TechnischeUnie->getNewMessage(newMsgID())
            ->setMsgContent($TechnischeUnie->formatMessage($xml)->asXML());
    }
//    dump($TechnischeUnie);
} else if($params['a'] == 'rexel') {
    if($params['q'] == 'get') {
        $get = $RexelAlfana->getGet();
        $request = $RexelAlfana->getAvailableMessageRequest();
        $msgRequest = $RexelAlfana->getMessageRequestType();

        $delete = $RexelAlfana->getDelete();
    } else {
        $post = $RexelAlfana->getPost();

        $xml = simplexml_load_file( './order-min-test.xml')->asXML();
		//Convert to string, so we can do replacements. Not too pretty, but in the actual application the values are preinserted and do not need replacing.
        $xml = str_replace('%%BUYER_GLN%%', $config['BUYER_GLN'], $xml);
        $xml = str_replace('%%DELIVERYPARTY_GLN%%', $config['BUYER_GLN'], $xml);
        $xml = str_replace('%%SUPPLIER_GLN%%', $config['REXEL_GLN'], $xml);
        $xml = str_replace('%%ITEM_ID%%', '2700320341', $xml);
        $xml = str_replace('%%DELIVERYPARTY_LOCATIONDESCRIPTION%%', '', $xml);

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

        $xml = simplexml_load_file( './order-min-test.xml')->asXML();
        //Convert to string, so we can do replacements. Not too pretty, but in the actual application the values are preinserted and do not need replacing.
        $xml = str_replace('%%BUYER_GLN%%', $config['BUYER_GLN'], $xml);
        $xml = str_replace('%%DELIVERYPARTY_GLN%%', $config['BUYER_GLN'], $xml);
        $xml = str_replace('%%SUPPLIER_GLN%%', $config['SOLAR_GLN'], $xml);
        $xml = str_replace('%%ITEM_ID%%', '2301056', $xml);
        $xml = str_replace('%%DELIVERYPARTY_LOCATIONDESCRIPTION%%', '001', $xml);

        $xml = StripEmptyElementsFromArray::from(SimplexmlToArray::convert(new SimpleXMLElement($xml)));
        //And now we parse everything back to a sendable array.

        $message = $SolarAlfana->getNewMessage(newMsgID())
            ->setMsgContent($SolarAlfana->formatMessage($xml)->asXML());
    }
    //dump($SolarAlfana);
} else if($params['a'] == 'oosterberg') {
	if($params['q'] == 'get') {
		$get = $Oosterberg->getGet();
		$request = $Oosterberg->getAvailableMessageRequest();
		$msgRequest = $Oosterberg->getMessageRequestType();
		
		$delete = $Oosterberg->getDelete();
	} else {
		$post = $Oosterberg->getPost();
		
		$xml = simplexml_load_file( './order-min-test.xml')->asXML();
		//Convert to string, so we can do replacements. Not too pretty, but in the actual application the values are preinserted and do not need replacing.
		$xml = str_replace('%%BUYER_GLN%%', $config['BUYER_GLN'], $xml);
		$xml = str_replace('%%DELIVERYPARTY_GLN%%', $config['BUYER_GLN'], $xml);
		$xml = str_replace('%%SUPPLIER_GLN%%', $config['OOSTERBERG_GLN'], $xml);
		$xml = str_replace('%%ITEM_ID%%', '10018148', $xml);
		$xml = str_replace('%%DELIVERYPARTY_LOCATIONDESCRIPTION%%', '', $xml);
		
		$xml = StripEmptyElementsFromArray::from(SimplexmlToArray::convert(new SimpleXMLElement($xml)));
		//And now we parse everything back to a sendable array.
		
		$message = $Oosterberg->getNewMessage(newMsgID())
			->setMsgContent($Oosterberg->formatMessage($xml)->asXML());
	}
	//dump($Oosterberg);
} else {
    dd('Geen geldige parameter \'?a=\' gevonden. Verwacht: tu,rexel,solar,oosterberg. Gekregen: \'' . $params['a'] . '\'');
}

if(!$params['q'] || $params['q'] == 'post') {
    dump('Message Request:');
    dump(new SimpleXMLElement($message->getMsgContent()));

    if ($post->PostMessage($message)) {
        $result = $post->getResult();
        $message = $result->getMessage();
        if(!empty($message)) { //TU only sends 'true' as result, and null as message.
            $response = $message->getMsgContent();
            $orderResponseXML = simplexml_load_string($response);
        }

        dump('Response:');
        dump($post);
        if(isset($response)) {
            dump($response);
            dump($orderResponseXML);
        } else {
            dump($result);
			dump($result->getMessageResult());
            dump($message);
        }
    } else {
        dump($post);
        dump($post->getLastError());
        dump($post->getLastErrorAsArray());
        dump($post->getLastErrorAsXML());
        dump($post->getLastErrorAsXML()->asXML());
    }

} elseif ($params['q'] == 'get') {
    if($get->GetAvailableMessages($request)) {
		dump($get);
        if($messageList = $get->getResult()->getMessageList()) { //also checks if $messageList !== null

            $i = 0;
            foreach($messageList as $msgType) {
                echo '<b>Message: ' . $i .'</b>'; $i++;
                dump($msgType);

                $msgRequest->setMsgId($msgType->getMsgId())
                    ->setMsgFormat($msgType->getMsgFormat())
                    ->setMsgVersion($msgType->getMsgVersion());
                echo 'MessageRequest';
                dump($msgRequest);

                if($message = $get->GetMessage($msgRequest)) {

                    echo 'Message';
                    dump($message);
//                    dump(new SimpleXMLElement($message->getMessageRequestResult()->getMsgContent()));
	
	                $orderResponse = OrderResponse::makeFromXML(new SimpleXMLElement($message->getMessageRequestResult()->getMsgContent()));
					dump($orderResponse);
	
	                if(isset($delete)) {
//                        $delete->DeleteMessage($msgRequest);
		                dd($delete);
	                }
                }
            }
        } else {
			dump('No messages available.');
        }
    } else {
        dump($get);
        dump($get->getLastError());
    }

}

