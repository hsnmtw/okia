<?php
	
session_start();


$numbers = array('00','01','02','03','04','05','06','07','08','09','10','11','12');
$colours = array('b','r','g','y');

$cards = array('zzz');		//initialize the cards with +4

foreach($colours as $colour){
	foreach($numbers as $number){
		$cards[] = $colour . $number; 
	}
}

$cards   = array_diff($cards, array('y00')); //remove y00

shuffle($cards);	//shuffle the cards

$players = array('player1','player2','player3','player4');

$game = array(
	$players[0] => array_slice($cards,0,13),
	$players[1] => array_slice($cards,13,13),
	$players[2] => array_slice($cards,26,13),
	$players[3] => array_slice($cards,39,13),
	'colour'    => '',
	'order'     => 5,
	'team1'     => 0,
	'team2'     => 0
);

foreach($players as $player){
	rsort($game[$player]);
}

$_SESSION['game'] = $game;
print(json_encode($_SESSION['game']['player1']));