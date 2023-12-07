<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ticker;

class TickerController extends Controller
{
    public function index(){
    	$tickers = Ticker::latest()->get();
        return view('admin.pages.ticker-and-banner-management.index',
        			compact('tickers'));
    }
    public function store(Request $request){
        $request->validate([
        'message' => 'required',
        ],[
           'message.required' => 'Input Ticker Message',
        ]);
    	Ticker::create([
          'message' => $request->message,
    	]);
    	return redirect()->back()->with('success','Ticker Created Successfully');
    }
    public function update(Request $request, $id){
    	Ticker::where('id',$id)->update([
          'message' => $request->message,
    	]);
    	return redirect()->back()->with('success','Ticker Updated Successfully');
    }
    public function destroy($id){
        Ticker::find($id)->delete();
        	return redirect()->back()->with('error','Ticker Deleted Successfully');
    }
   public function updateStatus(Request $request)
{
    $tickerId = $request->input('tickerId');
    $newStatus = $request->input('newStatus');

    $ticker = Ticker::find($tickerId);
    if ($ticker) {
        $ticker->status = $newStatus;
        $ticker->save();
        return response()->json(['success' => true]);
    }

    return response()->json(['success' => false]);
}
}
