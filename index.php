<?php 
include 'madlib.php' 
?>
<!DOCTYPE html>
<!--[if lte IE 7]>		<html lang="en-GB" class="nojs lte-ie9 lte-ie8 lte-ie7"> <![endif]-->
<!--[if lte IE 8]>		<html lang="en-GB" class="nojs lte-ie9 lte-ie8"> <![endif]-->
<!--[if IE 9]>			<html lang="en-GB" class="nojs lte-ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html lang="en-GB" class="nojs"> <!--<![endif]-->
<head>
	<title>At Bigfork, we believe that adverts are generic…</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="…so we madlib because nobody notices or cares" />
	<meta property="og:title" content="Bigfork Ad Generator" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://ad.bigfork.co.uk/" />
	<link rel="image_src" href="http://ad.bigfork.co.uk/apple-touch-icon.png" type="image/png" />
	<meta property="og:image" content="http://ad.bigfork.co.uk/apple-touch-icon.png" />
	<meta property="og:image:type" content="image/png" />
	<meta property="og:description" content="At Bigfork, we believe that adverts are generic so we madlib because nobody notices or cares." />
	<meta property="og:site_name" content="Bigfork Ad Generator" />
	<meta property="og:locale" content="en_GB" />

	<link href="//www.google-analytics.com" rel="dns-prefetch" />
	<link rel="shortcut icon" href="/favicon.ico" />
	<link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet" type="text/css" />

	<style type="text/css">
	html,
	body {
		min-height: 100%;
	}

	body { 
		position: relative;
		margin: 0;
		padding: 1em;
		background: #cedce7; 
		background: -moz-linear-gradient(top,  #cedce7 0%, #596a72 100%);
		background: -webkit-linear-gradient(top,  #cedce7 0%,#596a72 100%); 
		background: linear-gradient(to bottom,  #cedce7 0%,#596a72 100%); 
		color: #004857;
		text-align: center;
		font-size: 30%;
	}

	.advertising-message {
		max-width: 70%;
		margin: 2em auto;
		font: 750%/1.2 'Luckiest Guy', cursive;
		color: #004857;
		text-shadow: 1px 1px 1px rgba(0, 21, 26, 0.7);
	}

	.highlight {
		color: #fff;
	}

	.credits {
		font: 13px tahoma,sans-serif;
		color: #333;
		text-shadow: 1px 0 0 rgba(0, 0, 0, 0.7);
	}

	.alpha {
		position: absolute; top: -1em; left: -6em; 
		font: 300%/1.2 'Luckiest Guy', cursive;
		padding: 4em 6em 2em;
		transform: rotate(-45deg);
		background: #000;
		color: #fff;
	}

	p {
		margin: 0 0 0.5em;
	}

	a {
		text-decoration: none;
		transition: 0.2s ease color;
	}

	a:link,
	a:visited {
		color: #fff;
	}

	a:hover,
	a:active {
		color: #004143;
	}

	.button {
		display: inline-block;
		margin: 0 auto 2em;
		font: 200%/1.0 tahoma, sans-serif;
		padding: 0.75em 4em;
		border-radius: 10px;
		border-bottom: 2px solid #00132e;
	}

	.button:link,
	.button:visited {
		background: #00334e;
		color: #fff;
	}

	.button:hover,
	.button:active {
		background: #000;
		color: #fff;
	}

	@media (min-width: 900px) {
		body {
			font-size: 50%;
		}

		.alpha {
			padding-bottom: 3em;
		}
	}

	@media (min-width: 1100px) {
		body {
			font-size: 62.5%;
		}
	}

	@media (min-width: 1100px) {
		body {
			font-size: 62.5%;
		}
	}
	</style>

	<script type="text/javascript">
	//<![CDATA[
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function()
	{ (i[r].q=i[r].q||[]).push(arguments)}
	,i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	ga('create', 'UA-19324725-41', 'auto');
	ga('send', 'pageview');
	//]]>
	</script>

</head>
<body>

<div class="advertising-message">
	<?php echo $m ?>
</div>

<div class="another">
	<a href="/" class="button">Another?</a>
</div>

<div class="credits">
	<p>By <a href="https://www.twitter.com/feejin" target="_blank">Colin</a> / <a href="https://www.bigfork.co.uk" target="_blank">Bigfork</a></p>
	<p>Words pillaged from <a href="http://random-name-generator.info/random/" target="_blank">Random Name Generator</a>, 
	<a href="http://listofrandomwords.com/index.cfm?blist" target="_blank">List of Random Words</a>, 
	<a href="http://www.wordlab.com/archives/product-names-list/" target="_blank">Wordlab Product Name List</a> and 
	<a href="https://www.randomlists.com/nouns" target="_blank">Random Lists</a></p>
</div>

<div class="alpha">
	Very Alpha
</div>

</body>
</html>

