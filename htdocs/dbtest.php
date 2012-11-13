<?php
try{
	$pdo = new PDO('mysql:host=localhost; dbname=blog_app', 'dbuser', '5963');
	/*$stmt = $pdo->prepare('INSERT INTO users(name, email, team, score, created) VALUES(:NAME, :EMAIL, :TEAM, :SCORE, :CREATED)');
	$stmt->bindParam(':NAME', $name);
	$stmt->bindParam(':EMAIL', $email);
	$stmt->bindParam(':TEAM', $team);
	$stmt->bindParam(':SCORE', $score);
	$stmt->bindParam(':CREATED', $created);
	$name = 'しんい';
	$email = 'example@gmail.com';
	$team = 'blue';
	$score = 5.5;
	$created = '2012-11-11 23:00:00';
	$stmt->execute();
	*/
	$stmt = $pdo->query('SELECT * FROM users');
	foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $user){
		var_dump($user['name']);
	}
	echo 'done';
} catch (PDOException $e){
	var_dump($e->getMessage());
}
$pdo = null;
?>
