<?php namespace App\Controllers;

class Home extends BaseController
{
	public function contohPage()
	{
		$data = [
			'title' => 'Verify your Account',	
		];
		return view('pages/verify', $data);
	}

}
