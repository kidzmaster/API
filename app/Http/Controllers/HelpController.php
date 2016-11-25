<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Help;
use Session;
class HelpController extends Controller
{
    public function index(){
    	$h=Help::paginate(25);
    	return view('help.index',compact('h'));
    }

     public function create()
    {
        return view('help.create');
    }
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Help::create($requestData);

        Session::flash('flash_message', 'Helps added!');

        return redirect('Helps');
    }


 public function edit($id)
    {
        $e = Help::findOrFail($id);

        return view('help.edit', compact('e'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $requestData = $request->all();
        
        $post = Help::findOrFail($id);
        $post->update($requestData);

        Session::flash('flash_message', 'Help updated!');

        return redirect('Helps');
    }



public function destroy($id)
    {
        Help::destroy($id);

        Session::flash('flash_message', 'Helps deleted!');

        return redirect('Helps');
    }
}
