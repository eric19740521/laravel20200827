<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

	
		//return view('members.index');
		return view('members.index', ['members' => Member::cursor()]);		 
		 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
 
 
		
		return view('members.create' );
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
		$m = new Member;
		$m->mem_name = $request->input('mem_name');
		$m->save();
		//return $m;		
		return view('members.index', ['members' => Member::cursor()]);	
		
		
		
		
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $member)
    {
        //
		return view('members.show');	
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		
		$member  = Member::find($id);
        //return view('members.edit', compact('member'));   
		
		return view('members.edit', ['member' => $member]);
		
		// 向VIEW傳送變數的方法有以下幾種(將變數轉換成結合陣列的 key => value)
		// 其中 compact 是 PHP的陣列函數，
		// return View::make('index', ['lessions' => $lessions]);
		// return View::make('index', compact($lessions));
		// return View::make('index')->with('lessions', $lessions);
		// return View::make('index')->withLession($lessions);
		// return View::make('index', compact('lession', 'name'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
		$data = $request->all();
		Member::find( $id)->update($data);
		return redirect('/members');
		
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $member)
    {
		
		$member->delete();
		return redirect()->route('members.index');
	 
	 
 
    }
	
 
	
	
}



?>