<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\User;

class VendorController extends Controller
{
    public function vendor()
    {
        return view('vendor');
    }
    public function savevendor(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'contact' => 'max:10',
            'email' => 'required',
            'password' => 'min:8|required_with:confirm_password|same:confirm_password',
            'confirm_password' => 'min:8'
        ]);

        $vendors = New User;
        $vendors->name = $request['name'];
        $vendors->contact = $request['contact'];
        $vendors->usertype = $request['usertype'];
        $vendors->email = $request['email'];
        $vendors->password = bcrypt($request['password']);
        $vendors->save();
        return redirect('/showvendor');
     
    }
    public function showvendor()
    {
        $vendors = Vendor::all();
        return view('showvendor',compact('vendors'));
    }
    public function editvendor($id)
    {
        $vendors = Vendor::find($id);
        return view('editvendor',compact('vendors'));
    }
    public function updatevendor($id,Request $request)
    {
        $vendors = Vendor::find($id);
        $vendors->name = $request['name'];
        $vendors->contact = $request['contact'];
        $vendors->email = $request['email'];
        $vendors->password = $request['password'];
        $vendors->save();
        return redirect('/showvendor');
    }
    public function deletevendor($id)
    {
        Vendor::find($id)->delete();
        return redirect()->back();
    }
}
