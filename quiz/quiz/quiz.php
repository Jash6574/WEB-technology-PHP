<?php
	session_start();

	$answers = array(
		'q1' => 'b',
		'q2' => 'c'
	);

	if(!isset($_SESSION['score'])) {
		$_SESSION['score'] = 0;
	}

	foreach($answers as $question => $answer) {
		if(isset($_POST[$question]) && $_POST[$question] == $answer) {
			$_SESSION['score']++;
		}
	}

	$_SESSION['progress'] = count($_POST);

	if($_SESSION['progress'] < count($answers)) {
		header('Location: quiz.html');
		exit();
	} else {
		header('Location: results.php');
		exit();
	}
?>
