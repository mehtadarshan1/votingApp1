<?php

class dbConnect {
	public $row = NULL;

    public function dbconnect(){
    	return pg_connect("host=mcsdb.utm.utoronto.ca dbname=mehtada3_309 user=mehtada3 password=05270");
    }

    public function userLogin($username,$passwd){

    	$dbconn=$this->dbconnect();
    	$result=pg_prepare($dbconn, "", "SELECT * FROM voters1 WHERE username='$username' and passwd='$passwd'");

		## check if database was able to prepare it
		if (!($result)){
			pg_close($dbconn);
			break;
		}

		$result = pg_execute($dbconn, "", array());

		$result = pg_fetch_all($result);
		pg_close($dbconn);

		return $result;
    }

}
?>





