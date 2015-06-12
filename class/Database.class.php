<?php
namespace App;

use \PDO;

class Database
{

	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_host;
	private $pdo;

	public function __construct($db_host, $db_user, $db_pass, $db_name)
	{
		$this->db_name = $db_name;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_host = $db_host;
	}

	private function getPDO()
	{
		if (!isset($pdo)) {
            $pdo = new PDO('mysql:dbname='.$this->db_name.';host='.$this->db_host, $this->db_user, $this->db_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $pdo;
	}

    public function query($sql, $one=true)
    {
        $req = $this->getPDO()->query($sql);
        if($one==true){
        	$datas = $req->fetch(PDO::FETCH_OBJ);
        }else {
        	$datas = $req->fetchAll(PDO::FETCH_OBJ);
        }
        return $datas;
    }

    public function prepare($sql, $attr, $one = false) {
    	$req = $this->getPDO()->prepare($sql);
    	$req->execute($attr);
    	if ($one) {
    		$datas = $req->fetch(PDO::FETCH_OBJ);
    	} else {
    		$datas = $req->fetchAll(PDO::FETCH_OBJ);
    	}
    	return $datas;
    }

    public function insert($sql, $attr) {
        $req = $this->getPDO()->prepare($sql);
        $req->execute($attr);
        if ($req) {
            return true;
        }
    }
}