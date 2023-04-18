<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\PutRequest;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Category::paginate(10));
    }

    public function all()
    {
        return response()->json(Category::get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        return response()->json(Category::create($request->validated()));
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        return response()->json(Category::find($category));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PutRequest $request, Category $category)
    {
        $category->update($request->validated());
        return response()->json($category);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return response()->json("OK");
    }

    public function posts(Category $category){
        // $posts = Post::join('categories', "categories.id","=","posts.category_id")
        // ->select("posts.*", "categories.title as category")
        // ->where("categories.id",$category->id)
        // ->get();
        // ->toSql();

        $posts = Post::with("category") //category es el nombre de nuestra relacion foranea
        ->where("category_id",$category->id)
        ->get();
        // ->toSql();

        return response()->json($posts);
    }

    public function slug($slug){
        $category = Category::where("slug", $slug)->firstOrFail();
        return response()->json($category);
    }
}
