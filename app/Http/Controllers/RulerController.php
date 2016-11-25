<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ruler;
use Session;
class RulerController extends Controller
{
    public function index(){
    	$rul=Ruler::paginate(25);
    	return view('ruler.index',compact('rul'));
    }
      public function create()
    {
        return view('ruler.create');
    }
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        Ruler::create($requestData);

        Session::flash('flash_message', 'Ruler added!');
      return response($requestData,201);
    }


 public function edit($id)
    {
        $r = Ruler::findOrFail($id);

        return view('ruler.edit', compact('r'));
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
        
        $post = Ruler::findOrFail($id);
        $post->update($requestData);

        Session::flash('flash_message', 'Ruler updated!');

        return redirect('Rulers');
    }



public function destroy($id)
    {
        Ruler::destroy($id);

        Session::flash('flash_message', 'Post deleted!');

        return redirect('Rulers');
    }
}
