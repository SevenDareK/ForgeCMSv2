<?php
namespace App\Table;

class News {

	public function __get($key) {
		$meth = 'get' . ucfirst($key);
		return $this->$meth;
	}

    public function getUrl () {
    	return '/news/' . $this->id;
    }

    public function getExt() {
    	$string = '<p>' . substr($this->content, 0, 500) . '...</p>';
    	$string .= '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
    	return $string;
    }

}