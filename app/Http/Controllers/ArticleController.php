<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Article;


class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $page= $request->get('page');
        $limit= $request->get('limit');
        $status= $request->get('status');
        $offset=($page - 1) * $limit;; 

        $a =Article::where('status','=',$status)->offset($offset)->limit($limit)->get();
        $count = Article::where('status','=',$status)->offset($offset)->limit($limit)->count();

        $data = [
            'page'=>$page,
            'limit'=>$limit,
            'result' => $a,
            'total'=>$count
        ];

        return $data;
    }

    public function store(Request $request)
    {
        return Article::create($request->all());
    }
    
    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return 204;
    }
 
    public function show($id)
    {
        return Article::find($id);
    }

    public function count(Request $request)
    {
        $status= $request->status;
        $count = Article::where('status','=',$status)->count();
        $data = [
            'count'=>$count
        ];
        return response()->json($data);

    }

}