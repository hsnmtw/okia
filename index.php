<html>
<head>
<title>Okia</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<h1>Okia</h1>
<hr />
<input type="button" onclick="newgame()" value="new game" />
<hr />

<table class="board" style="width:100%" border="1">
	<tr>
		<td colspan="3">
			<div class="cards" id="player3">3</div>
		</td>
	</tr>

	<tr>
		<td>
			<div class="cards" id="player2">2</div>
		</td>
		<td width="50%">
			<div class="cards" id="maidan">m</div>
		</td>
		<td>
			<div class="cards" id="player4">4</div>
		</td>				
	</tr>
	
	<tr>
		<td colspan="3">
			<div class="cards" id="player1">1</div>
		</td>
	</tr>
</table>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="script.js"></script>

</body>
</html>
