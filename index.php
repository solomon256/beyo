<?php



		//$data .= "\nResponse body:\n";
		$postdata =
file_get_contents ( "php://input" );
		//file_put_contents(
		//	$targetFile,
		//	$data . file_get_contents('php://input') . "\n"
			
	//	);
	$SS=str_replace(" ","%20",$postdata);	
 $see= file_get_contents('http://sms.smsone.co.ug:8866/cgi-bin/sendsms?username=pegasus&password=Ryq4b9&from=solo&to=256778078911&text='.$SS);
		//echo("Done!\n\n");
	//}
mail("solokaso@gmail.com","My subject",$p);
	//private function getHeaderList() {

//(new DumpHTTPRequestToFile)->execute('output.txt');
