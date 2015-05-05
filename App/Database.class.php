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
            // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pdo = $pdo;
        }
        return $pdo;
	}

    public function query($sql, $class)
    {
        $req = $this->getPDO()->query($sql);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $class);
        return $datas;
    }

    public function prepare($sql, $attr, $class='', $one = false) {
    	$req = $this->getPDO()->prepare($sql);
    	$req->execute($attr);
    	$req->setFetchMode(PDO::FETCH_CLASS, $class);
    	if ($one) {
    		$datas = $req->fetch();
    	} else {
    		$datas = $req->fetchAll();
    	}
    	return $datas;
    }

}