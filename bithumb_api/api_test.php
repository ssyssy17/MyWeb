<?php

	require("xcoin_api_client.php");

 	//$api = new XCoinAPI("230a3adada8a91f9eb520e5d736c84e6", "b1fb60732403a0eb018ebe8c92ae4f18");
	$api = new XCoinAPI("6e8e783c7613ebb24b8cda8ee83ae33f", "139f89f39929101262814e20a3653380");
	$rgParams['order_currency'] = 'BTC';
 	$rgParams['payment_currency'] = 'KRW';

	$result = $api->xcoinApiCall("/info/account", $rgParams);

	print_r($result);


/*
//$api = new XCoinAPI();
$api = new XCoinAPI("230a3adada8a91f9eb520e5d736c84e6", "b1fb60732403a0eb018ebe8c92ae4f18");
$result = $api->execute("/public/ticker");
echo "status : " . $result->status . "<br />";
echo "last : " . $result->data->closing_price . "<br />";
echo "sell : " . $result->data->sell_price . "<br />";
echo "buy : " . $result->data->buy_price . "<br />";
*/

/*
 * public api
 *
 * /public/ticker
 * /public/recent_ticker
 * /public/orderbook
 * /public/recent_transactions
 */

/*
 * private api
 *
 * endpoint				=> parameters
 * /info/current		=> array('current' => 'btc');
 * /info/account
 * /info/balance		=> array('current' => 'btc');
 * /info/wallet_address	=> array('current' => 'btc');
 */



/*
 * date example
 * 2014-12-30 13:29:49 = 1419913789000
 * 2014-12-29 14:29:49 = 1419830989000
 * 2014-12-23 14:29:49 = 1419312589000
 * 2014-11-30 14:29:49 = 1417325389000
 */

?>