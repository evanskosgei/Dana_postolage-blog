<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function count()
    {
        $blogs = Blog::all();
        // print($blogs);
        $number = $blogs->count();
        return $number;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getBlogByUID($id)
    {
        $Blogs = Blog::select()->where('user_id', $id)->get();
       return $Blogs;
    }
    public function getBlogCount($id)
    {
        $Blogs = Blog::select()->where('user_id', $id)->get();
        $count = $Blogs->count();
       return $count;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $title = $request->title;
        $text = $request->text;
        $author = $request->author;
        $user_id = $request->user_id;

        $blogpost = new Blog;
        $blogpost->title = $title;
        $blogpost->text = $text;
        $blogpost->author = $author;
        $blogpost->user_id = $user_id;
        try {
            $blogpost->save();
            return ('Blog submited successfully');
        } catch (\Throwable $e) {
            return ('Failed to store because youre not an author');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $blog = Blog::all();
        return $blog;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // $data = Blog
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $req)
    {
        $id = $req->id;
        $title = $req->title;
        $text = $req->text;
        $author = $req->author;

        $updateBlog = Blog::find($id);
        $updateBlog->title = $title;
        $updateBlog->text = $text;
        $updateBlog->author = $author;
        try {
            $updateBlog->save();
            return ('details update successfully');
        } catch (\Throwable $e) {
            return ('Failed to update');
        }
    }

    public function popular()
    {
        $popular  = Blog::latest()->take(5)->pluck('title');
        return $popular;
    }

    public function getBlogById($id)
    {
        $data = Blog::find($id);
        return $data;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteblog($id)
    {
        try {
            $del_blog = Blog::find($id);
            if(!$del_blog){
                return("doesnot exist");
            }
            else{
                $del_blog->delete();
                return('deleted successfully');
            }
        } catch (\Throwable $e) {
            return ("An Error occured");
        }
    }
}
