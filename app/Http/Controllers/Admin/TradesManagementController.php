<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Trade;
use App\Models\User;

class TradesManagementController extends Controller
{
    public function index(){
	    $users = User::where('role_id', 2)->get(); 
	    $trades = Trade::with('user')->latest()->get();
	    return view('admin.pages.trades-management.index', compact('trades', 'users'));
	}
    public function update(Request $request, $id){
    	Trade::where('id',$id)->update([
          'status' => $request->status,
    	]);
    	return redirect()->back()->with('success','Trade Status Updated Successfully');
    }
    public function getTrades($userId) {
    $trades = Trade::where('user_id', $userId)->get();
    return response()->json(['trades' => $trades]);
}
}
