<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Professor;
use Redirect;
use App\Http\Requests\ProfessorRequest;


class ProfessorController extends Controller
{
	/**
	 * @param Professor ID
	 * @return Professor profile and percentage
	 */
	public function show(Request $request, $id)
	{
		$professor = Professor::find($id);
		$comments = Professor::find($id)->comments()->paginate(5);
		$percentage = ($professor->likes/($professor->likes + $professor->dislikes)) * 100;
		
		return view("professor",['professor' => $professor, 'percentage' => $percentage, 'comments' => $comments]);
	}	

	public function create(ProfessorRequest $request)
	{
		$data =$request->all();

		Professor::create([
			'fname'	=> $data['fname'],
			'lname'	 => $data['lname'],
			'mname' => $data['mname'],
			'university_id' => $data['school'],
			'class' => $data['class']
		]);

		return Redirect::to('/professors');
	}	

	
	public function remove($id)
	{
		Professor::find($id)->delete();
		return Redirect::to('/professors');
	}

}
