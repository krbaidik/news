<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Support\Facades\Auth;
use App\newsfeed;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class newsController extends Controller
{
    public function category(){

    	return view('category');
    }

    public function viewcategory(){
    	$categories = category::all();
    	
    	return view('viewcategory',['categories'=>$categories]);
    }

    public function viewnews(){
    	$news = newsfeed::all();
    	
    	return view('viewnews',['news'=>$news]);
    }



    public function news(){
    	$categories = category::all();
    	return view('news',['categories'=>$categories]);
    }


    public function insertcategory(Request $req){
    	$category = new category([
    		'name'=>$req->name,
    		'rank'=>$req->rank,
            'slug' => Str::of($req->slug)->slug('-'),
    		'created_by'=>Auth::user()->name,
    		'updated_by'=>Auth::user()->name,
    	]);
    	$category->save();

    	return view('home');
    }

    public function insertnews(Request $req){
    	$news = new newsfeed([
    		'category_id'=> $req->category,
    		'title'=>$req->title,
            'slug' => Str::of($req->title)->slug('-'),
    		'short_description'=>$req->short_description,
    		'description'=>$req->description,
    		'created_by'=>Auth::user()->name,
    		'updated_by'=>Auth::user()->name,
    	]);

    	if ($req->hasfile('image')) {
            $image = $req->file('image');
             $extension = $image->getClientOriginalExtension();
             $imagename = time().'.'.$extension;

            $image->move('uploads/',$imagename);

            $news->image = $imagename;
        }else{
            return $req;
            $news->image = '';
        }

    	$news->save();

    	return view('home');
    }


    public function editcategory($id){
    	$category = category::where('id',$id)->get();
    	return view('editcategory',['category'=>$category]);
    }

    public function editnews($id){
    	$news = newsfeed::where('newsfeeds.id',$id)
        ->join('categories','newsfeeds.category_id','categories.id')
        ->select(
            'categories.*',
            'newsfeeds.*',
            'newsfeeds.slug as news_slug')
        ->get();
    	$categories = category::all();
    	return view('editnews',['news'=>$news,'categories'=>$categories]);
    }


    public function updatecategory(Request $req){
			$category = category::find($req->id);

    		$category->name = $req->name;
    		$category->rank =$req->rank;
    		$category->slug = Str::slug($req->slug,'-');
    		$category->status = $req->status;
    		$category->updated_by = Auth::user()->name;
    		$category->save();
    	return redirect('viewcategory');
    }
    public function updatenews(Request $req){
    	$news = newsfeed::find($req->id);
    	$news->category_id = $req->category;
    	$news->title = $req->title;
        $news->slug = Str::slug($req->slug,'-');
    	$news->short_description = $req->short_description;
    	 unlink(public_path().'/uploads/'.$news->image);

    	if($req->hasfile('image')){
    		$image = $req->file('image');
    		$extension = $image->getClientOriginalExtension();
    		$imagename = time().'.'.$extension;
    		$image->move('uploads/',$imagename);
    		 $news->image = $imagename; 
    	}
    	else{
    		return $req;
    		$news->image = '';
    	}
    	$news->description = $req->description;
        $news->updated_by = Auth::user()->name;
    	$news->save();
    	return redirect('viewnews');
    }

    public function deletecategory($id){
    	$category = category::find($id);
    	$category->delete();
    	return redirect('viewcategory');
    }

    public function deletenews($id){
    	$news = newsfeed::find($id);
    	$news->delete();
    	return redirect('viewnews');
    }



    // public function trash(){
    //     $trash = newsfeed::onlyTrashed()->get();
    //     return view('trash',['trash'=>$trash]);
    // }


    //  public function restore($id){
    //     $trash = newsfeed::onlyTrashed()->find($id)->restore();
    //     return redirect('trash');
    // }


    // public function p_delete($id){
    //     $trash = newsfeed::onlyTrashed()->find($id)->forceDelete();
    //     return redirect('trash');
    // }
}
