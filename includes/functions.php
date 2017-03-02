<?php

function connectDatabase($host, $database,  $user, $pass){
	try {
		$dbh = new PDO('mysql:host=' . $host . ';dbname=' . $database, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

		return $dbh;

	} catch (PDOException $e) {
		print('Error!' . $e->getMessage() . '<br>');
		die();
	}
}

//This magical function searches through an array
function filterResults($searchQuery, $data) {
	$matches = [];

	foreach ($data as $key => $value) {
		if (strpos(strtolower($value['text']), strtolower($searchQuery)) !== false) {
			$matches[] = $value;
		}
	}
	return $matches;
}

function getWebsites($dbh){
	$sth = $dbh->prepare("SELECT * FROM websites");
	$sth->execute();
	$result = $sth->fetchAll();
	// die(var_dump($result));
	return $result;
}

function searchWebsites($dbh, $searchQuery){
	$sth = $dbh->prepare("SELECT * FROM websites WHERE text LIKE '%" . $searchQuery . "%'");
	$sth->execute();
	$result = $sth->fetchAll();
	// die(var_dump($result));
	return $result;
}