<?php
	session_start();

	// Get the score and progress
	$score = isset($_SESSION['score']) ? $_SESSION['score'] : 0;
	$progress = isset($_SESSION['progress']) ? $_SESSION['progress'] : 0;

	// Calculate the percentage
	$percentage = $score / $progress * 100;

	// Output the results
	echo '<h1>Quiz Results</h1>';
	echo '<p>You scored ' . $score . ' out of ' . $progress . '.</p>';
	echo '<p>Your percentage is ' . $percentage . '%.</p>';

	// Clear the session
	session_unset();
	session_destroy();
?>
