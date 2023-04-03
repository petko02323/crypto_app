<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Article;

use App\Http\Controllers\Controller;
use DB;

class ArticleController extends Controller
{

    public static $perPage = 20;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($page=null, $orderBy=null, $how=null, Request $request)
    {
        $orderHow = ($how) ? 'desc' : 'asc';
        $param = (array_key_exists($orderBy, Article::getModelAttributes()))? $orderBy : 'id';

        $pars = Article::mainTableValues();
        $models = Article::orderBy($param, $orderHow)->simplePaginate(self::$perPage, ['*'], '', ($page)?: 1);
        // ck editor
        return view('admin.article.index', compact(['models', 'pars', 'page', 'orderBy', 'how']));
    }

    public function create(){
        $data = Article::getModelAttributes();
        $editables =['body'];


        return view('admin.article.create', compact(['editables', 'data']));
    }

    public function store(Request $request){
        //validation
        $this->validate($request, Article::$rules);

        // najprv ulozime model
        $new = new Article();
        $new->title = $request->title;
        $new->body = $request->body;
        $new->save();


        return redirect()->route('indexArticles')->with('info', 'Článok bol vytvorený');;
    }

    public function edit($id){
        $article = Article::find($id); ;
        $data = Article::getModelAttributes();
        $editables =['body'];
        return view('admin.article.update', compact(['editables', 'article', 'data']));
    }

    public function update(Request $request){
        //validation
        $this->validate($request, Article::$rules);
        //update
        $article = Article::find($request->uid);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();


        return redirect()->route('indexArticles')->with('info', 'Článok bol upravený');
    }

    public function delete($id){
        $articles = Article::find($id);
        $articles->delete();
        return redirect()->route('indexArticles')->with('info', 'Článok bol vymazaný.');
    }


}
