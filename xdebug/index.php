<?php

function isOfDrivingRange($age)
{
	return $age >= 16;
}

function notifyUserOfDrivingStatus($name, $age)
{
	$message = isOfDrivingRange($age) ? "You may drive. " : "You may not drive.";

	return "{$name}: {$message}";
}

$status = notifyUserOfDrivingStatus('John Doe', 17);