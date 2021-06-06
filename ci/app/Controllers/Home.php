<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$project = new \App\Models\Projects();
		$data = [
			'proj_upcoming' => $project->where('mode','Upcoming')->findAll(),
			'proj_ended' => $project->where('mode', 'Ended')->findAll(),
		];
		echo view('header');
		echo view('home',$data);
		echo view('footer');
	}

	public function project($name)
	{
		$project = new \App\Models\Projects();
		$data = [
			'proj' => $project->where(['name' => $name])->find(),
		];
		echo view('header');
		echo view('detail',$data);
		echo view('footer');
	}

	//--------------------------------------------------------------------

}
