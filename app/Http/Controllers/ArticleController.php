<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('index' , 'show', 'byCategory', 'search', 'byUser');
    }

    public function byCategory(Category $category){
        $articles = $category->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted == true;
        });
        return view('article.category', compact('category', 'articles'));
    }

    public function byWriter(User $user){
        $articles = $user->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted == true;
        });
        return view('article.by-user', compact('user', 'articles'));
    }

    public function byUser(User $user){
        $articles = $user->articles->sortByDesc('created_at')->filter(function($article){
            return $article->is_accepted == true;
        });
        return view('article.user', compact('user', 'articles'));
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->get();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|unique:articles|min:5',
            'body' => 'required|min:10',
            'image' => 'image|required',
            'category' => 'required',
            'price' => 'required|integer',
            'tags' => 'required',
        ]);

        $article = Article::create([
            'title'=> $request->title,
            'body'=> $request->body,
            'image'=> $request->file('image')->store('public/images'),
            'category_id'=> $request->category,
            'user_id'=> Auth::user()->id,
            'price' => $request->price,
        ]);

        $tags = explode(', ', $request->tags);

        foreach($tags as $tag){
            $newTag = Tag::updateOrCreate([
                'name' => $tag,
            ]);
            $article->tags()->attach($newTag);
        }

        return redirect(route('homepage'))->with('message' , 'Articolo inserito correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit' , compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|unique:articles,title|min:5' . article->id,
            'body' => 'required|min:10',
            'image' => 'image',
            'category' => 'required',
            'price' => 'required',
            'tags' => 'required',
        ]);

        $article->update([
            'title'=> $request->title,
            'body'=> $request->body,
            'category_id'=> $request->category,
            'price' => $request->price,
        ]);

        if($request->image){
            Storage::delete($article->image);
            $article->update([
                'image' => $request->file('image')->store('public/images'),
            ]);        
        }

        $tags = explode(', ', $request->tags);
        $newTags = [];

        foreach($tag as $tag){
            $newTag = Tag::updateOrCreate([
                'name' => $tag,
            ]);
            $newTags[] = $newTag->id;                  
        }
        
        $article->tags()->sync($newTags);

        return redirect( route('writer.dashboard'))->with('message' , 'Hai aggiornato correttamente la tua ricetta');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        foreach($article->tags as $tag){
            $article->tags()->detach($tag);
        }

        $article->delete();

        return redirect( route('writer.dashboard'))->with('message' , 'Hai cancellato correttamente la tua ricetta');
    }

    public function articleSearch(Request $request){
        $query = $request->input('query');
        $articles = Article::all()->searchable();
        $articles = Article::search($query)->where('is_accepted', true)->orderBy('created_at', 'desc')->get();

        return view('article.search-index', compact('articles', 'query'));
    }
}
