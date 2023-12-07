<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Ticker;

class BannerController extends Controller
{
	public function index(){
    	$banners = Banner::latest()->get();
    	$tickers = Ticker::latest()->get();
        return view('admin.pages.ticker-and-banner-management.index',
        			compact('banners', 'tickers'));
    }
    public function store(Request $request){
    	$request->validate([
        	'image' => ['required', 'image' ,'mimes:jpg,jpeg,png','max:1024'],
    	]);
    	if (request()->has('image')) {
            $image = request()->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = public_path('/images/banners');
            $image->move($imagePath, $imageName);
        }
        Banner::create([
            'image' =>  $imageName,
    	]);
    	return redirect()->back()->with('success','Banner Created Successfully');
    }
    public function update(Request $request, $id){
	    $banner = Banner::find($id);
	    $imageName = $banner->image; 

	    if ($request->hasFile('image')) {
	        $image = $request->file('image');
	        $imageName = time() . '.' . $image->getClientOriginalExtension();
	        $imagePath = public_path('/images/banners');
	        $image->move($imagePath, $imageName);

        if ($banner->image && $banner->image !== 'default_image_name.jpg') {
            $previousImagePath = $imagePath . '/' . $banner->image;
        if (file_exists($previousImagePath)) {
            unlink($previousImagePath);
	        }
        }
    }
    $banner->update([
        'image' => $imageName,
    ]);
    return redirect()->back()->with('info','Banner Updated Successfully');
}
	public function destroy($id){
	    $banner = Banner::find($id);
	    if (!$banner) {
	        return redirect()->back()->with('error', 'Banner not found.');
	    }
	    $imagePath = public_path('/images/banners');
	    $imageToDelete = $imagePath . '/' . $banner->image;
	    if (File::exists($imageToDelete)) {
	        File::delete($imageToDelete);
	    }
		$banner->delete();
		return redirect()->back()->with('success','Banner Deleted Successfully');
}
	public function updateStatus(Request $request){
	    $bannerId = $request->input('bannerId');
	    $newStatus = $request->input('newStatus');

	    $banner = Banner::find($bannerId);
	    if ($banner) {
	        $banner->status = $newStatus;
	        $banner->save();
	        return response()->json(['success' => true]);
	    }
    return response()->json(['success' => false]);
}

}