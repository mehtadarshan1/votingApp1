<?php

class dbConnect {

    public function dbconnect(){
    	return pg_connect("host=mcsdb.utm.utoronto.ca dbname=mehtada3_309 user=mehtada3 password=05270");
    }

    public function userLogin($username,$passwd){

    	$dbconn=$this->dbconnect();
    	$result=pg_prepare($dbconn, "", "SELECT * FROM voters1 WHERE username='$username' and passwd='$passwd'");

		## check if database was able to prepare it
		if (!($result)){
			pg_close($dbconn);
			return NULL;
		}

		$result = pg_execute($dbconn, "", array());

		$result = pg_fetch_all($result);
		pg_close($dbconn);

		return $result;
    }

    public function vote($username, $vote){
    	$dbconn=$this->dbconnect();
    	$result=pg_prepare($dbconn, "", "UPDATE voters1 SET vote='$vote' WHERE username='$username'");

		## check if database was able to prepare it
		if (!($result)){
			pg_close($dbconn);
			return NULL;
		}

		$result = pg_execute($dbconn, "", array());

		pg_close($dbconn);
    }

    public function getVoteCount(){

    	$dbconn=$this->dbconnect();
    	$extend=pg_prepare($dbconn, "", "SELECT COUNT(*) voters1  WHERE vote='extend'");

    	if (!($extend)){
			pg_close($dbconn);
			return NULL;
		}
		$extend = pg_execute($dbconn, "", array());

    	$dontextend=pg_prepare($dbconn, "", "SELECT COUNT(*) voters1  WHERE vote='dontextend'");

    	if (!($dontextend)){
			pg_close($dbconn);
			return NULL;
		}

		$dontextend = pg_execute($dbconn, "", array());
		$result = array();
		$result['dontextend']=$dontextend;
		$result['extend']=$extend;

		return $result;

    }

}
?>





