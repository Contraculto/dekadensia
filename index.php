<html>
<head>
	<style>
	@font-face{font-family:ComicSans;src:url("comic_sans_ms.eot")}
	@font-face{font-family:ComicSans;src:url("comic_sans_ms.ttf")}
	body{font-family:ComicSans}
	</style>
	<title>KE DEKADENSIA</title>
</head>
<body style="overflow:hidden">
	<div id="wrapper" style="width:100%;height:100%;overflow:hidden;">
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script>
		var countOne = 1;
		function createItem() {
			var width = 800; //Math.floor((Math.random()*100)+400);
			var height = Math.floor((Math.random()*10)+1000);
			var x = Math.floor((Math.random()*1800)-100);
			var speed = Math.floor((Math.random()*50)+1);
			var size = Math.floor((Math.random()*80)+20);
			var color = '#'+Math.floor(Math.random()*16777215).toString(16);
			var frases = [
			'ke deleite',
			'ke del&eacute;ite',
			'ke dekadensia',
			'ke dekadens&icirc;a,,',
			'k&ecirc; d&euml;k&aacute;d&egrave;ns&iuml;&agrave;',
			'kE beyesa',
			'K&Egrave; B&Egrave;Y&Eacute;S&Agrave;',
			'ke visio',
			'K&Eacute; V&Igrave;S&Iacute;&Ograve;',
			'kmo saver,,',
			'km&ocirc; s&Agrave;v&ecirc;r,,,',
			'ke delisia',
			'k&eacute; d&egrave;l&igrave;s&icirc;&auml;',
			'k&euml; d&eacute;l&ecirc;&iuml;t&egrave;'
			];
			randomIndex = Math.ceil((Math.random()*frases.length-1));
			var text = frases[randomIndex];
			var element = '<marquee class="mark" style="z-index:2;position:absolute;left:'+x+';top:0;font-family:ComicSans;font-size:'+size+'px;color:'+color+';height:'+height+';width:'+width+';"scrollamount="'+speed+'" direction="down"><p>'+text+'</p></marquee>';
			$('#wrapper').append(element);
			countOne++;
			if (countOne > 60) {
				$('marquee:first').remove();
			}
		}
		function Blink() {
			//$('.mark p').toggle();
			var color = '#'+Math.floor(Math.random()*16777215).toString(16);
			$('body').css({'background-color': color});
		}
		function keMatrics() {
			var nn = 'ke_' + countOne;
			nn = setInterval(createItem, 500);
		}
		$(document).ready(function() {
			keMatrics();
		});
	
		function BlinkTime() {
			var nn = 'lol_' + countOne;
			nn = setInterval(Blink, 300);
		}
		$(document).ready(function() {
			BlinkTime();
		});
	</script>
</body>
</html>
