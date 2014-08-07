<?php
header('Access-Control-Allow-Origin: *'); 

$data = array();

$data[] = array("id"=>0, "title"=>"News: BLKFeed V 1.0 Released", "url"=>"http://www.BLKFeed.com/");
$data[] = array("id"=>1, "title"=>"News: BlackBit goes opensource", "url"=>"http://www.reddit.com/r/blackcoin/comments/2b9s3d/blackbit_is_now_open_source_we_some_improvements/");
$data[] = array("id"=>2, "title"=>"Update: BlackMoon BLKX-1 Funded", "url"=>"http://www.reddit.com/r/blackcoin/comments/2b73zq/pocket_spacecraft_have_accepted_blackcoin_for_our/");
$data[] = array("id"=>3, "title"=>"News: BlackCoin Foundation memberships now live", "url"=>"http://blackcointalk.org/viewtopic.php?f=5&t=6");
$data[] = array("id"=>4, "title"=>"Tidbit: CoinTelegraph lists BlackCoin as a partner on their site.", "url"=>"http://cointelegraph.com/about");
$data[] = array("id"=>5, "title"=>"News: FrozenBit working on cold staking and other tech for BlackCoin.",	"url"=>"http://www.reddit.com/r/blackcoin/comments/2bd0lu/ama_with_frozenbit_multisig_online_wallet_with/");
$data[] = array("id"=>6, "title"=>"News: Maarx releases Project BlackVISA in alpha", "url"=>"https://github.com/blkmaarx/blackvisa");
$data[] = array("id"=>7, "title"=>"News: BlackCast REBORN, REVAMPED and FRIDAY! (FEMALE HOST)", "url"=>"http://www.reddit.com/r/blackcoin/comments/2bhcns/blackcast_reborn_revamped_and_friday_female_host/");
$data[] = array("id"=>8, "title"=>"News: CoinTelegraph reviews BLKFeed", "url"=>"http://cointelegraph.com/news/112132/blackcoin-launches-blkfeed-and-blackcointalkorg-");
$data[] = array("id"=>9, "title"=>"News: Upcoming BlackCoin Newsletter", "url"=>"http://www.reddit.com/r/blackcoin/comments/2bknca/meet_black_and_a_community_newsletter_is_in_the/");
$data[] = array("id"=>10, "title"=>"News: BlackCoin Invited To Speak At Cryptolina", "url"=>"http://www.blackcointalk.org/viewtopic.php?f=2&t=24");
$data[] = array("id"=>11, "title"=>"News: BC/BlackHalo Presentations at OSFest", "url"=>"http://www.reddit.com/r/blackcoin/comments/2bnwrq/blackcoin_presentations_omaha_ne_on_august_23_and/");
$data[] = array("id"=>12, "title"=>"News: Bittrex to add BC pairs. Liquidity required!", "url"=>"http://www.blackcoin.co/news/571/blackcoin-making-move-to-become-market-on-bittrex");
$data[] = array("id"=>13, "title"=>"Tidbit: BlackCoin Multipool Now Linked To Bittrex", "url"=>"https://twitter.com/CoinBlack/status/492723064132894720");
$data[] = array("id"=>14, "title"=>"News: CyberDexter creates new BC Faucet", "url"=>"http://www.reddit.com/r/blackcoin/comments/2bs2wz/new_blackcoin_faucet/");
$data[] = array("id"=>15, "title"=>"News: BlackCoin Foundation - Chinese Chapter Opens Its Doors", "url"=>"http://www.dailyblackcoin.com/chinese-foundation-chapter-established-today/");
$data[] = array("id"=>16, "title"=>"News: HolyTransaction Launches New Client W/ Updated UI", "url"=>"https://holytransaction.com");
$data[] = array("id"=>17, "title"=>"Tidbit: BlackCoin in talks with Amagi Metals to accept BLK", "url"=>"https://twitter.com/CoinBlack/status/494158634080014337");
$data[] = array("id"=>18, "title"=>"Alert: BlackCoin PoS 2.0 HardFork Imminent UPDATE", "url"=>"http://www.blackcoin.co");
$data[] = array("id"=>19, "title"=>"Alert: Transition To PoS 2.0 Complete - View Changes", "url"=>"http://www.blackcoin.co/blackcoin-pos-protocol-v2-whitepaper.pdf");
$data[] = array("id"=>20, "title"=>"Release: BLKFeed integrated with community forum! (beta)", "url"=>"http://blkfeed.com:4567/topic/28/community-investor-hub");
$data[] = array("id"=>21, "title"=>"Alert: BLKFeed V2.0 Now Live On BLKFeed Domain", "url"=>"http://blkfeed.com");
$data[] = array("id"=>22, "title"=>"News: Jabulon Announces Professionally Done BlackCoin Music Video", "url"=>"http://www.reddit.com/r/blackcoin/comments/2cq7ru/jabulon_updates_and_revelations_why_i_buy/");

// Hi McKie, I've changed file.

echo json_encode($data);
?>