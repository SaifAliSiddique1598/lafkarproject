<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileManagementController extends Controller
{
    public function index(){

    	$users = User::where('role_id',2)
					->latest()->get();

        return view('admin.pages.profile-management.index',
    				compact('users'));
    }
    public function update(Request $request, $id){
    	User::where('id',$id)->update([
          'status' => $request->status,
    	]);
    	return redirect()->back()->with('success','User Status Updated Successfully');
    }
}
