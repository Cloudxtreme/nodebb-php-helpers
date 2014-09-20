<?php
header('Access-Control-Allow-Origin: *'); 

$projects = array();
$projects[0]["id"] = "nighttrader";
$projects[0]["title"] = "<span class=\"semi-bold\">BlackHalo/NightTrader</span>";
$projects[0]["description"] = "An anonymous decentralized exchange/trading floor with a encrypted messaging system!";
$projects[0]["about"] = "No longer do you have to worry about an exchange being closed down or the people in charge running away with their pockets full of your money. A procotol that solves a problem about commitment schemes & trustless two-party double-deposit escrow! NightTrader has the potential to be a game changer for the world of crypto as we know it.";
$projects[0]["category"] = "Decentralized Exchange";
$projects[0]["funding"] = "Community Funded";
$projects[0]["progress"] = 80;
$projects[0]["url"] = "http://www.blackhalo.info/";
$projects[0]["startDate"] = "7th of July 2014";
$projects[0]["endDate"] = "In Progress";

$projects[1]["id"] = "blackmoon";
$projects[1]["title"] = "<span class=\"semi-bold\">BlackMoon</span>";
$projects[1]["description"] = "BlackCoin, with the help of Pocket Spacecraft will be sending a 
custom BlackCoin ship to the moon in 2015.";
$projects[1]["about"] = "Our ships will be custom designed on a CD shaped film with sensors, solar cells and tracking hardware. The craft will be track-able using Android and iPhones. The ship will have room for 40 passengers (your photo) and the BlackCoin logo.";
$projects[1]["category"] = "Community Effort";
$projects[1]["funding"] = "Community Funded";
$projects[1]["progress"] = 100;
$projects[1]["url"] = "http://cryptohut.co.uk/blackmoon/#firstPage";
$projects[1]["startDate"] = "11th of July 2014";
$projects[1]["endDate"] = "Ship Launch Date TBD in 2015";

$projects[2]["id"] = "onyx";
$projects[2]["title"] = "<span class=\"semi-bold\">Project Onyx</span>";
$projects[2]["description"] = "Enterprise Grade Blackcoin Payment Gateway";
$projects[2]["about"] = "Onyx is an enterprise-grade online payment gateway for businesses to easily integerate Blackcoin payments into their current platforms. Onyx will provide a powerful API, along with open source plugins to easily accept Blackcoins anywhere.";
$projects[2]["category"] = "Enterprise/Merchant Services";
$projects[2]["funding"] = "Privately Funded";
$projects[2]["progress"] = 50;
$projects[2]["url"] = "http://www.blackwavelabs.com";
$projects[2]["startDate"] = "7th of July 2014";
$projects[2]["endDate"] = "In Progress";

$projects[3]["id"] = "blacknode";
$projects[3]["title"] = "<span class=\"semi-bold\">Project BlackNode</span>";
$projects[3]["description"] = "Federated Public Address Resolver";
$projects[3]["about"] = "BlackNode is a decentralized public address resolver. Providing a node with a signed message will allow association between public Blackcoin addresses and easy to share addresses in the username@domain.com format.";
$projects[3]["category"] = "Enterprise/Merchant Services";
$projects[3]["funding"] = "Privately Funded";
$projects[3]["progress"] = 50;
$projects[3]["url"] = "http://www.blackwavelabs.com";
$projects[3]["startDate"] = "7th of July 2014";
$projects[3]["endDate"] = "In Progress";

$projects[4]["id"] = "blackbit";
$projects[4]["title"] = "<span class=\"semi-bold\">BlackBit</span>";
$projects[4]["description"] = "Spend Blackcoin anywhere Bitcoin is accepted";
$projects[4]["about"] = "BlackBit is a service which accepts Blackcoin payment for Bitcoin transactions, allowing you to pay any company that accepts Bitcoin quickly using your Blackcoins.

BlackBit was developed in response to critical issues reported to and ignored by Vericoin's closed source Veribit. BlackBit is a vast improvement over the original implementation, adding new innovative features and using an open source stack. The code will be made open source after an internal code review. <br><br> This project is now complete and has gone open source: https://github.com/blackwavelabs/blackbit";
$projects[4]["category"] = "Enterprise/Merchant Services";
$projects[4]["funding"] = "Privately Funded";
$projects[4]["progress"] = 100;
$projects[4]["url"] = "http://www.blackwavelabs.com";
$projects[4]["startDate"] = "7th of July 2014";
$projects[4]["endDate"] = "21st of July 2014";

$projects[5]["id"] = "rubywallet";
$projects[5]["title"] = "<span class=\"semi-bold\">Ruby Wallet</span>";
$projects[5]["description"] = "A sophisticated Ruby wrapper for any Bitcoin based cryptocurrency";
$projects[5]["about"] = "Ruby-Wallet provides complete access to any of the Bitcoin based coind JSON-RPC API. Ruby-Wallet organizes the features within a secure wallet abstraction, giving safe access to the the wallet from Ruby.";
$projects[5]["category"] = "Enterprise/Merchant Services";
$projects[5]["funding"] = "Privately Funded";
$projects[5]["progress"] = 90;
$projects[5]["url"] = "http://www.blackwavelabs.com";
$projects[5]["startDate"] = "7th of July 2014";
$projects[5]["endDate"] = "In Progress";

$projects[6]["id"] = "blkfeed";
$projects[6]["title"] = "<span class=\"semi-bold\">Project Gotham (BLKFeed)</span>";
$projects[6]["description"] = "A social centric hub for all information regarding BlackCoin";
$projects[6]["about"] = "BLKFeed -- which began as 'Project Gotham' is a social centric hub to absorb all news information regarding BlackCoin; giving you the ability to view new incoming: Tweets, Reddit Posts, Project Info, Live Updating Price Widgets, Forum, and Merchant info";
$projects[6]["category"] = "BlackCoin Social Network";
$projects[6]["funding"] = "Community Funded";
$projects[6]["progress"] = 100;
$projects[6]["url"] = "http://www.BLKFeed.com";
$projects[6]["startDate"] = "7th of July 2014";
$projects[6]["endDate"] = "21st of July 2014";

$projects[7]["id"] = "blackvisa";
$projects[7]["title"] = "<span class=\"semi-bold\">Project BlackVISA</span>";
$projects[7]["description"] = "A plugin to accept BC via PayPal or CoinKite and liquidate it; anywhere on the web.";
$projects[7]["about"] = "BlackVISA (just a project name, temporary -- don't worry VISA) is named as such for its functionality. This plugin was created so you could essentially 'Accept BC Anywhere'."
        . "using the open source plugin you can tap into (currently) CoinKite or PayPals API in order to automatically liquidates BlackCoin payments and only requires a btc buffer on it for it to function."
        . "This open source solution can be applied to almost any e-commerce website as a means to accept BlackCoin for payment. ";
$projects[7]["category"] = "Enterprise/Merchant Services";
$projects[7]["funding"] = "Privately Funded";
$projects[7]["progress"] = 55;
$projects[7]["url"] = "https://github.com/blkmaarx/blackvisa";
$projects[7]["startDate"] = "22nd of July 2014";
$projects[7]["endDate"] = "TBD";


$projects[8]["id"] = "blkbox";
$projects[8]["title"] = "<span class=\"semi-bold\">Project Sentinel (BLKBox)</span>";
$projects[8]["description"] = "A top secret hardware project.";
$projects[8]["about"] = "A project created to truly bring BlackCoin to the masses in the most innovative way we thought possible.";
$projects[8]["category"] = "BlackCoin Hardware";
$projects[8]["funding"] = "Privately Funded";
$projects[8]["progress"] = 60;
$projects[8]["url"] = "http://www.BLKFeed.com";
$projects[8]["startDate"] = "1st of July 2014";
$projects[8]["endDate"] = "21st of July 2014";

echo json_encode($projects);
?>