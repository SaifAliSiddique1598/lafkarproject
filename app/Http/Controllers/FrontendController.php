<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Trade;
use App\Models\Ticker;
use App\Models\Faqs;
use App\Models\Banner;
use App\Models\Support;
use Auth;

class FrontendController extends Controller
{
    public function index(){
		$ticker = Ticker::where('status', 'active')->inRandomOrder()->first();
		$banners = Banner::where('status', 'active')->latest()->get();
		$faqs = Faqs::latest()->get();
        return view('frontend.index',compact('ticker','banners','faqs'));
    }

    public function page($slug){
    	$user = auth()->user();
		if (in_array($slug, ['profile', 'portfolio', 'trade'])) {
	        if (!$user) {
	            return redirect()->route('frontend.page', 'sign_in');
	        }
   		 }
        return view('frontend.'. $slug,compact('user'));
    }
     public function store(Request $request){
        $request->validate([
		    'name' => 'required',
		    'numbers' => 'required',
		    'item_code' => 'required',
		    'booking_price' => 'required',
		    'address' => 'required',
		], [
		    'name.required' => 'Input Name is required.',
		    'item_code.required' => 'Input Item Code is required.',
		    'booking_price.required' => 'Input Booking Price is required.',
		    'address.required' => 'Input Address is required.',
		]);
    	Trade::create([
          'user_id' => Auth::user()->id,
          'name' => $request->name,
          'numbers' => implode(', ', $request->numbers),
          'item_code' => $request->item_code,
          'booking_price' => $request->booking_price,
          'address' => $request->address,
          'special_note' => $request->special_note,
    	]);
    	return redirect()->back()->with('success','Trade Created Successfully');
    }
    public function updatePassword(Request $request){
    	$user = Auth::user();
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'password' => 'required|confirmed|min:8',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if (!Hash::check($request->current_password, $user->password)) {
            return redirect()->back()->with('error', 'The current password is incorrect.');
        }
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('frontend.index')->with('success', 'Password changed successfully.');
    }
    public function supportStore(Request $request){
    	$request->validate([
		    'name' => 'required',
		    'email' => 'required',
		    'subject' => 'required',
		    'content' => 'required',
		], [
		    'name.required' => 'Input Name is required.',
		    'email.required' => 'Input Email is required.',
		    'subject.required' => 'Input Subject is required.',
		    'content.required' => 'Input Content is required.',
		]);
  	   	Support::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'content' => $request->content,
      	]);
    	return redirect()->back()->with('success','Support submitted Successfully');
    }
    public function profileUpdate(Request $request){
        $user = auth()->user();
        $user->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'cnic' => $request->input('cnic'),
            'account_title' => $request->input('account_title'),
            'account_type' => $request->input('account_type'),
            'account_number' => $request->input('account_number'),
            'contact' => $request->input('contact'),
        ]);
        return redirect()->route('frontend.page', 'profile')->with('success', 'Profile updated successfully!');
    }
}
