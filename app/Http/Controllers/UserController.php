<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
      public function index(){
    	$rul=User::paginate(25);
    	return view('user.index',compact('rul'));
    }
      public function create()
    {
        return view('user.create');
    }
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        User::create($requestData);

        Session::flash('flash_message', 'User added!');

        return redirect('Users');
    }


 public function edit($id)
    {
        $r = User::findOrFail($id);

        return view('user.edit', compact('r'));
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
        
        $post = User::findOrFail($id);
        $post->update($requestData);

        Session::flash('flash_message', 'User updated!');

        return redirect('Users');
    }



public function destroy($id)
    {
        User::destroy($id);

        Session::flash('flash_message', 'Post deleted!');

        return redirect('Users');
    }
}
