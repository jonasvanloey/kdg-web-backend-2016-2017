<?php $lijst = [];

foreach (scandir(".") as $dir)
{
	if(strpos($dir,".") === false){
		$lijst[filemtime($dir)] = $dir;
	}
}
krsort($lijst);
krsort($linkLijst);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Web-backend</title>
	<link rel="stylesheet" href="intromas.css" type="text/css">
</head>
<body>
<h1>Web-backend</h1>
<h2>Oplossingen</h2>
<h3>Overzicht</h3>
<main>
	<ul>
		<?php foreach($lijst as $key => $val):?>
		<li><a href="<?= $lijst[$key]?>/"><?= $lijst[$key]?></a></li>
		<?php endforeach;?>
	</ul>
</main>
</body>
</html>
