<html>
<head>
<title>Okia</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/base/jquery-ui.css" type="text/css" media="all" /> 
</head>
<body>
<h1>Okia</h1>
<hr />
<input type="button" onclick="resetgame()" value="reset game" />
<input type="button" onclick="newgame()" value="new game" />
<input type="button" onclick="newplayer()" value="new player" />
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



<script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.5.min.js" type="text/javascript"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
<script src="script.js" type="text/javascript"></script>
</body>
</html>
