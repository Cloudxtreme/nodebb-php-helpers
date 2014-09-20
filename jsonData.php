<?phpheader('Access-Control-Allow-Origin: *'); function objectToArray($d) {    if (is_object($d))        $d = get_object_vars($d); // Gets the properties of the given object with get_object_vars function    if (is_array($d))        return array_map(__FUNCTION__, $d); // Return array converted to object using __FUNCTION__ (Magic constant) for recursive call    else        return $d; // Return array}$type 	= isset($_REQUEST["type"]) ? $_REQUEST["type"] : null;$id		= isset($_REQUEST["id"]) ? $_REQUEST["id"] : null;// http://blkfeed.com/php-helpers/jsonData.php?type=exchange&id=if($type=="exchange"){	$data = array();	if (isset($id) && strtolower($id) == "mintpal") {		$mintpal_stats = json_decode(file_get_contents("https://api.mintpal.com/market/stats/BC/BTC"), true);		$data["24hlow"] = $mintpal_stats[0]["24hlow"] * 100000000;		$data["24hhigh"] = $mintpal_stats[0]["24hhigh"] * 100000000;		$data["24hvol"] = round($mintpal_stats[0]["24hvol"], 2);		$data["last_price"] = $mintpal_stats[0]["last_price"] * 100000000;	} else if (isset($id) && strtolower($id) == "cryptsy") {		$cryptsy_stats = json_decode(file_get_contents("http://pubapi.cryptsy.com/api.php?method=singlemarketdata&marketid=179"), true);		$data["24hlow"] = 0;		$data["24hhigh"] = 0;		$data["24hvol"] = round(($cryptsy_stats["return"]["markets"]["BC"]["volume"] / 1000), 2);		$data["last_price"] = $cryptsy_stats["return"]["markets"]["BC"]["lasttradeprice"] * 100000000;	} else if (isset($id) && strtolower($id) == "bittrex") {		$stats = json_decode(file_get_contents("https://bittrex.com/api/v1.1/public/getmarketsummary?market=BTC-BC"), true);		$data["24hlow"] = $stats["result"][0]["Low"] * 100000000;		$data["24hhigh"] = $stats["result"][0]["High"] * 100000000;		$data["24hvol"] = round($stats["result"][0]["BaseVolume"], 2);		$data["last_price"] = $stats["result"][0]["Last"] * 100000000;	} else if (isset($id) && strtolower($id) == "bter") {		$stats = json_decode(file_get_contents("http://data.bter.com/api/1/ticker/bc_btc"), true);		$data["24hlow"] = $stats["result"][0]["low"] * 100000000;		$data["24hhigh"] = $stats["result"][0]["high"] * 100000000;		$data["24hvol"] = round($stats["result"][0]["vol_btc"], 2);		$data["last_price"] = $stats["result"][0]["last"] * 100000000;	} else if (isset($id) && strtolower($id) == "btc38") {		$stats = json_decode(file_get_contents("http://api.btc38.com/v1/ticker.php?c=bc"), true);		$data["24hlow"] = $stats["result"][0]["low"] * 100000000;		$data["24hhigh"] = $stats["result"][0]["high"] * 100000000;		$data["24hvol"] = round($stats["result"][0]["vol"], 2) * $stats["result"][0]["last"];		$data["last_price"] = $stats["result"][0]["last"] * 100000000;	}	echo json_encode($data);	// http://api.btc38.com/v1/ticker.php?c=bc&mk_type=cny		// http://api.btc38.com/v1/ticker.php?c=bc&mk_type=btc		// http://data.bter.com/api/1/ticker/BC_BTC		// http://data.bter.com/api/1/ticker/BC_CNY} else if ($type == "buypressure"){	if (isset($id) && strtolower($id) == strtolower("blackcoinpool")) {		$hashrates_url = "http://blackcoinpool.com/api/stats/";		$hashrates = objectToArray(json_decode(file_get_contents($hashrates_url)));		$profitabilities_url = "http://blackcoinpool.com/api/profitability/";		$profitabilities = objectToArray(json_decode(file_get_contents($profitabilities_url)));		$scryptHash = $hashrates["results"][0]["hashrate"] / 1000000;		$sha256Hash = $hashrates["results"][1]["hashrate"] / 1000000;		$x11Hash = $hashrates["results"][2]["hashrate"] / 1000000;		$scryptnHash = $hashrates["results"][3]["hashrate"] / 1000000;		$scrypt = $scryptHash * $profitabilities["results"][0]["profitability"];		$sha256 = $sha256Hash * $profitabilities["results"][1]["profitability"] / 1000 / 85; // per 85ghs		$x11 = $x11Hash * $profitabilities["results"][2]["profitability"] / 4; // per 4 mhs		$scryptn = $scryptnHash * $profitabilities["results"][3]["profitability"] * 2; // per 0.5 mhs		$total_btc = $scrypt + $sha256 + $x11 + $scryptn;		$mintpal_stats = json_decode(file_get_contents("https://api.mintpal.com/market/stats/BC/BTC"), true);		$data["24hlow"] = $mintpal_stats[0]["24hlow"];		$data["24hhigh"] = $mintpal_stats[0]["24hhigh"];		$average = ($data["24hlow"] + $data["24hhigh"]) / 2;		if ($average > 0)			echo $total_BC = round($total_btc / $average, 2) . " BC";	}}// else //    echo $total_BC = ""//http://www.altmining.farm/api.php?method=paidcoins&display=human