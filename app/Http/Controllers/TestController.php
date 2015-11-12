<?php

namespace App\Http\Controllers;

use Cache;
use Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Model\Task;

class TestController extends Controller
{
	public function __construct() {
		$this->middleware('log', ['only' => ['inputAction']]);
	}

	public function input() {
		$req = Request::input();die;
		var_dump($req);
	}

	public function output() {
		var_dump( \func_get_args() );
		return __FUNCTION__;
	}

	public function cache($key) {
		var_dump([
			'key' => $key,
			'val' => Cache::get($key)
		]);
		return __FUNCTION__;
	}

	public function tasks() {
		var_dump( Task::first() );
	}

	public function task($id) {
		$task = Task::where('id', $id)->get();
		if (empty($task) || count($task)==0) {
			abort(404);
		}
		else {
			var_dump($task[0]);
		}
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
