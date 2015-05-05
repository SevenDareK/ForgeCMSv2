<?php
namespace App;

class Cols
{
	
	public function Row()
	{
		echo '<div class="row">';
	}

	public function Col($col)
	{
		echo '<div class="'.$col.'">';
	}

	public function endCol()
	{
		echo '</div>';
	}
	public function endRow()
	{
		echo '</div>';
	}

}