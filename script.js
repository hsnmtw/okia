function newgame(){
	$.get('php/newgame.php',function(r){
		//$("#player1").html(r);
		var div = $("#player1");
		div.empty();
		var cards = eval('('+ r +')');
		for(var card in cards){
			div.append('<img class="card" src="./img/'+ cards[card] +'.png" />');
		}

		var players = ['player2','player3','player4'];
		for(var i in players){
			$('#'+players[i]).html('<img class="card" src="./img/___.png" />');
		}
		for(var i in players){
			for(var j=0;j<12;j++){
				$('#'+players[i]).append('<img class="card stacked" src="./img/___.png" />');
			}
		}
	});
}

function resetgame(){
	var players = ['player1','player2','player3','player4'];
	for(var i in players){
		$('#'+players[i]).html('<img class="card" src="./img/___.png" />');
	}
	for(var i in players){
		for(var j=0;j<12;j++){
			$('#'+players[i]).append('<img class="card stacked" src="./img/___.png" />');
		}
	}		
}

$(document).ready(resetgame);
$('input:button').button();