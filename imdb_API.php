
<?php
$movie = (object)[
	'Title'=>'',
	'Year'=>''
];
$nome = $_POST['nome'] ??	'';
$url = "http://www.omdbapi.com/?t={'$nome'}&apikey=aa1dfe04";
$movie = json_decode(file_get_contents($url));

// var_dump($movie)
?>

