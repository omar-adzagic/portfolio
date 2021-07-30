<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogCategory;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function index() {
        return view('layouts.website');
    }

    public function getBlogs() {
        return response()->json(Blog::with('blogCategory')->get());
    }

    public function getBlogCategories() {
        return response()->json(BlogCategory::all());
    }

    public function getCategoryBlogs(Request $request) {
        return response()->json(BlogCategory::find($request->category_id)->blogs);
    }
    
    public function getBlog(Blog $blog) {
        return $blog;
    }
    
    public function getSearchBlogs(Request $request) {
        $this->request = $request;
        if($request->searchCategoryId != 0) {
            return Blog::where('blog_category_id', $request->searchCategoryId)
                       ->where(function($query) {
                           $query->where('title', 'like', '%' . $this->request->searchKeyword . '%')
                           ->orWhere('description', 'like', '%' . $this->request->searchKeyword . '%')
                           ->orWhere('content', 'like', '%' . $this->request->searchKeyword . '%')->get();
                       })->get();
        } else {
            return Blog::where('title', 'like', '%' . $request->searchKeyword . '%')
                       ->orWhere('description', 'like', '%' . $request->searchKeyword . '%')
                       ->orWhere('content', 'like', '%' . $request->searchKeyword . '%')->get();
        }
    }

    public function create() {
        
    }
    
    public function store() {
    
    }
    
    public function edit() {
    
    }
    
    public function update() {
    
    }
    
    public function destroy() {
    
    }
}
