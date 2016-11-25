<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Session;
use Input;
class CustomerController extends Controller
{
    public function index(){
    	$custom = Customer::all();
    return view('customer.index',compact('custom'));
    }


     public function create()
    {
        return view('customer.create');
    }
    public function store(Request $request)
    {
        
        $themoi = new Customer;
        $themoi ->username = $request->input("username");
        $themoi ->password = $request->input("password");
        $themoi ->studient_code = $request->input("studient_code");
        $themoi ->full_name = $request->input("full_name");
        $themoi ->description = $request->input("description");
        $themoi ->status = $request->input("status");
        $themoi->save();
        return response($themoi,201);
    }


    public function edit($id)
    {
        $e = Customer::findOrFail($id);

        return view('customer.edit', compact('e'));
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
        
       
        $id = $request->input("id");
        $chinhsua = Customer::findOrFail($id);

        $chinhsua ->username = $request->input("username");
        $chinhsua ->password = $request->input("password");
        $chinhsua ->studient_code = $request->input("studient_code");
        $chinhsua ->full_name = $request->input("full_name");
        $chinhsua ->description = $request->input("description");
        $chinhsua ->status = $request->input("status");
        
        $chinhsua->save();
        return response($chinhsua,201);
       
    }



public function destroy($id)
    {
        Customer::destroy($id);

        Session::flash('flash_message', 'Post deleted!');

        return redirect('Customers');
    }

}
