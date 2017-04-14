<?php

function dbConnect(){
		$dbconn = pg_connect("host=mcsdb.utm.utoronto.ca dbname=mehtada3_309 user=mehtada3 password=05270");
		return $dbconn;
}

function userAuthentication($dbconn, $username, $passwd){

	$result = pg_prepare($dbconn, "", 'SELECT * FROM voters1 WHERE username=$username and paswd=$passwd');

	## check if database was able to prepare it
	if (!($result)){
		pg_close($dbconn);
		break;
	}

	$result = pg_execute($dbconn, "", array());

	return pg_fetch_all($result);

}

?>
