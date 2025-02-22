<?php
class ConexionMySql
{

	private $host;
	private $username;
	private $pass;
	private $database;
	private $con;
	public function __construct(){

		$this->host = "localhost";
		$this->username = "root";
		$this->pass = "";
		$this->database = "cobrosdb";

		ob_start();
		error_reporting(E_ALL & ~E_NOTICE);
		ini_set('display_errors', 0);
		ini_set('log_errors', 1);
		$this->con = mysqli_connect($this->host, $this->username, $this->pass, $this->database);
		if($this->con->connect_errno)
        {
            die ("database connection failed".$this->con->connect_errno);
        }
        mysqli_set_charset($this->con, "utf8");

	}

	public function consultaSimple($sql){

		$r= mysqli_query($this->con,$sql) or die("<font color=red  >error:".$this->con->error."</font>");
		return $r;
		
	}

	public function consultaRetorno($sql){
		try {
			$consulta = mysqli_query($this->con,$sql) or die("<font color=red >error:".$this->con->error."</font>");
			return $consulta;
		} catch (Exception $e) {
			echo 'Caught exception: ',  $e->getMessage(), "\n";
		}

	}
}

?>