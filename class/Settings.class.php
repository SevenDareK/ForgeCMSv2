<?php

namespace App;

class Settings
{
	
	public function get($setting)
	{
		global $db;
		$req = $db->prepare('SELECT value FROM forgecms_settings WHERE name=?', [$setting], true);
		return $req->value;
	}
}