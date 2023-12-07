<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Faqs;

class FaqsManagementController extends Controller
{
    public function index(){
    	$faqs = Faqs::latest()->get();
        return view('admin.pages.faqs-management.index',compact('faqs'));
    }
 	public function store(Request $request){
	    $request->validate([
	        'title' => 'required',
	        'content' => 'required',
	        'image' => 'required|image|mimes:jpg,jpeg,png|max:1024',
	    ]);

	    if ($request->hasFile('image')) {
	        $image = $request->file('image');
	        $imageName = time() . '.' . $image->getClientOriginalExtension();
	        $imagePath = public_path('images/faqs');
	        $image->move($imagePath, $imageName);
	    }

	    Faqs::create([
	        'title' => $request->title,
	        'content' => $request->content,
	        'image' => $imageName ?? null,
	    ]);
    return redirect()->back()->with('success', 'FAQS Created Successfully');
}
	public function update(Request $request, $id){
		    $faq = Faqs::find($id);
		    $imageName = $faq->image;
		    $old_image = $faq->image;

	    if ($request->hasFile('image')) {
	        $image = $request->file('image');
	        $imageName = time() . '.' . $image->getClientOriginalExtension();
	        $imagePath = public_path('/images/faqs');
	        $image->move($imagePath, $imageName);

        if ($old_image && $old_image !== 'default_image_name.jpg') {
            $previousImagePath = $imagePath . '/' . $old_image;
            if (file_exists($previousImagePath)) {
                unlink($previousImagePath);
            }
        }
    }

    $faq->update([
        'title' => $request->title,
        'content' => $request->content,
        'image' => $imageName,
    ]);

    return redirect()->back()->with('info', 'FAQS Updated Successfully');
}
	public function destroy($id){
	    $faq = Faqs::find($id);
	    if (!$faq) {
	        return redirect()->back()->with('error', 'FAQS not found.');
	    }
	    $imagePath = public_path('/images/faqs');
	    $imageToDelete = $imagePath . '/' . $faq->image;
	    if (File::exists($imageToDelete)) {
	        File::delete($imageToDelete);
	    }
		$faq->delete();
		return redirect()->back()->with('success','FAQS Deleted Successfully');
}
}
