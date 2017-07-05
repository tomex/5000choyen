<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>進化した！5000兆円ジェネレーター</title>
	<meta name="description" content="今、話題の5000兆円。そんな5000兆円のような画像を生成できる5000兆円ジェネレーターです。好きな文字を入れて素敵な5000兆円ライフを楽しもう！">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="進化した！5000兆円ジェネレーター">
	<meta name="twitter:description" content="5000兆円のような画像を生成できる進化した5000兆円ジェネレーターです。">
	<meta name="twitter:image" content="image.png">
	<meta name="twitter:url" content="http://tmx3.net/5000choyen/">
	<meta name="twitter:creator" content="@t4mx">
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="main.js"></script>
</head>

<body>
	<h1>5000兆円ジェネレーター</h1>
	<div id="iosView">
		<img id="imgTag" src="" alt="見たなこいつ！" width="0" height="150">
	</div>
	<div id="svgView" class="hidden">
		<svg xmlns="http://www.w3.org/2000/svg" id="svg" width="0" height="150">
			<style type="text/css">
				@font-face {
					font-family: 'Noto Sans Japanese';
					src: url('data:font/otf;base64,<?php echo file_get_contents("f.txt"); ?>')
					format('opentype');
				}
			</style>
			<linearGradient id="grad_silver" gradientTransform="rotate(90)">
				<stop offset="0.00" stop-color="rgb(0,15,36)"/>
				<stop offset="0.10" stop-color="rgb(255,255,255)"/>
				<stop offset="0.18" stop-color="rgb(55,58,59)"/>
				<stop offset="0.25" stop-color="rgb(55,58,59)"/>
				<stop offset="0.50" stop-color="rgb(200,200,200)"/>
				<stop offset="0.75" stop-color="rgb(55,58,59)"/>
				<stop offset="0.85" stop-color="rgb(25,20,31)"/>
				<stop offset="0.91" stop-color="rgb(240,240,240)"/>
				<stop offset="0.95" stop-color="rgb(166,175,194)"/>
				<stop offset="1.00" stop-color="rgb(50,50,50)"/>
			</linearGradient>
			<linearGradient id="grad_gold" gradientTransform="rotate(90)">
				<stop offset="0.00" stop-color="rgb(253,241,0)"/>
				<stop offset="0.25" stop-color="rgb(245,253,187)"/>
				<stop offset="0.40" stop-color="rgb(255,255,255)"/>
				<stop offset="0.75" stop-color="rgb(253,219,9)"/>
				<stop offset="0.90" stop-color="rgb(127,53,0)"/>
				<stop offset="1.00" stop-color="rgb(243,196,11)"/>
			</linearGradient>
			<linearGradient id="grad_red" gradientTransform="rotate(90)">
				<stop offset="0.00" stop-color="rgb(255, 100, 0)"/>
				<stop offset="0.5" stop-color="rgb(123, 0, 0)"/>
				<stop offset="0.51" stop-color="rgb(240, 0, 0)"/>
				<stop offset="1.00" stop-color="rgb(5, 0, 0)"/>
			</linearGradient>
			<rect width="100%" height="100%" fill="none" />
			<g stroke-linejoin="bevel" id="draw" transform="matrix(1,0,0,1,0,0) matrix(1,0,-0.4,1,0,0)" font-family="'ＤＦＰ超極太ゴシック体','DFGothic-SU','Noto Sans Japanese'">
				<g fill="none">
					<text x="64px" y="104px" font-size="100px" class="text" stroke-width="22px" stroke="#000">5000兆円欲しい！</text>
					<text x="64px" y="104px" font-size="100px" class="text" stroke-width="20px" stroke="url(#grad_silver)">5000兆円欲しい！</text>
					<text x="60px" y="100px" font-size="100px" class="text" stroke-width="16px" stroke="#000">5000兆円欲しい！</text>
					<text x="60px" y="100px" font-size="100px" class="text" stroke-width="10px" stroke="url(#grad_gold)">5000兆円欲しい！</text>
					<text x="62px" y="97px" font-size="100px" class="text" stroke-width="6px" stroke="#000">5000兆円欲しい！</text>
					<text x="60px" y="97px" font-size="100px" class="text" stroke-width="4px" stroke="#FFF">5000兆円欲しい！</text>
					<text x="60px" y="97px" font-size="100px" class="text" stroke-width="2px" stroke="url(#grad_red)">5000兆円欲しい！</text>
				</g>
				<text x="60px" y="97px" font-size="100px" class="text" fill="url(#grad_red)">5000兆円欲しい！</text>
			</g>
		</svg>
	</div>
	<div>
		<input type="text" id="textbox" size="50" value="5000兆円欲しい！" spellcheck="false" oninput="reDraw();">
		<button type="button" onclick="saveImage();">画像を保存する</button>
	</div>
	<p>
		5000兆円風の画像を生成するツールです。 文字によっては潰れてしまうことがあります。
	</p>
	<p>
		何もテストしてないので、バグあるかも。<br>
		保存すると上手く描画される場合あり。<br>
		iOSの人はロングタップで保存してね。
	</p>
	<div>
		作者Twitter:<a href="https://twitter.com/t4mx">@t4mx</a> 
		ベース作品の作者Twitter:<a href="https://twitter.com/rarity_rare25">@rarity_rare25</a> 
		ソース:<a href="https://github.com/tomex/5000choyen">5000choyen</a>(まだだよ)
	</div>
	<div>
		<a href="https://twitter.com/share" class="twitter-share-button" data-url="http://tmx3.net/5000choyen/" data-text="進化した！5000兆円ジェネレーター">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	</div>
	<div id="canvas-draw" class="hidden"></div>
</body>
</html>