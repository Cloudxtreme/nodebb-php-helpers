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
$data[] = array("id"=>23, "title"=>"News: Now supported on Cointopay -- a payment processor.", "url"=>"https://twitter.com/Cointopay/status/497327390889365505");
$data[] = array("id"=>24, "title"=>"News: CoinDesk reports on BitHalo/BlackHalo -- interviews David Zimbeck", "url"=>"http://www.coindesk.com/bithalo-smart-contracts-without-block-chain-bloat/");
$data[] = array("id"=>25, "title"=>"News: BlackCoin is now listed on LazyCoins Exchange (Beta)", "url"=>"http://www.lazycoins.com");

$data[] = array("id"=>26, "title"=>"BlackCoin is partnering with CoinsisCard for a real world BlackCoin edition debit card.", "url"=>"http://blkfeed.com/topic/96/blackcoin-is-partnering-with-coinsiscard-for-a-real-world-blackcoin-edition-debit-card/2");
$data[] = array("id"=>27, "title"=>"Tidbit: Follow @NightBarkMusic on Twitter -- Will Release BlackCoin Music Video Shortly (You Won't Wanna Miss It)", "url"=>"https://twitter.com/NightBarkMusic");
$data[] = array("id"=>28, "title"=>"News: BlackCoin now an accepted currency on Prypto Cards", "url"=>"http://getprypto.com/accepted-coins/");
$data[] = array("id"=>29, "title"=>"Alert: Casheer App considering BlackCoin integration. Show your support by making a comment in the link by clicking 'Read More' ", "url"=>"http://forum.casheer.net/viewtopic.php?f=15&t=16");
$data[] = array("id"=>30, "title"=>"Big News: BlackCoin is now supported on Genesis1 ATMS! Woo!! Another big step forward!' ", "url"=>"https://twitter.com/genesiscoin/status/501175666839011328");
$data[] = array("id"=>31, "title"=>"Big News: BlackCoin mentioned in Andreas Antonopoulos's New Book. Check it out on GitHub' ", "url"=>"https://github.com/aantonop/bitcoinbook/blob/develop/ch09.asciidoc");
$data[] = array("id"=>32, "title"=>"News: First BlackCoin trading pair added to Bittrex, trade DIRAC for BLK -- First of many' ", "url"=>"https://bittrex.com/Market/Index?MarketName=BC-XDQ");
$data[] = array("id"=>33, "title"=>"News: We did it! BlackCoin to be added into the Casheer platform! Great job community!' ", "url"=>"http://forum.casheer.net/viewtopic.php?f=24&t=55");
$data[] = array("id"=>34, "title"=>" HUGE News: BLACKCOIN MARKETS ARE LIVE ON BITTREX! FASTER ARBITRAGE AND BETTER TRADING! Heres to the next 6months! Cheers! ", "url"=>"http://www.bittrex.com");
$data[] = array("id"=>35, "title"=>" CoinTelegraph: 'Blackcoin First PoS Coin on Genesis 1 ATM' ", "url"=>"http://cointelegraph.com/news/112301/blackcoin-first-pos-coin-on-genesis-1-atm");
$data[] = array("id"=>36, "title"=>" Best News Day Ever: 'New Wallet UI Release for BlackCoin QT (OSX,Linux,Windows) Now with multiple themes! ", "url"=>"https://twitter.com/CoinBlack/status/501807050700369920");
$data[] = array("id"=>37, "title"=>" Alert: BlackCoin Music Video Teaser Now Live! Be sure to subscribe to NightBarkMusic for full release! ", "url"=>"https://www.youtube.com/watch?v=rxIkT1bCqi8");
$data[] = array("id"=>38, "title"=>" Alert: BlackCoin Music Video Now Live! Be sure to subscribe to NightBarkMusic", "url"=>"https://www.youtube.com/watch?v=Zl6DizyZgFY");
$data[] = array("id"=>39, "title"=>" Alert: HelioPay (Vizique's Company) to give presentation on BlackCoin/Bitcoin payment terminals in South of France", "url"=>"http://www.reddit.com/r/blackcoin/comments/2ejy1c/monday_update_highprofile_event_in_the_south_of/");
$data[] = array("id"=>40, "title"=>" News: With the help of ExpressCoin, US customers can now manage/buy BlackCoin right from their Android Devices", "url"=>"https://play.google.com/store/apps/details?id=com.expresscoin.expresscoin");
$data[] = array("id"=>41, "title"=>" Alert: Donate to help Gritt attend Huobi Special Invite and for Shanghai Conference", "url"=>"http://blkfeed.com/topic/190/get-gritt-to-huobi-s-1-year-anniversary-and-bitcoin-expo-china-2014-urgent-1-week-to-fund");
$data[] = array("id"=>42, "title"=>" News: BlackCast was revived! If you missed it live click here to watch a recording. ", "url"=>"https://www.youtube.com/watch?v=fBjhXYkHgWk");
$data[] = array("id"=>43, "title"=>" Thanks: Big Thanks to Moolah CEO Alex for donating the remainder of BTC needed to get Gritt to China for Huobi and Conference", "url"=>"https://www.moolah.io");
$data[] = array("id"=>44, "title"=>" News: BlackCoin is looking for Mobile iOS/Android Developers for a BlackCoin Wallet set. Inquire within", "url"=>"http://blkfeed.com/topic/199/blackcoin-is-looking-for-mobile-developers");
$data[] = array("id"=>45, "title"=>" Alert: Gritt (International PR for BLKFoundation) is now attending the Huobi Anniv Party as Guest of Honor, OKCoin Network Party, as well as the Shanghai Conference. Gritts Chinese Takeover begins!", "url"=>"https://twitter.com/BlackcoinGritt/status/506830373943144449");
$data[] = array("id"=>46, "title"=>" Alert: Paypal Startup Relations Head/BrainTree Payments looking at BlackHalo/BitHalo", "url"=>"https://twitter.com/schwentker/status/508768432754393088");
$data[] = array("id"=>47, "title"=>" News: Community Member/Sir Jabulon to interview on BlogTalkRadio Sept 17th regarding BlackCoin", "url"=>"http://www.blogtalkradio.com/garrettmiller/2014/09/17/david-cohen-blackcoin-music-concept-and-so-much-more-live");
$data[] = array("id"=>48, "title"=>" CoinTelegraph (Partner): NXT, Blackcoin and Others Shooting To Take Over Sports", "url"=>"http://cointelegraph.com/news/112484/nxt-blackcoin-and-others-shooting-to-take-over-sports");
$data[] = array("id"=>49, "title"=>" News: New versions of BlackHalo and BitHalo are out! Download them now.", "url"=>"https://twitter.com/CoinBlack/status/510252699917766656");
$data[] = array("id"=>50, "title"=>" News:We hit 20,000,000 network weight during VirtualFaqs stake challenge. Bravo!.", "url"=>"http://www.reddit.com/r/blackcoin/comments/2g8ojc/congrats_we_hit_20000000_network_weight/");
$data[] = array("id"=>51, "title"=>" News: Anycoin Direct added payment methods Giropay and PaysafeCard! You can now buy Blackcoin with iDEAL, Bancontact, Giropay, Paysafecard and SEPA!", "url"=>"https://anycoindirect.eu/news/details/payment-methods-giropay-and-paysafecard-added");
$data[] = array("id"=>52, "title"=>" Alert:BlackCoin added to #COMKORT exchange. Markets #BC
", "url"=>"https://t.co/ESN2bDnhXF");
$data[] = array("id"=>53, "title"=>" Alert: You can now buy Hashlets at PrimeHashlets.com with BlackCoin!
", "url"=>"http://blkfeed.com/topic/221/primehashlets-com-your-1-source-for-hashlets/2");
$data[] = array("id"=>54, "title"=>"CryptoArticles (Partner): BLACKCOIN PRICE EXPLODES IN CHINA, BITHALO RELEASED AND MORE!", "url"=>"http://www.cryptoarticles.com/crypto-news/blackcoin-price-explodes-in-china-bithalo-released-and-more");
$data[] = array("id"=>55, "title"=>"BitcoinWarrior: A Talk with David Zimbeck: Bitcoin 2.0 with BitHalo, BlackHalo, and NightTrader", "url"=>"http://bitcoinwarrior.net/2014/09/talk-david-zimbeck-bitcoin-2-0-bithalo-blackhalo-nighttrader/");
$data[] = array("id"=>56, "title"=>"News: Blackcoin to be added as a trading pair with RZR and BTC on a new exchange by BlockTech -- AltMarket.com", "url"=>"https://twitter.com/altmarketdotcom/status/512125436990849024");
$data[] = array("id"=>57, "title"=>"Alert: Vizique shares his ventures at the InsideBitcoins conference thus far.", "url"=>"http://www.reddit.com/r/blackcoin/comments/2ghgct/spare_some_bcbtc_and_lets_get_viqizue_to_the_coin/ckkpjsu");
$data[] = array("id"=>58, "title"=>"Alert: BlackCoin to be added to Danish Exchange CCEDK (that's 3 in 2 weeks ^.^)", "url"=>"https://bitcointalk.org/index.php?topic=785915.msg8857499#msg8857499");
$data[] = array("id"=>59, "title"=>"Alert: If you missed it live check out Jabulon on BlogTalkRadio talking about BlackCoin.", "url"=>"http://www.blogtalkradio.com/garrettmiller/2014/09/17/david-cohen-blackcoin-music-concept-and-so-much-more-live.mp3?localembed=download");




// Hey McKie, please remember to put the protocol (http/ https) in front of the URL. Else the link won't work =)
//Bad habit haha. Whoops.

// Hi McKie, I've changed file.

echo json_encode($data);
?>