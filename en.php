<?php

if (isset($_POST["submit"])) {

	// 1. Sanitization
	$prenomsani = filter_var($_POST["Nom"], FILTER_SANITIZE_STRING);

	$prenomIsempty = empty($prenomsani);

	$emailIsSani = filter_var($_POST["Email"], FILTER_SANITIZE_EMAIL);

	$emailIsempty = empty($emailIsSani);

	$emailIsValid = filter_var($emailIsSani, FILTER_VALIDATE_EMAIL);

	$tachesani = filter_var($_POST['Message'], FILTER_SANITIZE_STRING);

	$tacheIsempty = empty($tachesani);

	// 2. Validation

	if ($prenomIsempty == false) {

		if ($emailIsempty == false && $emailIsValid == true) {

			if ($tacheIsempty == false) {

				// 3. Exécution

				$to = "verslalune.fr@gmail.com";

				$subject = 'Message de mon site internet';

				$headers = 'Mime-Version: 1.0'."\r\n";

				$headers .= 'Content-type: text/html; charset=utf-8'."\r\n";

				$headers .= "\r\n";

				$message  = 'De: ' . $prenomsani . "<br />";

				$message .= 'Email: ' . $emailIsValid . "<br />";

				$message .= "Message:<br />" . $tachesani . "<br />";

				$envoi = mail($to, $subject, $message, $headers);

			}

		}

	}

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-109857601-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-109857601-1');
	</script>

	<link rel="shortcut icon" type="image/x-icon" href="Images/favicon.ico">

	<title>Vers la Lune</title>

	<meta charset="UTF-8">
	<meta name="description" content="Vers la Lune est un site de vulgarisation et de ré-information sur le monde de la crypto-monnaie, fondé par Geoffrey M, afin d'aider la communauté francophone des crypto-monnaies. En réunissant les informations nécessaires aux nouveaux venus et en créant de la dissonance cognitive pour contrer la propagande des médias dominants.">
	<meta name="keywords" content="bitcoin, altcoin, ethereum, litecoin, zcash, crypto-monnaie, cryptomonnaie, tradeur, mineur, information, graphique, ico, a propos, contact, lune, moon">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style>

	body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
	body, html {
		height: 100%;
		color: black;
		line-height: 1.8;
	}

	/* Create a Parallax Effect */
	.bgimg-1, .bgimg-2, .bgimg-3 {
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}

	/* First image */
	.bgimg-1 {
		background-image: url('Images/btcttm.jpg');
		min-height: 100%;
	}

	/* Second image */
	.bgimg-2 {
		background-image: url("Images/btcttm.jpg");
		min-height: 50%;
	}

	.w3-wide {letter-spacing: 10px;}
	.w3-hover-opacity {cursor: pointer;}

	/* Turn off parallax scrolling for tablets and phones */
	@media only screen and (max-device-width: 1024px) {
		.bgimg-1, .bgimg-2 {
			background-attachment: scroll;
		}
	}

	</style>

</head>
<body>

	<!-- Navbar (sit on top) -->
	<div class="w3-top">

	  <div class="w3-bar w3-orange w3-greyscale-min">

		<a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-text-white" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
		<a href="#accueil" class="w3-bar-item w3-button w3-hover-text-white"><i class="fa fa-rocket"></i> VERS LA LUNE</a>
		<a href="#cryptomonnaie" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-bitcoin"></i> CRYPTOCURRENCY</a>
		<a href="#trading" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-balance-scale"></i> TRADING</a>
		<a href="#minage" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-plug"></i> BLASTING</a>
		<a href="#information" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-info"></i> INFORMATION</a>
		<a href="#graphique" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-line-chart"></i> GRAPHIC</a>
		<a href="#ico" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-bomb"></i> ICO</a>
		<a href="#apropos" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-question"></i> ABOUT ME</a>
		<a href="#contact" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white"><i class="fa fa-envelope"></i> CONTACT</a>
		<a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-text-white">FR</a>

	  </div>

	  <div class="w3-bar w3-yellow w3-greyscale-min">

		<a href="https://cex.io" target="_blank"><img src="https://cex.io/widget/dark/240/btc-eur" width="100" height="40" style="margin: 2px 0 2px 30px;" class="w3-hide-small"></a>
		<a href="https://cex.io" target="_blank"><img src="https://cex.io/widget/dark/240/btc-usd" width="100" height="40" style="margin: 2px 0 2px 60px;" class="w3-hide-small"></a>

	  </div>

	  <!-- Navbar on small screens -->
	  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">

	  	<a href="#cryptomonnaie" class="w3-bar-item w3-button" onclick="toggleFunction()">CRYPTOCURRENCY</a>
		<a href="#trading" class="w3-bar-item w3-button" onclick="toggleFunction()">TRADING</a>
		<a href="#minage" class="w3-bar-item w3-button" onclick="toggleFunction()">BLASTING</a>
		<a href="#information" class="w3-bar-item w3-button" onclick="toggleFunction()">INFORMATION</a>
		<a href="#graphique" class="w3-bar-item w3-button" onclick="toggleFunction()">GRAPHIC</a>
		<a href="#ico" class="w3-bar-item w3-button" onclick="toggleFunction()">ICO</a>
		<a href="#apropos" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT ME</a>
		<a href="#contact" class="w3-bar-item w3-button" onclick="toggleFunction()">CONTACT</a>
		<a href="index.php" class="w3-bar-item w3-button" onclick="toggleFunction()">FR</a>
		<a href="https://cex.io" target="_blank"><img src="https://cex.io/widget/dark/240/btc-eur" width="100" height="38" style="margin: 2px;"></a>
		<a href="https://cex.io" target="_blank"><img src="https://cex.io/widget/dark/240/btc-usd" width="100" height="38" style="margin: 2px;"></a>

	  </div>

	</div>

	<!-- First Parallax -->
	<div class="bgimg-1 w3-display-container" id="accueil">

	  <div class="w3-display-middle" style="white-space:nowrap; margin-top: 40px;">

		<h1 class="w3-center w3-padding-large w3-yellow w3-greyscale-min w3-xlarge w3-wide"><i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</h1>

	  </div>

	  <div class="w3-display-bottommiddle" style="white-space:nowrap; margin-bottom: 40px;">

		<a href="#cryptomonnaie" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-bitcoin"></i> CRYPTOCURRENCY <i class="fa fa-caret-down"></i></a>

	  </div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-green w3-padding-16 w3-text-black" id="cryptomonnaie">

		<h3 class="w3-center"><i class="fa fa-bullhorn w3-hover-text-grey"></i> PUSH FOWARD</h3>

		<p class="w3-center w3-large">A cryptocurrency, an info, a forecast graph and an ICO<br>Highlight by <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-bitcoin w3-hover-text-grey"></i><br><a href="https://www.ethereum.org/" target="_blank">ethereum.org</a></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-info w3-hover-text-grey"></i><br><a href="https://coinlist.me/fr/10-raisons-acheter-ethereum-2018" target="_blank">coinlist.me</a></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-line-chart w3-hover-text-grey"></i><br><a href="https://www.tradingview.com/chart/ETHBTC/70K0x1Ek-ETHBTC/" target="_blank">tradingview.com</a></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-bomb w3-hover-text-grey"></i><br><a href="https://www.theabyss.com/fr" target="_blank">theabyss.com</a></p>

		</div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

		<h2 class="w3-center"><i class="fa fa-bitcoin w3-hover-text-grey"></i> CRYPTOCURRENCY</h2>

		<h3 class="w3-center w3-large"><em>What is a cryptocurrency ?</em></h3>

		<div class="w3-row w3-padding-50">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">A cryptocurrency, cryptocurrency or cryptographic currency is an electronic money on a peer-to-peer or decentralized computer network based on the principles of cryptography to validate transactions and issue the currency itself. Today, all cryptocurrencies are alternative currencies because they have no legal tender in any country. Cryptocurrencies use a proof of work system to protect them from electronic counterfeiting. Many cryptocurrencies have been developed but most are similar and derive from the first full implementation: Bitcoin (BTC).<br><a href="https://fr.wikipedia.org/wiki/Crypto-monnaie" target="_blank">wikipedia.org</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 80px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 80px;">

				<img src="Images/btclo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="bitcoin logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 80px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/btclo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="bitcoin logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">A site that references cryptocurrencies, for example<br><a href="https://coinmarketcap.com/" target="_blank">coinmarketcap.com</a></p>

		<p class="w3-large w3-padding-large">A site holding the agenda of cryptocurrencies, for example<br><a href="https://coinmarketcal.com/" target="_blank">coinmarketcal.com</a></p>

		<h3 class="w3-center w3-large"><em>Who created Bitcoin ?</em></h3>

		<div class="w3-row w3-padding-50">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">Satoshi Nakamoto is the pseudonym of the unknown founder of bitcoin and the first blockchain. He was being a Japanese born April 5, 1975, he ignores about whether it is about a person or a group of people, and his Japanese origin is because of the quality of his English and the lack total of Japanese publications. He is also the creator of the bitcointalk forum. He owns a million bitcoins. In December 2017, the value of bitcoin is close to $ 20,000, a fortune and an estimate of $ 19.4 billion, the 44th worldwide.<br><a href="https://fr.wikipedia.org/wiki/Satoshi_Nakamoto" target="_blank">wikipedia.org</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 60px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 60px;">

				<img src="Images/anlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="satoshi logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 60px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/anlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="satoshi logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<br>

		<h3 class="w3-center w3-large"><em>How to use cryptocurrencies ?</em></h3>

		<p class="w3-center w3-large">The cryptocurrency base is to have a wallet</p>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">1. Cryptocurrency portfolios, online, in local, physical or paper, each accepting different cryptocurrencies. Online portfolios allow you to receive, send, store (good security), and often buy and sell your cryptocurrencies.<br>verslalune.fr</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 10px;">

				<img src="Images/cowalo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="coinbase logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/cowalo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="coinbase logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">An online wallet site (Bitcoin, Ethereum, Litecoin, ...), for example<br><a href="https://www.coinbase.com/" target="_blank">coinbase.com</a> / affiliate link <a href="https://www.coinbase.com/join/59fb8ab3dd8ddd011c95ccee" target="_blank">coinbase.com</a></p>


		<p class="w3-large w3-padding-large">A site that references cryptocurrency portfolios, for example<br><a href="https://www.cryptocompare.com/wallets/#/overview" target="_blank">cryptocompare.com</a></p>


		<h3 class="w3-center w3-large"><em>Are there distributors of cryptocurrencies ?</em></h3>


		<p class="w3-large w3-padding-large">A site that references cryptocurrency distributors, for example<br><a href="https://coinatmradar.com/" target="_blank">coinatmradar.com</a></p>

		<h3 class="w3-center w3-large"><em>Which business accepts cryptocurrencies ?</em></h3>

		<p class="w3-large w3-padding-large">A site that references businesses accepting cryptocurrencies, for example<br><a href="https://coinmap.org/" target="_blank">coinmap.org</a></p>

		<h3 class="w3-center w3-large"><em>How to track my transactions in cryptocurrencies ?</em></h3>

		<p class="w3-large w3-padding-large">A site that allows you to track your cryptocurrency transactions, for example<br><a href="https://live.blockcypher.com/" target="_blank">live.blockcypher.com</a></p>

		<h3 class="w3-center w3-large"><em>Legality and cryptocurrencies ?</em></h3>

		<p class="w3-large w3-padding-large">A site that references the legality of cryptocurrencies, for example<br><a href="http://bitlegal.io/" target="_blank">bitlegal.io</a></p>

		<h3 class="w3-center w3-large"><em>Are there any cryptocurrency casinos?</em></h3>

		<p class="w3-large w3-padding-large">A site offering a cryptocurrency casino, for example<br><a href="https://www.bitsler.com/" target="_blank">bitsler.com</a></p>

		<p class="w3-center w3-large">To deepen the subject, some tracks:<br>blockchain, nodes, keys,<br>proofs, smart contracts, tokens,<br>faucets</p>

		<div class="w3-row w3-padding-50">

			<div class="w3-col m6 w3-padding-large">

				<h3 class="w3-center w3-large"><b>White list of <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</b></h3>

				<p class="w3-center w3-large">-<a href="https://bitcoin.org/fr/" target="_blank">bitcoin.org</a><br>-<a href="https://litecoin.org/fr/" target="_blank">litecoin.org</a><br>-<a href="https://www.ethereum.org/" target="_blank">ethereum.org</a><br>-<a href="https://www.cardano.org/en/home/" target="_blank">cardano.org</a><br>-<a href="https://z.cash/fr/" target="_blank">z.cash</a><br>-<a href="https://getmonero.org/" target="_blank">getmonero.org</a></p>

			</div>

			<div class="w3-col m6 w3-padding-large">

				<h3 class="w3-center w3-large"><b>Black list of <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</b></h3>

				<p class="w3-center w3-large">-onecoin.eu<br>-bitconnect.co</p>

			</div>

		</div>

		<br>

		<div class="w3-center">

			<a href="#trading" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-balance-scale"></i> TRADING <i class="fa fa-caret-down"></i></a>

		</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-yellow w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-bitcoin w3-hover-text-grey"></i> SKILLS</h3>

		<p class="w3-center w3-large">Main competences of cryptocurrencies</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-globe w3-hover-text-grey"></i><br>Decentralized</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-shield w3-hover-text-grey"></i><br>Security</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-space-shuttle w3-hover-text-grey"></i><br>Speed</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-drivers-license w3-hover-text-grey"></i><br>Anonymity</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Satoshi Nakamoto</h3>

		<p class="w3-center w3-large"><em>"with electronic money based on cryptographic proof,<br>money can be secured and transactions effortless."</em><br><a href="http://p2pfoundation.ning.com/forum/topics/bitcoin-open-source" target="_blank">p2pfoundation.ning.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="trading">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-yellow w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-balance-scale w3-hover-text-grey"></i> Trading</h1>

	  </div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-red w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-warning w3-hover-text-grey"></i> WARNING-CRAZY</h3>

		<p class="w3-center w3-large"><em>Trading involves risks, only invest the money you are able to lose !</em></p>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

		<h2 class="w3-center"><i class="fa fa-balance-scale w3-hover-text-grey"></i> TRADING</h2>

		<h3 class="w3-center w3-large"><em>What is a trader ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">A market operator or financial operator, more commonly known as a tradesman, is a financial product trader. He intervenes on the organized or over-the-counter markets. Financial operators are often gathered at the front office, in the trading room of an investment bank or an asset management company. Some of them are entitled to deal outside the room and outside office hours. However, some individuals become independent operators, intervening on the markets from home by means of an Internet connection.<br><a href="https://fr.wikipedia.org/wiki/Op%C3%A9rateur_de_march%C3%A9" target="_blank">wikipedia.org</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 70px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 70px;">

				<img src="Images/trlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="trader logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 70px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/trlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="trader logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<br>

		<h3 class="w3-center w3-large"><em>How to trade cryptocurrencies ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">1. Cryptocurrency portfolios, online, in local, physical or paper, each accepting different cryptocurrencies. Online portfolios allow you to receive, send, store (good security), and often buy and sell your cryptocurrencies.<br>verslalune.fr</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 10px;">

				<img src="Images/cowalo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="coinbase logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/cowalo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="coinbase logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">An online wallet site (Bitcoin, Ethereum, Litecoin, ...), for example<br><a href="https://www.coinbase.com/" target="_blank">coinbase.com</a> / affiliate link <a href="https://www.coinbase.com/join/59fb8ab3dd8ddd011c95ccee" target="_blank">coinbase.com</a></p>

		<p class="w3-large w3-padding-large">A site that references cryptocurrency portfolios, for example<br><a href="https://www.cryptocompare.com/wallets/#/overview" target="_blank">cryptocompare.com</a></p>

		<div class="w3-row w3-padding-50">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-center w3-large"><i class="fa fa-long-arrow-up w3-hover-text-grey"></i></p>

			</div>

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-center w3-large"><i class="fa fa-long-arrow-down w3-hover-text-grey"></i></p>

			</div>

		</div>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">2. Exchanges of cryptocurrencies, of different volumes, each accepting different cryptocurrencies. Trading places allow to receive, send, store (bad security), and sometimes to buy and sell your cryptocurrencies.<br>verslalune.fr</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 10px;">

				<img src="Images/biexl.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="binance logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/biexl.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="binance logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">A site offering a place of exchange (more than 100 cryptocurrencies), for example<br><a href="https://www.binance.com/" target="_blank">binance.com</a> / affiliate link <a href="https://www.binance.com/?ref=20271122" target="_blank">binance.com</a></p>

		<p class="w3-large w3-padding-large">A site that references cryptocurrency exchanges, for example<br><a href="https://www.cryptocompare.com/exchanges/#/overview" target="_blank">cryptocompare.com</a></p>

		<h3 class="w3-center w3-large"><em>Is it possible to train in cryptocurrency trading ?</em></h3>

		<p class="w3-large w3-padding-large">A site offering training in cryptocurrency trading, for example<br><a href="https://www.cryptocompare.com/" target="_blank">cryptocompare.com</a></p>

		<h3 class="w3-center w3-large"><em>Is it possible to train in cryptocurrency trading ?</em></h3>

		<p class="w3-large w3-padding-large">A site offering to train in cryptocurrency trading, for example<br><a href="https://formationaltcoin.com/" target="_blank">formationaltcoin.com</a></p>

		<p class="w3-center w3-large">To deepen the subject, some tracks:<br>Trading short, medium, long-term,<br>forks, foreign exchange arbitrage, leverage,<br>short selling, fundamental analysis</p>

		<br>

		<h3 class="w3-center w3-large"><b>Tips from <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</b></h3>

		<p class="w3-center w3-large">-Buy when it drops<br>-Sell when it goes up<br>-Do not sell directly after a bad purchase, wait<br>-Do not trade without information<br>-Do not trade without a graph</p>

		<br>

		<div class="w3-center">

			<a href="#minage" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-plug"></i> BLASTING <i class="fa fa-caret-down"></i></a>

		</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-yellow w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-balance-scale w3-hover-text-grey"></i> STEPS</h3>

		<p class="w3-center w3-large">Main steps for trader</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-folder-open w3-hover-text-grey"></i><br>Wallet</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-bank w3-hover-text-grey"></i><br>Exchange place</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-info w3-hover-text-grey"></i><br>Information</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-line-chart w3-hover-text-grey"></i><br>Graphic</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Bill Gates</h3>

		<p class="w3-center w3-large"><em>"Bitcoin is "better than money"."</em><br>
		<a href="https://www.entrepreneur.com/article/238103" target="_blank">entrepreneur.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="minage">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-yellow w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-plug w3-hover-text-grey"></i> Blasting</h1>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

		<h2 class="w3-center"><i class="fa fa-plug w3-hover-text-grey"></i> BLASTING</h2>

		<h3 class="w3-center w3-large"><em>What is cryptocurrency mining ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">When a transaction is issued, it is transmitted and validated by the computers that make up the network. This validation is a calculation for the completion of which any person can propose his computer to participate in the resolution of the calculations. Once a transaction is validated, each computer that participated in its validation is allocated a certain amount of electronic money, in proportion to its participation in the calculation.<br><a href="https://fr.wikipedia.org/wiki/Crypto-monnaie" target="_blank">wikipedia.org</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 30px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 30px;">

				<img src="Images/milo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="minage logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 30px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/milo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="minage logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<h3 class="w3-center w3-large"><em>How to mine cryptocurrencies ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">1. Cryptocurrency portfolios, online, in local, physical or paper, each accepting different cryptocurrencies. Online portfolios allow you to receive, send, store (good security), and often buy and sell your cryptocurrencies.<br>verslalune.fr</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 10px;">

				<img src="Images/crlo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="crypto logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/crlo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="crypto logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">An online wallet site (more than 10 cryptocurrencies), for example<br><a href="https://fr.cryptonator.com/" target="_blank">cryptonator.com</a> / affiliate link <a href="https://fr.cryptonator.com/auth/signup/101577394" target="_blank">cryptonator.com</a></p>

		<p class="w3-large w3-padding-large">A site that references cryptocurrency portfolios, for example<br><a href="https://www.cryptocompare.com/wallets/#/overview" target="_blank">cryptocompare.com</a></p>

		<div class="w3-row w3-padding-50">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-center w3-large"><i class="fa fa-long-arrow-up w3-hover-text-grey"></i></p>

			</div>

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-center w3-large"><i class="fa fa-long-arrow-down w3-hover-text-grey"></i></p>

			</div>

		</div>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">2. Cryptocurrency mining companies, through contracts, offer to rent at different prices and time periods, to mine different cryptocurrencies, via their premises, equipment and electricity suppliers. It's the easiest way to mine. (the material is theirs)<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 10px;">

				<img src="Images/cmlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="ferme logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/cmlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="ferme logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">A site offering mining contracts, for example<br><a href="https://www.just-mining.com/" target="_blank">just-mining.com</a> / affiliate link <a href="https://www.just-mining.com/register/XRhEzBxd4f18GHYrxz5AawdPz" target="_blank">just-mining.com</a></p>

		<p class="w3-large w3-padding-large">A site that references mining contracts, for example<br><a href="https://www.cryptocompare.com/mining/#/contracts" target="_blank">cryptocompare.com</a></p>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">2. Individuals mine different cryptocurrencies, alone, or in groups via their own premises, equipment and electricity suppliers. It is the most profitable to mine. (the material is yours)<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 10px;">

				<img src="Images/mirilo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="rig logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/mirilo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="rig logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">A site offering mining equipment, for example<br><a href="https://www.just-mining.com/" target="_blank">just-mining.com</a> / affiliate link <a href="https://www.just-mining.com/register/XRhEzBxd4f18GHYrxz5AawdPz" target="_blank">just-mining.com</a></p>

		<p class="w3-large w3-padding-large">A site that references the sellers of mining equipment, for example<br><a href="https://www.cryptocompare.com/mining/#/equipment" target="_blank">cryptocompare.com</a></p>

		<h3 class="w3-center w3-large"><em>How to find the mining groups ?</em></h3>

		<p class="w3-large w3-padding-large">A site that references mining groups, for example<br><a href="https://www.cryptocompare.com/mining/#/pools" target="_blank">cryptocompare.com</a></p>

		<h3 class="w3-center w3-large"><em>How to calculate mining ?</em></h3>

		<p class="w3-large w3-padding-large">A site to calculate mining, for example<br><a href="https://www.coinwarz.com/cryptocurrency" target="_blank">coinwarz.com</a></p>

		<p class="w3-center w3-large">To deepen the subject, some tracks:<br>Rig, GPU, ASIC</p>

		<br>

		<div class="w3-center">

			<a href="#information" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-info"></i> INFORMATION <i class="fa fa-caret-down"></i></a>

		</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-yellow w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-plug w3-hover-text-grey"></i> PROFITABILITY</h3>

		<p class="w3-center w3-large">Key points for calculating profitability</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-arrows-v w3-hover-text-grey"></i><br>Place</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-arrows-v w3-hover-text-grey"></i><br>Electricity</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-arrows-v w3-hover-text-grey"></i><br>Equipment</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-arrows-v w3-hover-text-grey"></i><br>Cryptocurrency</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Peter Thiel</h3>

		<p class="w3-center w3-large"><em>"I really think that Bitcoin is the first cryptocurrency<br>that has the potential to change the world."</em><br>
		<a href="https://www.wikiberal.org/wiki/Bitcoin" target="_blank">wikiberal.org</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="information">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-yellow w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-info w3-hover-text-grey"></i> Information</h1>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

	  <h2 class="w3-center"><i class="fa fa-info w3-hover-text-grey"></i> INFORMATION</h2>

	  <h3 class="w3-center w3-large"><em>Why tell me about cryptocurrencies ?</em></h3>

	  <p class="w3-center w3-large">Information is power !<br>Anonymous</p>

	  <h3 class="w3-center w3-large"><em>How can I find out about cryptocurrencies ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">1. Specialized information sites on the world of cryptocurrencies, more or less generalist, are numerous on the internet.<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 5px;">

				<img src="Images/cotelo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="cointelegraph logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

				<img src="Images/cotelo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="cointelegraph logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">A specialized information site, for example<br><a href="https://cointelegraph.com/" target="_blank">cointelegraph.com</a></p>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">2. Specialized forums on the world of cryptocurrencies, more or less general, are numerous on the internet.<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 5px;">

				<img src="Images/bitalo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="bitcointalk logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

				<img src="Images/bitalo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="bitcointalk logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">A specialized forum, for example<br><a href="https://bitcointalk.org/" target="_blank">bitcointalk.org</a></p>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">3. Social networks, they allow to follow all the actors of the world of cryptocurrencies, more or less recognized by the cryptocurrency community. It's the easiest, you'll find market prices, information, public opinion opinions and more.<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 5px;">

				<img src="Images/twlo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="Twitter logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 5px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

				<img src="Images/twlo.png" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="Twitter logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 5px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">A player in the world of cryptocurrencies on social networks, for example<br><a href="https://twitter.com/whale_tamer" target="_blank">twitter.com/whale_tamer</a></p>

		<h3 class="w3-center w3-large"><em>Are there information sessions on cryptocurrencies ?</em></h3>

		<p class="w3-large w3-padding-large">A site offering information sessions on cryptocurrencies, for example<br><a href="https://lamaisondubitcoin.fr/" target="_blank">lamaisondubitcoin.fr</a></p>

		<h3 class="w3-center w3-large"><em>Are there associations on cryptocurrencies ?</em></h3>

		<p class="w3-large w3-padding-large">A site of an association on cryptocurrencies, for example<br><a href="https://lecercleducoin.fr/" target="_blank">lecercleducoin.fr</a></p>

		<h3 class="w3-center w3-large"><em>Are there private cryptocurrency clubs ?</em></h3>

		<p class="w3-large w3-padding-large">A site offering a private cryptocurrency club, for example<br><a href="http://coinmunity.fr/" target="_blank">coinmunity.fr</a></p>

		<h3 class="w3-center w3-large"><b>Information Source Lists<br>highlighted by <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</b></h3>

		<div class="w3-row-padding w3-center w3-section w3-large">

			<div class="w3-col m4">

				<p><b>Website information</b></p>

				<a href="https://cointelegraph.com/" target="_blank">cointelegraph.com</a><br><a href="https://www.coindesk.com/" target="_blank">coindesk.com</a>

			</div>

	   		 <div class="w3-col m4">

	   		 	<p><b>Forums</b></p>

	     	 	<a href="https://bitcointalk.org/" target="_blank">bitcointalk.org</a><br><a href="https://www.reddit.com/r/Bitcoin/" target="_blank">reddit.com</a>

	    	</div>

	    	<div class="w3-col m4">

	    		<p><b>Social networks</b></p>

	      		<a href="https://twitter.com/whale_tamer" target="_blank">twitter.com/whale_tamer</a><br>
	      		<a href="https://twitter.com/PowerHasheur" target="_blank">twitter.com/PowerHasheur</a><br>
	      		<a href="https://twitter.com/LangueDeGeek" target="_blank">twitter.com/LangueDeGeek</a><br>
	      		<a href="https://twitter.com/cryptobref" target="_blank">twitter.com/cryptobref</a><br>
	      		<a href="https://twitter.com/CryptonationFR" target="_blank">twitter.com/CryptonationFR</a><br>
	      		<a href="https://twitter.com/CryptoEncyclo" target="_blank">twitter.com/CryptoEncyclo</a><br>
	      		<a href="https://twitter.com/BaleineFR" target="_blank">twitter.com/BaleineFR</a><br>
	      		<a href="https://twitter.com/CryptoFR" target="_blank">twitter.com/CryptoFR</a><br>
	      		<a href="https://twitter.com/CryptoActuFr" target="_blank">twitter.com/CryptoActuFr</a><br>
	      		<a href="https://twitter.com/CryptoTempsReel" target="_blank">twitter.com/CryptoTempsReel</a><br>
	      		<a href="https://twitter.com/bycoin24" target="_blank">twitter.com/bycoin24</a><br>
	      		<a href="https://twitter.com/blogbitcoinfr" target="_blank">twitter.com/blogbitcoinfr</a><br>
	      		<a href="https://twitter.com/CryptoAnalyseFr" target="_blank">twitter.com/CryptoAnalyseFr</a><br>
	      		<a href="https://twitter.com/LeJournalDuCoin" target="_blank">twitter.com/LeJournalDuCoin</a>

	    	</div>

		</div>

	  	<br>

	  	<div class="w3-center">

			<a href="#graphique" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-line-chart"></i> GRAPHIC <i class="fa fa-caret-down"></i></a>

	  	</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-yellow w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-info w3-hover-text-grey"></i> VERIFICATION</h3>

		<p class="w3-center w3-large">Key points for verifying information</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-calendar w3-hover-text-grey"></i><br>Dated</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-newspaper-o w3-hover-text-grey"></i><br>Source</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-inbox w3-hover-text-grey"></i><br>Contained</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-map-signs w3-hover-text-grey"></i><br>Crosscheck</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Roger Ver</h3>

		<p class="w3-center w3-large"><em>"Bitcoin is the most important invention in the history of the world since the Internet."</em><br>
		<a href="https://steemit.com/bitcoin/@adwike/roger-ver-bitcoin-millionaire" target="_blank">steemit.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="graphique">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-yellow w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-line-chart w3-hover-text-grey"></i> Graphic</h1>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

	  <h2 class="w3-center"><i class="fa fa-line-chart w3-hover-text-grey"></i> GRAPHIC</h2>

	  <h3 class="w3-center w3-large"><em>What are the graphics ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">A number of phenomena are modeled in the form of numerical data, and this in many areas: mathematics, physics, economics ... when these data are abundant, their analysis and sharing can be facilitated by a graphical representation.<br><a href="https://fr.wikipedia.org/wiki/Repr%C3%A9sentation_graphique" target="_blank">wikipedia.org</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 10px;">

				<img src="Images/grlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="graphique logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/grlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="graphique logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<br>

		<h3 class="w3-center w3-large"><em>The different graphics ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">1. Simple charts allow you to have the history and the live value of a cryptocurrency. They are present on almost all cryptocurrency sites (wallet, exchange place, ...), also on more professional sites, where it is possible to add useful index tools, for example MACD and RSI .<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 30px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 30px;">

				<img src="Images/chcolo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="graphique simple" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 30px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/chcolo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="graphique simple" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">A simple and professional graphic site, for example<br><a href="https://cryptowat.ch/" target="_blank">cryptowat.ch</a></p>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">2. The forecast graphs allow to see the graphic analysis of traders more or less recognized by the cryptocurrency community. They are present on specialized sites. The forecast graphs are unreliable, caution.<br>verslalune.fr</p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 30px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 30px;">

				<img src="Images/chtvlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="graphique prévisionelle" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 30px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/chtvlo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="graphique prévisionelle" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">A predictive and specialized graphic site, for example<br><a href="https://www.tradingview.com/" target="_blank">tradingview.com</a></p>

		<p class="w3-center w3-large">To deepen the subject, some tracks:<br>technical analysis</p>

		<h3 class="w3-center w3-large"><b>Account list on TradingView<br>highlighted by <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</b></h3>

		<p class="w3-center w3-large">-<a href="https://www.tradingview.com/u/goldbug1/" target="_blank">tradingview.com/u/goldbug1/</a><br>-<a href="https://www.tradingview.com/u/DianKemala/" target="_blank">tradingview.com/u/DianKemala/</a><br>-<a href="https://www.tradingview.com/u/DLavrov/" target="_blank">tradingview.com/u/DLavrov/</a><br>-<a href="https://www.tradingview.com/u/EXCAVO/" target="_blank">tradingview.com/u/EXCAVO/</a><br>-<a href="https://www.tradingview.com/u/Kryptokelly/" target="_blank">tradingview.com/u/Kryptokelly/</a><br>-<a href="https://www.tradingview.com/u/alanmasters/" target="_blank">tradingview.com/u/alanmasters/</a></p>

	  	<br>

	  	<div class="w3-center">

			<a href="#ico" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-bomb"></i> ICO <i class="fa fa-caret-down"></i></a>

	  	</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-yellow w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-line-chart w3-hover-text-grey"></i> USE</h3>

		<p class="w3-center w3-large">Main points for using a graph</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-hourglass-1 w3-hover-text-grey"></i><br>Long temp</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-hourglass-3 w3-hover-text-grey"></i><br>Short temp</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-book w3-hover-text-grey"></i><br>Buy/Sell</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-bar-chart w3-hover-text-grey"></i><br>Index</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> John Donohoe</h3>

		<p class="w3-center w3-large"><em>"[The digital currency is going to be] a very powerful thing."</em><br><a href="https://techcrunch.com/2013/11/03/ebay-ceo-john-donahoe-is-bullish-on-digital-currency-and-hes-keeping-tabs-on-bitcoin/" target="_blank">techcrunch.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="ico">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-yellow w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-bomb w3-hover-text-grey"></i> ICO</h1>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

	  <h2 class="w3-center"><i class="fa fa-bomb w3-hover-text-grey"></i> ICO</h2>

	  <h3 class="w3-center w3-large"><em>What is an ICO ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">An Initial offering corner (ICO) is a fundraising method that operates via the issue of digital assets exchangeable for cryptocurrencies during the start-up phase of a project. These assets, called "tokens" (digital tokens), are issued and exchanged using blockchain technology.<br><a href="https://fr.wikipedia.org/wiki/Initial_coin_offering" target="_blank">wikipedia.org</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 30px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 30px;">

				<img src="Images/ico1lo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="ico logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 30px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/ico1lo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="ico logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<br>

		<h3 class="w3-center w3-large"><em>How to participate in an ICO ?</em></h3>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">1. Cryptocurrency portfolios, online, in local, physical or paper, each accepting different cryptocurrencies. Online portfolios allow you to receive, send, store (good security), and often buy and sell your cryptocurrencies.<br>verslalune.fr</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 20px;">

				<img src="Images/myet.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="myet logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 20px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/myet.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="myet logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<p class="w3-large w3-padding-large">An online wallet site (ERC20), for example<br><a href="https://www.myetherwallet.com/" target="_blank">myetherwallet.com</a></p>

		<p class="w3-large w3-padding-large">A site that references cryptocurrency portfolios, for example<br><a href="https://www.cryptocompare.com/wallets/#/overview" target="_blank">cryptocompare.com</a></p>

		<div class="w3-row w3-padding-50">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-center w3-large"><i class="fa fa-long-arrow-up w3-hover-text-grey"></i></p>

			</div>

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-center w3-large"><i class="fa fa-long-arrow-down w3-hover-text-grey"></i></p>

			</div>

		</div>

		<div class="w3-row">

			<div class="w3-col m6 w3-padding-large">

				<p class="w3-large">2. To participate in an ICO, it is necessary to buy tokens, for this it is necessary to respect the conditions of sale of this one, generally, the countries, the portfolios and the cryptocurrencies that are accepted. ICOs are often failures, caution.<br>verslalune.fr</a></p>

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-small" style="margin-top: 10px;">

				<img src="Images/ico2lo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="ico logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-small" style="margin-top: 10px;">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

			<div class="w3-col m4 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

				<img src="Images/ico2lo.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="ico logo" width="250" height="250">

			</div>

			<div class="w3-col m1 w3-padding-large w3-hide-medium w3-hide-large" style="margin-top: 10px;">

			</div>

		</div>

		<h3 class="w3-center w3-large"><em>How to follow ICO ?</em></h3>

		<p class="w3-large w3-padding-large">To follow the ICO, there is for example<br><a href="https://www.coingecko.com/ico?locale=en" target="_blank">coingecko.com</a></p>

		<h3 class="w3-center w3-large"><em>How to evaluate the potential of ICO ?</em></h3>

		<p class="w3-large w3-padding-large">A site that assesses the potential of ICO, for example<br><a href="http://icorating.com/" target="_blank">icorating.com</a></p>

		<p class="w3-center w3-large">To deepen the subject, some tracks:<br>the airdrops</p>

		<div class="w3-row w3-padding-50">

			<div class="w3-col m6 w3-padding-large">

				<h3 class="w3-center w3-large"><b>White list of <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</b></h3>

				<p class="w3-center w3-large">-<a href="https://www.theabyss.com/fr" target="_blank">theabyss.com</a></p>

			</div>

			<div class="w3-col m6 w3-padding-large">

				<h3 class="w3-center w3-large"><b>Black list of <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</b></h3>

				<p class="w3-center w3-large">-bitconnectx.co</p>

			</div>

		</div>

	  	<br>

	  	<div class="w3-center">

			<a href="#apropos" class="w3-button w3-orange w3-greyscale-min w3-greyscale-min w3-hover-text-white"><i class="fa fa-question"></i> ABOUT ME <i class="fa fa-caret-down"></i></a>

	  	</div>

	</div>

	<!-- About Section -->
	<div class="w3-row w3-center w3-yellow w3-greyscale-min w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-bomb w3-hover-text-grey"></i> POTENTIAL</h3>

		<p class="w3-center w3-large">The main criteria of the potential of an ICO</p>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-smile-o w3-hover-text-grey"></i><br>Popularity</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-group w3-hover-text-grey"></i><br>Team</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-file-powerpoint-o w3-hover-text-grey"></i><br>White paper</p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i class="fa fa-globe w3-hover-text-grey"></i><br>Website</p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Naeem Aslam</h3>

		<p class="w3-center w3-large"><em>"Bitcoin is, perfect for the new technological world."</em><br><a href="https://f-lys.com/2017/08/28/pourquoi-le-prix-du-bitcoin-nest-pas-une-bulle/" target="_blank">f-lys.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="apropos">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-yellow w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-question w3-hover-text-grey"></i> About me</h1>

	  </div>

	</div>

	<!-- Container -->
	<div class="w3-content w3-container w3-padding-64">

	  <h2 class="w3-center"><i class="fa fa-question w3-hover-text-grey"></i> ABOUT ME</h2>

	  <h3 class="w3-center w3-large"><em>What's this <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune ?</em></h3>

	  <p class="w3-center w3-large"><i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune is a <b>popularization</b> and <b>re-information</b> site on the world of <b>cryptocurrency</b>, founded by Geoffrey M, to help <b>francophone community</b> cryptocurrencies. Gathering the necessary information to newcomers and creating cognitive dissonance to counter the propaganda of the mainstream media.</p>

	  <p class="w3-center w3-large"><i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune offers an introduction to the world of cryptocurrency, for more information, we invite you to explore each point on our site.<br>verslalune.fr</p>

	  <div class="w3-row">

		<div class="w3-col m6 w3-center w3-padding-large">

		  <p class="w3-center w3-large">Founder</p>

		</div>

		<div class="w3-col m6 w3-center w3-padding-large">

		  <p class="w3-center w3-large"><b>Geoffrey M</b></p>

		  <img src="Images/wcav.jpg" class="w3-image w3-opacity-min w3-hover-opacity-off" alt="Photoa" style="width: 300px; height: 400px;">

		</div>

	  </div>

	  <br><br>

	  <div class="w3-center">

		<a href="#contact" class="w3-button w3-orange w3-greyscale-min w3-hover-text-white"><i class="fa fa-envelope"></i> CONTACT <i class="fa fa-caret-down"></i></a>

	  </div>

	</div>

	<!-- Don -->
	<div class="w3-center w3-orange w3-padding-16 w3-text-black">

		<h3 class="w3-center"><i class="fa fa-bitcoin w3-hover-text-grey"></i> DONATION</h3>

		<p class="w3-center w3-large">To support <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</p>

		<p class="w3-center w3-large">Bitcoin<br>13Q8PWRttyS2n1rUTNh6ibQp2i7kcFDr3v<br>Ethereum<br>0x218a61ab4db96e769f6f9800c31cfdb8cd900f16<br>Zcash<br>t1UF95rxJyTWLa5ivsQ3m3GfBAoPS3BsoFx</p>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Julian Assange</h3>

		<p class="w3-center w3-large"><em>"all persons and states in love with freedom need Bitcoin."</em><br>
		<a href="https://cointelegraph.com/news/julian-assange-supports-bitcoin-as-ways-to-free-catalonia-from-spains-dictate" target="_blank">cointelegraph.com</a></p>

	</div>

	<!-- Second Parallax -->
	<div class="bgimg-2 w3-display-container" id="contact">

	  <div class="w3-display-middle" style="white-space:nowrap;">

		<h1 class="w3-center w3-padding-large w3-yellow w3-greyscale-min w3-text-black w3-xlarge w3-wide"><i class="fa fa-envelope w3-hover-text-grey"></i> Contact</h1>

	  </div>

	</div>

	<!-- Container  -->
	<div class="w3-content w3-container w3-padding-64">

		<h2 class="w3-center"><i class="fa fa-envelope w3-hover-text-grey"></i> CONTACT</h2>

		<h3 class="w3-center w3-large"><em>How to contact <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune ?</em></h3>

		<p class="w3-center w3-large">By filling out the form below</p>

		<div class="w3-row w3-padding-32 w3-section">

			<div class="w3-col m4 w3-container">

				<!-- Add Google Maps -->
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224389.18760869166!2d-80.7226672121829!3d28.507208924845127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e0a3f2a5fb9a45%3A0x87ef91ee250f8fde!2sCap+Canaveral!5e0!3m2!1sfr!2sbe!4v1510874246163" width="auto" height="266" frameborder="0" style="border:0" class="w3-opacity-min w3-hover-opacity-off" alt="google map" allowfullscreen></iframe>

			</div>

			<div class="w3-col m8 w3-panel">

				<div class="w3-large w3-margin-bottom">

					<i class="fa fa-map-marker fa-fw w3-hover-text-grey w3-xlarge w3-margin-right"></i> Cape Canaveral, Florida<br>
					<i class="fa fa-envelope fa-fw w3-hover-text-grey w3-xlarge w3-margin-right"></i> verslalune.fr@gmail.com

				</div>

				<form action="" method="POST">

					<div class="w3-row-padding" style="margin:0 -16px 8px -16px">

						<div class="w3-half">

							<input class="w3-input w3-border" type="text" placeholder="Nom" name="Nom">

						</div>

						<div class="w3-half">

							<input class="w3-input w3-border" type="text" placeholder="Email" name="Email">

						</div>

					</div>

					<input class="w3-input w3-border" type="text" placeholder="Message" name="Message">

					<button class="w3-button w3-orange w3-greyscale-min w3-right w3-section w3-text-black w3-hover-text-white" type="submit" name="submit">

						<i class="fa fa-paper-plane"></i> SEND

					</button>

				</form>

			</div>

		</div>

	</div>

	<!-- Collaboration -->
	<div class="w3-row w3-center w3-blue w3-text-black w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-handshake-o w3-hover-text-grey"></i> PARTNER</h3>

		<p class="w3-center w3-large">Partners of <i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune</p>

		<div class="w3-quarter w3-large">

			<p><i></i></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i></i></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i></i></p>

		</div>

		<div class="w3-quarter w3-large">

			<p><i></i></p>

		</div>

	</div>

	<!-- Article -->
	<div class="w3-center w3-yellow w3-padding-16">

		<h3 class="w3-center"><i class="fa fa-commenting w3-hover-text-grey"></i> Eric Schmidt</h3>

		<p class="w3-center w3-large"><em>"the ability to create something that is not duplicable in the digital world has tremendous value."</em><br><a href="http://www.newsbtc.com/2014/03/16/google-chairman-eric-schmidt-bitcoin-architecture-amazing-advancement/" target="_blank">newsbtc.com</a></p>

	</div>

	<!-- Footer -->
	<footer class="w3-center w3-yellow w3-greyscale-min w3-padding-64">

	  <a href="#accueil" class="w3-button w3-orange w3-hover-grey w3-text-black w3-hover-text-white"><i class=" fa fa-rocket"></i> VERS LA LUNE <i class="fa fa-caret-up"></i></a>

	  <p class="w3-center w3-large" style="margin-bottom: 0;"><a href="https://twitter.com/VerslaLuneFr" target="_blank"><i class="fa fa-twitter w3-text-blue w3-hover-text-light-grey"></i></a><br><i class="fa fa-laptop w3-hover-text-grey"></i> <i class="fa fa-tablet w3-hover-text-grey"></i> <i class="fa fa-mobile w3-hover-text-grey"></i><br><i class="fa fa-rocket w3-hover-text-grey"></i> Vers la Lune <i class="fa fa-copyright w3-hover-text-grey"></i> 2017-2018</p>

	</footer>
 
	<script>

		// Modal Image Gallery
		function onClick(element) {
		  document.getElementById("img01").src = element.src;
		  document.getElementById("modal01").style.display = "block";
		  var captionText = document.getElementById("caption");
		  captionText.innerHTML = element.alt;
		}

		// Change style of navbar on scroll
		window.onscroll = function() {myFunction()};
		function myFunction() {
			var navbar = document.getElementById("myNavbar");
			if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
				navbar.className = "w3-bar" + " w3-card-2" + " w3-animate-top" + " w3-orange";
			} else {
				navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-orange", "");
			}
		}

		// Used to toggle the menu on small screens when clicking on the menu button
		function toggleFunction() {
			var x = document.getElementById("navDemo");
			if (x.className.indexOf("w3-show") == -1) {
				x.className += " w3-show";
			} else {
				x.className = x.className.replace(" w3-show", "");
			}
		}

	</script>

</body>
</html>