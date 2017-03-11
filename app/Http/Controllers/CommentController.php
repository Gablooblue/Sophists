<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Professor_comment;
use App\University_comment;

class CommentController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}	
	public function CreatePComment(array $data)
	{
		return Professor_comment::create([
			'author' => $user['username'],
			'comment' => $data['comment'],
			'professor_id' => $data['professor_id'],
		]);
	}	

	public function CreateUComment(array $data)
	{
		return University_comment::create([
			'author' => $user['username'],
			'comment' => $data['comment'],
			'university_id' => $data['university_id'],
		]);
	}	
}