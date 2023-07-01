<?php

namespace App\Http\Controllers;

use App\Http\Requests\Articles\CreateArticleRequest;
use App\Http\Requests\Articles\UpdateArticleRequest;
use App\Models\Article;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $articles = Article::orderBy('created_at', 'Desc')->paginate(request('perPage', 5));
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateArticleRequest $request)
    {
        //
        $input = $request->all();
        $file = $request->file('image');

        if ($request->hasFile('image')) {
            $name = preg_replace('/\s+/', '_', time() . '_' . $file->getClientOriginalName());
            $file->move('assets/Articles/img', $name);
            $input['image'] = $name;
        }
        Article::create($input);
        session()->flash('success', 'تم اضافة المقال بنجاح');

        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
        return view('articles.create', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleRequest $request, Article $article)
    {
        //
        $input = $request->all();
        $file = $request->file('image');

        if ($request->hasFile('image')){
            $name = preg_replace('/\s+/', '_', time() . '_' . $file->getClientOriginalName());
            $oldImage = 'assets/Articles/img/' . $article->image;
            if (file_exists($oldImage)) {
                unlink($oldImage);
            }
            $file->move('assets/Articles/img', $name);
            $input['image'] = $name;
        }
        $article->update($input);
        session()->flash('success', 'تم تحديث المقال بنجاح');

        return redirect()->route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
        $oldImage = 'assets/Articles/img/' . $article->image;
        if (file_exists($oldImage)) {
            unlink($oldImage);
        }
        $article->delete();
        session()->flash('success', 'تم حذف المقال بنجاح');

        return redirect()->route('articles.index');
    }
}
