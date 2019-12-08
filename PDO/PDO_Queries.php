<?php 

//Create PDO Instance
$pdo = new PDO($dsn, $user, $password );
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

//PDO Query defined
$stmt = $pdo->query('SELECT * FROM inventory');


while($row = $stmt->fetch()){

	echo '<tr>' .

		'<td>' . '<img class="thumbnail" src=" '. $row->image . '"></td>' .
		'<td>' . $row->type . '</td>' .
		'<td>' . $row->line . '</td>' .
		'<td>' . $row->color . '</td>' .
		'<td>' . $row->details . '</td>' .
		'<td>' . $row->floor . '</td>' .
		'<td>' . $row->room . '</td>' .
		'<td>' . $row->rack . '</td>' .
		'<td>' . $row->qty . '</td>' .

	'</tr>';
}


?>

